<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $valor;
    public $quantidade;
    public $quantidade_minima;

    public function store(){
        Produto::create([
            'nome' => $this->nome,
            'valor' => $this->valor,
            'quantidade'=>$this->quantidade,
            'quantidade_minima'=>$this->quantidade_minima
        ]);
        session()->flash('success', 'cadastrado');
        return redirect()->route('produto.index');
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
