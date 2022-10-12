<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Ração Golden',
            'descricao' => '1kg - Filhotes',
            'categoria_id' => '1'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Ração Golden',
            'descricao' => '1kg - Pequeno Porte',
            'categoria_id' => '1'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Ração Golden',
            'descricao' => '1kg - Médio Porte',
            'categoria_id' => '1'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Ração Golden',
            'descricao' => '1kg - Grande Porte',
            'categoria_id' => '1'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Pacote de Bifinhos',
            'descricao' => '20 unidades - Sabor carne',
            'categoria_id' => '1'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Pacote de Bifinhos',
            'descricao' => '20 unidades - Sabor frango',
            'categoria_id' => '1'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Shampoo e Condicionador Ibasa',
            'descricao' => '200mL',
            'categoria_id' => '2'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Sabonete Matacura',
            'descricao' => '1 unidade',
            'categoria_id' => '2'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Perfume Ibasa',
            'descricao' => '150mL',
            'categoria_id' => '2'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Talco AntiPulgas Ibasa',
            'descricao' => '100g',
            'categoria_id' => '2'
        ]);
    }
}
