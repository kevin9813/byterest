<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\City;
use App\Models\Company;
use App\Models\Branch;
use App\Models\Permission;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

       
        City::factory()->create([
            ['name' => 'Cali'],
            ['name' => 'Bogotá'],
            ['name' => 'Jamundi'],
            ['name' => 'Medellín'],
            ['name' => 'Barranquilla'],
            ['name' => 'Cartagena'],
            ['name' => 'Palmira']
        ]); 

        Permission::factory()->createMany([
            ['name' => 'Permisos válidos en todas las sucursales', 'type' => 0],
            // 1 Restaurantes y Sucursales
            ['name' => 'Ver compañia', 'type' => 1], 
            ['name' => 'Editar compañia', 'type' => 1],
            ['name' => 'Ver sucursales', 'type' => 1],
            ['name' => 'Crear sucursal', 'type' => 1],
            ['name' => 'Editar sucursal', 'type' => 1],
            ['name' => 'Eliminar sucursal', 'type' => 1],
            // 2 Usuarios y Roles
            ['name' => 'Ver usuarios', 'type' => 2],
            ['name' => 'Editar usuarios', 'type' => 4],
            ['name' => 'Eliminar usuarios', 'type' => 4],
            ['name' => 'Asignar roles', 'type' => 2],
            ['name' => 'Administrar roles', 'type' => 2],
            // 3 Productos y Menús
            ['name' => 'Ver productos', 'type' => 3],
            ['name' => 'Crear productos', 'type' => 3],
            ['name' => 'Editar productos', 'type' => 3],
            ['name' => 'Eliminar productos', 'type' => 3],
            ['name' => 'Administrar categorías', 'type' => 3],
            // 4 Pedidos
            ['name' => 'Ver pedidos', 'type' => 4],
            ['name' => 'Editar pedidos', 'type' => 4],
            ['name' => 'Cancelar pedidos', 'type' => 4],
            // 5 Facturación
            ['name' => 'Ver facturas', 'type' => 5],
            ['name' => 'Generar factura', 'type' => 5],
            ['name' => 'Anular factura', 'type' => 5],
            // 6 Reportes y Finanzas
            ['name' => 'Gestionar ventas', 'type' => 6],
            ['name' => 'Gestionar gastos', 'type' => 6],
            ['name' => 'Gestionar inventario', 'type' => 6],
            ['name' => 'Exportar reportes', 'type' => 6],
            ['name' => 'Ver estado financiero', 'type' => 6],
            // 7 Pagina
            ['name' => 'Personalizar diseño', 'type' => 7],
            ['name' => 'Activar/Inactivar Pagina', 'type' => 7],
        ]);        

        Company::factory()->create([
            'id' => 1,
            'name' => 'Compania 1 test',
            'slogan' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit',
            'nit' => '123',
            'email' => 'email@email.com'
        ]); 

        Branch::factory()->create([
            'company_id' => 1,
            'name' => 'Compania 1 test',
            'address' => 'address 1 # 1'
        ]); 

        User::factory()->create([
            'name' => 'Test User',
            'usuario' => 'kevin13',
            'password' => '$2y$12$wWYkIN0fpQLnVFygCc2OkOKoE3zecKohKHZCxedjh2wejmswkkUU.',
            'company_id' => 1,
        ]); 
    }
}
