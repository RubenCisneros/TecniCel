<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Cargador Super Fast Charging 25W Blanco',
            'barcode' => '111111111111',
            'cost' => 300.5,
            'price' => 449,
            'stock' => 0,
            'description' => 'Brinda a tus dispositivos el poderoso soporte de carga que se merecen. El cargador de pared para carga súper rápida (25 W) proporciona una carga súper rápida de hasta 25 W para dispositivos compatibles. Utiliza el cargador de pared con un cable de carga oficial Samsung de tipo C a tipo C para obtener resultados óptimos.',
            'discount' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Adaptador de Viaje Negro',
            'barcode' => '111111111112',
            'cost' => 200,
            'price' => 310.5,
            'stock' => 0,
            'description' => '¿Quieres una carga rápida y segura? El adaptador de viaje carga los dispositivos móviles de Samsung con carga rápida adaptable a un máximo de 15 W para asegurarse de que obtengas la energía que necesitas de forma rápida y segura. Pasa menos tiempo conectado y más tiempo disfrutando de la vida.',
            'discount' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Galaxy Z Flip3 5G',
            'barcode' => '111111111113',
            'cost' => 4500,
            'price' => 6000,
            'stock' => 0,
            'description' => 'Se pliega en el bolsillo. Entra en tu cartera. Se desliza en tus jeans más ceñidos. Cuando lo sacas, se abre un teléfono inteligente 5G con pantalla completa que se adapta a tus ángulos favoritos.',
            'discount' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 2
        ]);

        DB::table([
            'name' => 'Galaxy Fold',
            'barcode' => '111111111114',
            'cost' => 5734,
            'price' => 7001,
            'stock' => 0,
            'description' => 'El teléfono que despliega el siguiente capítulo de los dispositivos móviles',
            'discount' => 16,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Audífonos in-ear inalámbricos Xiaomi Redmi AirDots negro',
            'barcode' => '111111111115',
            'cost' => 290,
            'price' => 355,
            'stock' => 0,
            'description' => 'small description about the product to bring a preview',
            'discount' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Audífonos Xiaomi Bluetooth MI TRUE WIRELESS EARBUDS BASIC',
            'barcode' => '111111111116',
            'cost' => 310,
            'price' => 405,
            'stock' => 0,
            'description' => 'small description about the product to bring a preview',
            'discount' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Galaxy Buds2',
            'barcode' => '111111111117',
            'cost' => 145,
            'price' => 210,
            'stock' => 0,
            'description' => 'Calidad de sonido que enriquece cada viaje de audio.',
            'discount' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Galaxy Buds+ BTS Edition',
            'barcode' => '111111111118',
            'cost' => 310,
            'price' => 420,
            'stock' => 0,
            'description' => 'Más micrófonos, menos ruido',
            'discount' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 4
        ]);

    }
}
