<?php

namespace App\Livewire\Material;

use App\Models\Material;
use Livewire\Component;

class MaterialIndex extends Component
{
    public $search='';

    public function delete($id)
    {
        $material = Material::find($id);

        if ($material != null) {
            $material->delete();
            session()->flash('success', 'Excluído');
        }
    }

    public function render()
    {
        $materiais = Material::where('material', 'like', '%'.$this->search.'%' )->get();

        return view('livewire.material.material-index', compact('materiais'));
    }
}