<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['nome' => 'Rações e Petiscos']);
        DB::table('categorias')->insert(['nome' => 'Higiene']);
        DB::table('categorias')->insert(['nome' => 'Acessórios e Brinquedos']);
        DB::table('categorias')->insert(['nome' => 'Roupas e Camas']);
        DB::table('categorias')->insert(['nome' => 'Medicamentos']);
    }
}
