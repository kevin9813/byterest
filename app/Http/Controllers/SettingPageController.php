<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingPageController extends Controller
{   

    public function index(){ ///View
        GeneralController::renderHeader([
            "usuario" => "",
            "tittle" => "Page",
            "submodule" => 1
        ]);

        echo view("components.setting.page.config-page", []);

        $scripts = [
            "components/setting/page/config-page",
        ];
        GeneralController::renderFooter($scripts, "", 2, 2);
    }

}
