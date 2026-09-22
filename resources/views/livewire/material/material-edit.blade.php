<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='update'>
        <div class="col-4">
            <label for="material" class="form-label">Material</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome do material" wire:model='material'>
            @error('material') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="col-2">
            <label for="medida" class="form-label">Unidade Medida</label>
            <input type="text" class="form-control" id="medida" placeholder="ex:(unid, kg, ml)" wire:model='unid_medida'>
            @error('unid_medida') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <!-- Aplicação -->
        <div class="col-6">
            <label for="aplicacao" class="form-label">Aplicação</label>
            <input type="text" class="form-control" id="aplicacao" placeholder="Aplicação do material" wire:model='aplicacao'>
            @error('aplicacao') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="col-2">
            <label for="data" class="form-label">Data Validade</label>
            <input type="date" class="form-control" id="data" wire:model='data_val'>
            @error('data_val') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="col-2">
            <label for="valor" class="form-label">Valor</label>
            <div class="input-group">
                <span class="input-group-text reach-input-group-text">R$</span>
                <input type="number" wire:model="valor" class="form-control" step="0.01">
            </div>
            @error('valor') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-2">
            <label for="qtd_estoque" class="form-label">Qtd. Estoque</label>
            <input type="number" class="form-control" id="qtd_estoque" wire:model='qtd_estoque'>
            @error('qtd_estoque') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-2">
            <label for="qtd_minima" class="form-label">Qtd. Mínima</label>
            <input type="number" class="form-control" id="qtd_minima" wire:model='qtd_minima'>
            @error('qtd_minima') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
