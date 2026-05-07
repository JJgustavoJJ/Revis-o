<<<<<<< HEAD
<div class= "mt-5 ">
    <div class="mb-3">
        <table class="table table-hover ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Quantidade Movimentada</th>
                    <th scope="col">Data Movimentação</th>
                    <th scope="col">tipo</th>
                    <
                    
                    th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($movimentacaos as $p)
                    <tr>
                        <th scope="produtos">{{ $p->id }}</th>
                        <td>{{ $p->quantidade }}</td>
                        <td>{{ $p->data_movimentacao }}</td>
                        <td>{{ $p->tipo }}</td>
                        <td>{{ $p->produto_id }}</td>
                        <td>{{$p->usuario_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
=======
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
                                    <td>{{ $m->produto_id }}</td>
                                    <td>{{ $m->user_id }}</td>
                                    <td>{{$m->tipo}}</td>
                                    <td>{{ $m->quantidade }}</td>
                                    <td>{{ $m->data_movimentacao }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
>>>>>>> 539253e8efbfab3f170918437dce88270322275b
</div>
