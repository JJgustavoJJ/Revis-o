<div class= "mt-5 ">

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Produto ID</th>
                                <th>User ID</th>
                                <th>Tipo</th>
                                <th>Quantidade</th>
                                <th>Data_Movimentação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movimentacaos as $m)
                                <tr>
                                    <td>{{ $m->produto_id }} - {{ $m->produto->nome }}</td>
                                    <td>{{ $m->user_id }} - {{ $m->user->name }}</td>
                                    
                                    <td>

                                        @if($m->tipo == 'entrada')
                                        <span class="badge bg-primary">Entrada</span>
                                        @else
                                        <span class="badge bg-danger">Saída</span>
                                        @endif
                                    </td>
                                    <td>{{ $m->quantidade }}</td>
                                 <td>{{\Carbon\carbon::parse($m->data_movimentacao)->format('d/m/Y')}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
