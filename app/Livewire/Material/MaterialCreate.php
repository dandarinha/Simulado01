<?php

namespace App\Livewire\Material;

use App\Models\Material;
use Livewire\Component;

class MaterialCreate extends Component
{

    public $material;
    public $data_val;
    public $unid_medida;
    public $aplicacao;
    public $valor;
    public $qtd_estoque;
    public $qtd_minima;

    public function store()
    {
        Material::create([
            'material' => $this->material,
            'valor' => $this->valor,
            'data_val' => $this->data_val,
            'unid_medida' => $this->unid_medida,
            'aplicacao' => $this->aplicacao,
            'qtd_estoque' => $this->qtd_estoque,
            'qtd_minima' => $this->qtd_minima,
        ]);

        session()->flash('success', 'Cadastrado');
        return redirect()->route('material.index');
    }

    public function render()
    {
        return view('livewire.material.material-create');
    }
}
