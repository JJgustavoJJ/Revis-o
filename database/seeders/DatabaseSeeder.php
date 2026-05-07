<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::create([
        'name' => 'Adimin',
        'email' => 'admin@senai.br',
        'passord' => Hash::make('123'),
       ]);

       Produto::create([
        'nome' => 'Martelo',
        'valor' => 50.90,
        'qtn_estoque' => 0,
        'qtn_minima' =>5
       ]);

       Produto::create([
        'nome' => 'Alicate',
        'valor' => 30,
        'qtn_estoque' => 0,
        'qtn_minima' => 3
       ]);

       Produto::create([
        'nome' => 'Furadeira',
        'valor' => 99.99,
        'qtn_estoque' => 0,
        'qtn_minima' => 8
       ]);
        
        
    }
}
