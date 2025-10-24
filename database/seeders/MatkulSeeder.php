<?php

namespace Database\Seeders;

use App\Models\Matkul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkuls = [
            [
                'kode_matkul' => "KRS123",
                'nama_matkul' => "Pemrograman Website",
                'sks' => 3
            ],
            [
                'kode_matkul' => "KRS345",
                'nama_matkul' => "Pemrograman Mobile",
                'sks' => 3
            ],
        ];

        foreach ($matkuls as $matkul) {
            Matkul::create($matkul);
        }
    }
}
