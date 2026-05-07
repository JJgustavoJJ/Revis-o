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
<<<<<<< HEAD
       User::create([
        'name' => 'Adimin',
        'email' => 'admin@senai.br',
        'password' => Hash::make('123'),
       ]);

       Produto::create([
        'nome' => 'Martelo',
        'valor' => 50.90,
        'qtd_estoque' => 0,
        'qtd_minima' =>5
       ]);

       Produto::create([
        'nome' => 'Alicate',
        'valor' => 30,
        'qtd_estoque' => 0,
        'qtd_minima' => 3
       ]);

       Produto::create([
        'nome' => 'Furadeira',
        'valor' => 99.99,
        'qtd_estoque' => 0,
        'qtd_minima' => 8
       ]);
        
        
=======
        //User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@senai.br',
            'password' => Hash::make('123'),
        ]);

        //Produto
        Produto::create([
            'nome' => 'Martelo',
            'valor' => 50.90,
            'qtd_estoque' => 0,
            'qtd_minima' => 5
        ]);

        Produto::create([
            'nome' => 'Alicate',
            'valor' => 30,
            'qtd_estoque' => 0,
            'qtd_minima' => 3
        ]);

        Produto::create([
            'nome' => 'Furadeira',
            'valor' => 99.99,
            'qtd_estoque' => 0,
            'qtd_minima' => 8
        ]);
>>>>>>> 539253e8efbfab3f170918437dce88270322275b
    }
}
