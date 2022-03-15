<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([

            'nombre'=> 'Falda corta',
            'marca'=> 'Zara',
            'precio'=> '$250',
            'tipo'=>'chica',
            'url'=> 'https://www.diariodesevilla.es/2021/04/21/wappissima/tendencias/Falda-corta-flores-Stradivarius-celeste_1567053549_137430691_1200x1332.png',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
