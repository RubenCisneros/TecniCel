<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Cargador',
            'brand' => 'Samsung'
        ]);
        DB::table('categories')->insert([
            'name' => 'Celular',
            'brand' => 'Samsung'
        ]);
        DB::table('categories')->insert([
            'name' => 'Audifono',
            'brand' => 'Xiaomi'
        ]);
        DB::table('categories')->insert([
            'name' => 'Audifono',
            'brand' => 'Samsung'
        ]);
        DB::table('categories')->insert([
            'name' => 'Cargador',
            'brand' => 'Ahora'
        ]);
    }
}
