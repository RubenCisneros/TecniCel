<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrador
        DB::table('users')->insert([
            'name' => 'Ruben',
            'first_surname' => 'Cisneros',
            'second_surname' => 'Haro',
            'email' => 'ruben@gmail.com',
            'password' => Hash::make('password')
        ]);

        // Inventario
        DB::table('users')->insert([
            'name' => 'Santiago',
            'first_surname' => 'Haro',
            'second_surname' => 'Púlido',
            'email' => 'santiago@gmail.com',
            'password' => Hash::make('password')
        ]);

        // Técnico 1
        DB::table('users')->insert([
            'name' => 'Jonathan',
            'first_surname' => 'Gutierrez',
            'second_surname' => 'Arzeo',
            'email' => 'jonathan@gmail.com',
            'password' => Hash::make('password')
        ]);

        // Técnico 2
        DB::table('users')->insert([
            'name' => 'Juan',
            'first_surname' => 'Gonzales',
            'second_surname' => 'Gonzales',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('password')
        ]);

        // Secretaria
        DB::table('users')->insert([
            'name' => 'Estela',
            'first_surname' => 'Villanueva',
            'second_surname' => 'Rodriguez',
            'email' => 'estela@gmail.com',
            'password' => Hash::make('password')

        ]);

        // Clientes
        DB::table('users')->insert([
            'name' => 'Rick',
            'first_surname' => 'Sanchez',
            'second_surname' => 'Sanchez',
            'email' => 'rick@gmail.com',
            'password' => Hash::make('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Morty',
            'first_surname' => 'Sanchez',
            'second_surname' => 'Smith',
            'email' => 'morty@gmail.com',
            'password' => Hash::make('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Summer',
            'first_surname' => 'Sanchez',
            'second_surname' => 'Smith',
            'email' => 'summer@gmail.com',
            'password' => Hash::make('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Beth',
            'first_surname' => 'Sanchez',
            'second_surname' => 'biid',
            'email' => 'beth@gmail.com',
            'password' => Hash::make('password')
        ]);

        DB::table('users')->insert([
            'name' => 'John',
            'first_surname' => 'Smith',
            'second_surname' => 'Kirk',
            'email' => 'john@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
