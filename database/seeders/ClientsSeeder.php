<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Carlos Daniel',
            'last_name' => 'Gomez Lopez',
            'address' => 'bien lejos',
            'dni' => '12345678',
            'dni_type' => 0,
            'status' => 0,
            'email' => 'correo1@correo.com',
            'password' => Hash::make('00000000'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'name' => 'Pedro',
            'last_name' => 'Navaja',
            'address' => 'Muy muy lejano',
            'dni' => '00000000',
            'dni_type' => 0,
            'status' => 0,
            'email' => 'correo2@correo.com',
            'password' => Hash::make('00000000'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'name' => 'Juanito',
            'last_name' => 'Calabaza',
            'address' => 'return to home',
            'dni' => '11111111',
            'dni_type' => 0,
            'status' => 0,
            'email' => 'correo3@correo.com',
            'password' => Hash::make('00000000'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'name' => 'Mario',
            'last_name' => 'Bros',
            'address' => 'behind the sun',
            'dni' => '22222222',
            'dni_type' => 0,
            'status' => 0,
            'email' => 'correo4@correo.com',
            'password' => Hash::make('00000000'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
