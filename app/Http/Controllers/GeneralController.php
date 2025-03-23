<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//Models
Use App\Models\Category;

class GeneralController extends Controller
{
    public static function renderHeader($variables, $version = 1) {
        if (!isset($variables["aditionalStyle"]) || $variables["aditionalStyle"] == "") {
            $variables["aditionalStyle"] = "";
        }

        if (!isset($variables["module"]) || $variables["module"] == "") {
            $variables["module"] = 0;
        }

        switch ($version) {
            case 1:
                if (Auth::check()) {
                    echo view("layouts.header", $variables);
                }else{
                    header("Location: /login");
                    die();
                }
            break;
        }
    }

    public static function renderFooter($script = "", $aditionalScript = "", $module = 1, $submodule = 1, $aditionalStyle = "") {
        echo view("layouts.footer")
        ->with("script", $script)
        ->with("aditionalScript", $aditionalScript)
        ->with("module", $module)
        ->with("submodule", $submodule)
        ->with("aditionalStyle", $aditionalStyle);
    }

    public function dashboard(){
        $this->renderHeader([
            "usuario" => "Prueba",
            "tittle" => "Home",
            "submodule" => 1
        ]);

        echo view("components.home.dashboard", [
            ]);

        $scripts = [
            "plugins/apexcharts.min",
            "pages/dashboard-sale"
        ];
        $this->renderFooter($scripts, "", 2, 2);
    }


    //Funciones Generales
    public function categoriesByCompany(){
        return Category::whereIn('company_id', [1,session('company_id')])->get();
    }
    

}
