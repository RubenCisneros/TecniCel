<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    // Paginas públicas
     DB::table('pages')->insert([
        'title' => 'Inicio',
        'name' => 'home',
        'permissions' => 'lectura'
     ]);

     DB::table('pages')->insert([
        'title' => 'Acerca de',
        'name' => 'about',
        'permissions' => 'lectura'
     ]);

     //Administrador

    }
}
