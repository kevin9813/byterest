<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GeneralController;

class EmployeeController extends Controller
{
    //Views
    public function viewEmployee(){
        GeneralController::renderHeader([
            "tittle" => "Employee",
            "submodule" => 1
        ]);

        echo view("components.employee.employee", []);
        GeneralController::renderFooter(["components/employee/employee"], "", 2, 2);
    }
}
