<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'ADM',
            'email' => 'adm@senai.br',
            'password' => Hash::make('123'),

        ]);

       Material::create([
            [
                'material' => 'Martelo',
                'aplicacao' => 'Fixar pregos',
                'unid_medida' => 'un',
                'valor' => 45.00,
                'data_val' => null,
                'quan_estoque' => 15,
                'qnt_minima' => 5,
            ],
            [
                'material' => 'Furadeira',
                'aplicacao' => 'Perfurar materiais rígidos',
                'unid_medida' => 'un',
                'valor' => 290.00,
                'data_val' => null,
                'quan_estoque' => 4,
                'qnt_minima' => 5,
                
            ],
            [
                'material' => 'Cimento',
                'aplicacao' => 'Estruturação',
                'unid_medida' => '50Kg',
                'valor' => 35.00,
                'data_val' => '12 meses',
                'quan_estoque' => 50,
                'qnt_minima' => 5,
                
            ],
            [
                'material' => 'Trena',
                'aplicacao' => 'Medição de áreas',
                'unid_medida' => 'un',
                'valor' => 140.00,
                'data_val' => null,
                'quan_estoque' => 3,
                'qnt_minima' => 5,
                
            ],
            [
                'material' => 'Fita Isolante',
                'aplicacao' => 'Isolamento de fios elétricos',
                'unid_medida' => '15m',
                'valor' => 25.00,
                'data_val' => null,
                'quan_estoque' => 8,
                'qnt_minima' => 5,
                
            ],
        ]);
    }
}
    