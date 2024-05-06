<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Categoria::create([
            'nombre' => 'Electronica'
        ]);
        Categoria::create([
            'nombre' => 'Hogar'
        ]);
        Categoria::create([
            'nombre' => 'Salud'
        ]);
        Categoria::create([
            'nombre' => 'Herramientas'
        ]);
        Categoria::create([
            'nombre' => 'Tecnologia'
        ]);

    }
}