<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//Controllers
use App\Http\Controllers\GeneralController;

//Moldes
use App\Models\Roles;
use App\Models\RolePermission;
use App\Models\Permission;

class UserController extends Controller
{
    //Vistas
    public function viewPermission(){
        GeneralController::renderHeader([
            "tittle" => "Permisos",
            "submodule" => 1
        ]);
        echo view("components.setting.permission.permission", []);

        GeneralController::renderFooter(["components/setting/permission/permission"], "", 2, 2);
    }


    //Get
    public function getRolesByCompany(){
        return  Roles::where('company_id', session('company_id'))
            ->orWhere('is_global', true)
            ->get();
    }

    public function getRolesWithPermissions(){
        // Obtener todos los permisos
        $permissions = Permission::orderBy('type')->get();

        // Obtener los roles globales y los de la compañía en sesión
        $roles = Roles::where('company_id', session('company_id'))
            ->orWhere('is_global', true)
            ->get();

        // Obtener los permisos asignados a cada rol desde role_permission
        $rolePermissions = DB::table('role_permissions')
        ->join('permissions', 'role_permissions.permission_id', '=', 'permissions.id')
        ->whereIn('role_permissions.role_id', $roles->pluck('id')) // Filtrar por los roles obtenidos
        ->select('role_permissions.role_id', 'permissions.id', 'permissions.name', 'permissions.type')
        ->get();


        // Agrupar permisos por rol
        $roles = $roles->map(function ($role) use ($rolePermissions) {
            $role->permissions = $rolePermissions->where('role_id', $role->id)->values();
            return $role;
        });

        return response()->json([
            'permissions' => $permissions,
            'roles' => $roles
        ]);
    }


    //Post
    public function addDeletePermissionByRole(Request $request){
        if($request->isChecked){
            RolePermission::insert([
                'role_id'=> $request->roleId,
                'permission_id'=> $request->permissionId
            ]); 
            $message = "Permiso creado exitosamente";
        }else{
            RolePermission::where('role_id', $request->roleId)
              ->where('permission_id', $request->permissionId)
              ->delete();
            $message = "Permiso eliminado exitosamente";
        }

        return response()->json([
            'status' => 200,
            'message' => $message
        ]);
    }
}
