<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public $search='';

    public function delete($id){
        $produtos = Produto::find($id);

        if($produtos != null){
            $produtos->delete();
            session()->flash('success', 'Excluido');
        }
    }

    public function render()
    {
        $produtos = Produto::where('nome', 'like', '%'.$this->search. '%')->get();
        return view('livewire.produto.produto-index', compact('produtos'));
    }
}
