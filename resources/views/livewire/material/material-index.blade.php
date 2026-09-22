<div class="mt-5">
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif

     @if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    <div class="mb-3">
        <input type="text" wire:model.live='search' placeholder="Pesquisar..." class="form-control">
    </div>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Material</th>
                <th scope="col">Unid. Medida</th>
                <th scope="col">Aplicação</th>
                <th scope="col">Data Val.</th>
                <th scope="col">Valor</th>
                <th scope="col">Qtd. Estoque</th>
                <th scope="col">Qtd. Mínima</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materiais as $m)
            <tr>
                <th scope="row">{{$m->id}}</th>
                <td>{{$m->material}}</td>
                <td>{{$m->unid_medida}}</td>
                <td>{{$m->aplicacao}}</td>
                <td>{{$m->data_val}}</td>
                <td>{{$m->valor}}</td>
                <td>{{$m->qtd_estoque}}</td>
                <td>{{$m->qtd_minima}}</td>
                <td> <a href="{{route('material.edit', ['id' => $m->id])}}" class="btn btn-sm btn-warning">Editar</a>
                <button wire:click='delete({{$m->id}})' class="btn btn-sm btn-danger">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>