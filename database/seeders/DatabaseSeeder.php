<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ADM',
            'email' => 'adm@senai.com',
            'password' => Hash::make('123'),
        ]);

        
        $materiais = [
            [
                'material' => 'Martelo',
                'aplicacao' => 'Fixar pregos',
                'unid_medida' => '1unid',
                'valor' => 45.00,
                'data_val' => '2000-01-01',
                'qtd_estoque' => 15,
                'qtd_minima' => 5,
            ],
            [
                'material' => 'Furadeira',
                'aplicacao' => 'Perfurar materiais rígidos',
                'unid_medida' => '1unid',
                'valor' => 290.00,
                'data_val' => '2000-01-01',
                'qtd_estoque' => 4,
                'qtd_minima' => 5,  
            ],
            [
                'material' => 'Cimento',
                'aplicacao' => 'Estruturação',
                'unid_medida' => '50Kg',
                'valor' => 35.00,
                'data_val' => '2000-01-01', 
                'qtd_estoque' => 50, 
                'qtd_minima' => 5, 
            ],
            [
                'material' => 'Trena',
                'aplicacao' => 'Medição de áreas',
                'unid_medida' => '1unid',
                'valor' => 140.00,
                'data_val' => '2000-01-01',
                'qtd_estoque' => 3, 
                'qtd_minima' => 5,   
            ],
            [
                'material' => 'Fita Isolante',
                'aplicacao' => 'Isolamento de fios elétricos',
                'unid_medida' => '15m',
                'valor' => 25.00,
                'data_val' => '2000-01-01',
                'qtd_estoque' => 8,  
                'qtd_minima' => 5,   
            ],
        ];

        foreach ($materiais as $material) {
            Material::create($material);
        }
    }
}
