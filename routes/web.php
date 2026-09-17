<?php

use App\Livewire\Auth\Login;
use App\Livewire\Material\MaterialCreate;
use App\Livewire\Material\MaterialEdit;
use App\Livewire\Material\MaterialIndex;
use App\Livewire\Movimentacao\MovimentacaoCreate;
use App\Livewire\Movimentacao\MovimentacaoIndex;
use Illuminate\Support\Facades\Route;

Route::get('material/create', MaterialCreate::class)->name('material.create');
Route::get('material/edit/{id}', MaterialEdit::class)->name('material.edit');
Route::get('material', MaterialIndex::class)->name('material.index');

Route::get('movimentacao/create', MovimentacaoCreate::class)->name('movimentacao.create');
Route::get('movimentacao', MovimentacaoIndex::class)->name('movimentacao.index');

Route::get('login', Login::class)->name('login');