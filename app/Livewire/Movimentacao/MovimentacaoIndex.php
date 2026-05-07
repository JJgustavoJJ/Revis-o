<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
<<<<<<< HEAD
use App\Models\Produto;
=======
>>>>>>> 539253e8efbfab3f170918437dce88270322275b
use Livewire\Component;

class MovimentacaoIndex extends Component
{   
    public function render()

    {
<<<<<<< HEAD
         $movimentacaos = Movimentacao::all();
=======
        $movimentacaos = Movimentacao::all();
>>>>>>> 539253e8efbfab3f170918437dce88270322275b
        return view('livewire.movimentacao.movimentacao-index', compact('movimentacaos'));
    }
}
