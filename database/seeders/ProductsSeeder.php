<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Harina PAN',
            'reference' => 'Harinaaaaa',
            'description' => '1Kg de Harina marca PAN',
            'price' => 1.10,
            'stock' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Harina Juana',
            'reference' => 'Peor que la PAN',
            'description' => '1Kg de Harina marca Juana',
            'price' => 0.95,
            'stock' => 30,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Arroz Blanco',
            'reference' => 'Arroz tipo 1',
            'description' => '1Kg de arroz blanco tipo 1',
            'price' => 1.20,
            'stock' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Pasta larga',
            'reference' => 'Pasta',
            'description' => '1Kg de Pasta larga',
            'price' => 1.30,
            'stock' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
