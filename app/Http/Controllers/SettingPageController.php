<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingPageController extends Controller
{   

    //Views
    public function index(){ 
        GeneralController::renderHeader([
            "tittle" => "Page",
            "submodule" => 1
        ]);

        echo view("components.setting.page.config-page", []);

        GeneralController::renderFooter(["components/setting/page/config-page"], "", 2, 2);
    }

}
