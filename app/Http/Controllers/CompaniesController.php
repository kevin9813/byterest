<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GeneralController;

//Models
use App\Models\Company;
use App\Models\User;


class CompaniesController extends Controller
{
    public function index(){
        GeneralController::renderHeader([
            "tittle" => "Company",
            "submodule" => 1
        ]);

        echo view("components.setting.company.company", []);

        $scripts = [
            "components/setting/company/company",
        ];
        GeneralController::renderFooter($scripts, "", 2, 2);
    }
    
    public function detail(){

        $company = Company::select('id', 'name', 'nit', 'slogan')
        ->with(['branches', 'branches.city'])
        ->where('id', session('company_id'))
        ->first();

        return $company;
       
    }
}
