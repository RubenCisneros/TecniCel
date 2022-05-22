<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Revisión',
            'price' => 0,
            'description' => 'Revisar un dispisitivo para buscar la causa u origen de una falla.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('services')->insert([
            'name' => 'Reparar pantalla de iphone 6s',
            'price' => 1100,
            'description' => 'Reemplazar la pantalla de un iphone 6s nueva',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('services')->insert([
            'name' => 'Limpieza a una laptop o PC',
            'price' => 200,
            'description' => 'Limpiar los componentes internos y externos de na laptop o computadora de escritorio',
            'crated_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('services')->insert([
            'name' => 'Solucionar problemas de BIOS',
            'price' => 250,
            'description' => 'Reinstalar los drives de la BIOS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
