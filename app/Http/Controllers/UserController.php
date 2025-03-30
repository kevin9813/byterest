<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\GeneralController;


class UserController extends Controller
{
    public function viewPermission(){
        GeneralController::renderHeader([
            "tittle" => "Permisos",
            "submodule" => 1
        ]);
        echo view("components.setting.permission.permission", []);

        $scripts = [];
        GeneralController::renderFooter($scripts, "", 2, 2);
    }
}
