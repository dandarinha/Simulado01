<div class="mt-5">
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="mb-3">
        <input type="text" wire:model.live='search' placeholder="Pesquisar..." class="form-control">
    </div>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Material</th>
                <th scope="col">Tipo</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data</th>
                <th scope="col">Usuário</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movimentacaos as $m)
            <tr wire:key="movimentacao-{{ $m->id }}">
                <td>{{ $m->material->id }} - {{ $m->material->material }}</td>
                <td>
                    @if($m->tipo == 'ENTRADA')
                    <span class="badge bg-primary">ENTRADA</span>
                    @else
                    <span class="badge bg-danger">SAÍDA</span>
                    @endif
                </td>
                <td>{{ $m->quantidade_movimentada }}</td>
                <td>{{ \Carbon\Carbon::parse($m->data_movimentacao)->format('d/m/Y') }}</td>
                <td>{{ $m->user_id }} - {{ $m->user->name }}</td>
                <td>
                    <button wire:click="delete({{ $m->id }})" 
                            wire:confirm="Tem certeza que deseja excluir esta movimentação?" 
                            class="btn btn-sm btn-danger">
                        Excluir
                    </button>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
