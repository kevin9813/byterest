<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\City;
use App\Models\Company;
use App\Models\Branch;
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
            'name' => 'Cali',
        ]); 

        Company::factory()->create([
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
        ]); 
    }
}
