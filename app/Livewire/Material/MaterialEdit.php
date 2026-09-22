<?php

namespace App\Livewire\Material;

use App\Models\Material;
use Livewire\Component;

class MaterialEdit extends Component
{
    public $material_id;
    public $material;
    public $data_val;
    public $unid_medida;
    public $aplicacao;
    public $valor;
    public $qtd_estoque;
    public $qtd_minima;

    public function mount($id){
        $material = Material::find($id);
        if ($material == null){
            session()->flash('error','Não encontrado');
        return redirect()->route('material.index');
        }

        $this->material_id = $material->id;        
        $this->material = $material->material;
        $this->valor = $material->valor;
        $this->data_val = $material->data_val;
        $this->unid_medida = $material->unid_medida;
        $this->aplicacao = $material->aplicacao;
        $this->qtd_estoque = $material->qtd_estoque;
        $this->qtd_minima = $material->qtd_minima;
    }

    public function update()
    {
        $material = Material::find($this->material_id);

        if ($material == null){
            session()->flash('error','Não encontrado');
        return redirect()->route('material.index');
        }

        $material->material = $this->material;
        $material->valor = $this->valor;
        $material->data_val = $this->data_val;
        $material->unid_medida = $this->unid_medida;
        $material->aplicacao = $this->aplicacao;
        $material->qtd_estoque = $this->qtd_estoque;
        $material->qtd_minima = $this->qtd_minima;

        $material->save();

        session()->flash('success','Atualizado');
        return redirect()->route('material.index');
    }

    public function delete()
    {
        
    }


    public function render()
    {
        return view('livewire.material.material-edit');
    }
}