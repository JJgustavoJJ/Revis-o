<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='store'>
  <div class="col-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" wire:model='nome' class="form-control" id="nome" >
  </div>
  <div class="col-12">
    <label for="valor" class="form-label">Valor</label>
    <input type="text" wire:model='valor'  class="form-control" id="valor">
  </div>
  <div class="col-md-12">
    <label for="quantidade" class="form-label">Quantidade Estoque</label>
    <input type="text" wire:model='quantidade' class="form-control" id="quantidade">
  </div>
  <div class="col-md-2">
    <label for="quantidade_minima" class="form-label">Quantidade Minima</label>
    <input type="text" wire:model='quantidade_minima' class="form-control" id="quantidade_minima">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
</div>
