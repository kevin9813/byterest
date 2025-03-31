<?php

use Illuminate\Support\Facades\Route;

//Controller
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\SettingPageController;
use App\Http\Controllers\UserController;


Route::middleware('web')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
});

Route::get('/', function () { return view('page'); }); //Page
Route::get('/login', [LoginController::class, 'index'])->name('login'); // Login view
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout']); // logout

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [GeneralController::class, 'dashboard']); // Dashboard
    
    //Users
    Route::prefix("user")->group(function () {
        Route::post("create", [LoginController::class, "createUser"]); //Create user
    });

    //Permission
    Route::prefix("permission")->group(function () {
        Route::get("/", [UserController::class, "viewPermission"]); //permission
        Route::get("/list", [GeneralController::class, "getPermission"]); //permission
        Route::get("/by-role", [UserController::class, "getRolesWithPermissions"]); //Permission by role

        Route::post("/addAndDelete", [UserController::class, "addDeletePermissionByRole"]); //Agregar eliminar permisos
    });

    //Users
    Route::prefix("general")->group(function () {
        Route::get("categories", [GeneralController::class, "categoriesByCompany"]); //Create user
        Route::get("roles", [UserController::class, "getRolesByCompany"]); //Create user
    });

    //Productos
    Route::prefix("product")->group(function () {
        Route::get("/", [ProductsController::class, "index"]); //List Product view

        Route::post("list", [ProductsController::class, "listByCompany"]); //List Product view
        Route::post("/file", [ProductsController::class, "addUpdateProducts"]); //Add Update Products
    });

    //Comany
    Route::prefix("company")->group(function () {
        Route::get("/", [CompaniesController::class, "index"]); //List Product view
        Route::get("/page", [SettingPageController::class, "index"]); //setting page view
        Route::get("/detail", [CompaniesController::class, "detail"]); //Detail company
    });
});

