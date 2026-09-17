<?php

namespace App\Livewire\Movimentacao;

use App\Models\Material;
use App\Models\Movimentacao;
use Livewire\Component;

class MovimentacaoCreate extends Component
{
    public $materiais;
    public $id_material;
    public $tipo = 'saida';
    public $quantidade_movimentada;
    public $data_movimentacao;
    public $alertaEstoque;

    public function mount()
    {
        $this->materiais = Material::orderBy('material')->get();
        $this->data_movimentacao = now()->format('d-m-Y');
    }


    public function render()
    {
        return view('livewire.movimentacao.movimentacao-create');
    }

    public function store()
    {
        $material = Material::find($this->id_material);
        if ($material->qtd_estoque < $this->quantidade_movimentada && $this->tipo == "saida") {
            $this->addError('quantidade_movimentada', 'ESTOQUE INSUFICIENTE');
            return;
        }

        if ($this->tipo == "entrada") {
            $material->qtd_estoque += $this->quantidade_movimentada;
        } else {
            $material->qtd_estoque -= $this->quantidade_movimentada;
        }

        Movimentacao::create([
            'quantidade' => $this->quantidade_movimentada,
            'data_movimentacao' => $this->data_movimentacao,
            'tipo' => $this->tipo,
            'material_id' => $this->material_id,
            'user_id' => $this->user_id,
        ]);

        $material->update();

        // verificar estoque baixo
        $material->refresh();
        if ($material->qtd_estoque < $material->qtd_minima) {
            $this->alertaEstoque = "ALERTA: Estoque baixo para {$material->material}. 
        Quantidade Atual : {$material->qtd_estoque}";
        } else {
            $this->alertaEstoque = "";
        }

        session()->flash('message', 'Movimentação registrada com sucesso');
        $this->reset(['quantidade_movimentada', 'tipo']);
        $this->$material = Material::orderBy('material')->get();
    }
}