<div class= "mt-5 ">
    <div class="mb-3">
        <table class="table table-hover ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Quantidade Movimentada</th>
                    <th scope="col">Data Movimentação</th>
                    <th scope="col">tipo</th>
                    <th scope="col"></th>
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
</div>
