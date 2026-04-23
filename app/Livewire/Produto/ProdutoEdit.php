<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produto_id;
    public $nome;
    public $valor;
    public $quantidade;
    public $quantidade_minima;

    public function mount($id){
        $produto = Produto::find($id);
        if($produto == null){
            session()->flash('error', 'não encontrado');
            return redirect()->route('produto.index');
        }
        $this->produto_id = $produto->id;
        $this->nome = $produto->nome;
        $this->valor = $produto->valor;
        $this->quantidade = $produto->quantidade;
        $this->quantidade_minima = $produto->quantidade_minima;

    }

    public function render()
    {
        
        return view('livewire.produto.produto-edit');
    }
}
