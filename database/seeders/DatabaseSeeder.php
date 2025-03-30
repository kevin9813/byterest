<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\City;
use App\Models\Company;
use App\Models\Branch;
use App\Models\Permission;
use App\Models\Roles;
use App\Models\UserBranch;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ciudades 
        $cities = ['Cali', 'Bogotá', 'Jamundi', 'Medellín', 'Barranquilla', 'Cartagena', 'Palmira'];
        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }

        // Permisos
        $permissions = [
            ['name' => 'Permisos válidos en todas las sucursales', 'type' => 0, 'type_name' => 'General'],
            // 1 Compañia y Sucursales
            ['name' => 'Ver compañia', 'type' => 1, 'type_name' => 'Compañia y Sucursales'], 
            ['name' => 'Editar compañia', 'type' => 1, 'type_name' => 'Compañia y Sucursales'],
            ['name' => 'Ver sucursales', 'type' => 1, 'type_name' => 'Compañia y Sucursales'],
            ['name' => 'Crear sucursal', 'type' => 1, 'type_name' => 'Compañia y Sucursales'],
            ['name' => 'Editar sucursal', 'type' => 1, 'type_name' => 'Compañia y Sucursales'],
            ['name' => 'Eliminar sucursal', 'type' => 1, 'type_name' => 'Compañia y Sucursales'],
            // 2 Usuarios y Roles
            ['name' => 'Ver usuarios', 'type' => 2, 'type_name' => 'Usuarios y Roles'],
            ['name' => 'Editar usuarios', 'type' => 2, 'type_name' => 'Usuarios y Roles'],
            ['name' => 'Eliminar usuarios', 'type' => 2, 'type_name' => 'Usuarios y Roles'],
            ['name' => 'Asignar roles', 'type' => 2, 'type_name' => 'Usuarios y Roles'],
            ['name' => 'Administrar roles', 'type' => 2, 'type_name' => 'Usuarios y Roles'],
            // 3 Productos y Menús
            ['name' => 'Ver productos', 'type' => 3, 'type_name' => 'Productos y Menús'],
            ['name' => 'Crear productos', 'type' => 3, 'type_name' => 'Productos y Menús'],
            ['name' => 'Editar productos', 'type' => 3, 'type_name' => 'Productos y Menús'],
            ['name' => 'Eliminar productos', 'type' => 3, 'type_name' => 'Productos y Menús'],
            ['name' => 'Administrar categorías', 'type' => 3, 'type_name' => 'Productos y Menús'],
            // 4 Pedidos
            ['name' => 'Ver pedidos', 'type' => 4, 'type_name' => 'Pedidos'],
            ['name' => 'Editar pedidos', 'type' => 4, 'type_name' => 'Pedidos'],
            ['name' => 'Cancelar pedidos', 'type' => 4, 'type_name' => 'Pedidos'],
            // 5 Facturación
            ['name' => 'Ver facturas', 'type' => 5, 'type_name' => 'Facturación'],
            ['name' => 'Generar factura', 'type' => 5, 'type_name' => 'Facturación'],
            ['name' => 'Anular factura', 'type' => 5, 'type_name' => 'Facturación'],
            // 6 Reportes y Finanzas
            ['name' => 'Gestionar ventas', 'type' => 6, 'type_name' => 'Reportes y Finanzas'],
            ['name' => 'Gestionar gastos', 'type' => 6, 'type_name' => 'Reportes y Finanzas'],
            ['name' => 'Gestionar inventario', 'type' => 6, 'type_name' => 'Reportes y Finanzas'],
            ['name' => 'Exportar reportes', 'type' => 6, 'type_name' => 'Reportes y Finanzas'],
            ['name' => 'Ver estado financiero', 'type' => 6, 'type_name' => 'Reportes y Finanzas'],
            // 7 Página
            ['name' => 'Personalizar diseño', 'type' => 7, 'type_name' => 'Página'],
            ['name' => 'Activar/Inactivar Página', 'type' => 7, 'type_name' => 'Página'],
        ];
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
       

         // Compañía
         Company::create([
            'id' => 1,
            'name' => 'Compania 1 test',
            'slogan' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit',
            'nit' => '123',
            'email' => 'email@email.com'
        ]); 

         // Sucursal
         Branch::create([
            'id' => 1,
            'company_id' => 1,
            'city_id' => 1,
            'name' => 'Compania 1 test',
            'address' => 'address 1 # 1'
        ]); 

        // Rol
        Roles::create([
            'id' => 1,
            'name' => 'Administrador',
            'is_global' => 1
        ]); 

        // Usuario
        User::create([
            'id' => 1,
            'name' => 'Test User',
            'usuario' => 'kevin13',
            'password' => '$2y$12$wWYkIN0fpQLnVFygCc2OkOKoE3zecKohKHZCxedjh2wejmswkkUU.',
            'company_id' => 1,
            'role_id' => 1,
        ]); 

        // Asignar usuario a sucursal
        UserBranch::create([
            'user_id' => 1,
            'branch_id' => 1,
        ]);
    }
}
