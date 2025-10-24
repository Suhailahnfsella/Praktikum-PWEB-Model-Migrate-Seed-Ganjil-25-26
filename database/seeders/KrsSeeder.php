<?php

namespace Database\Seeders;

use App\Models\Krs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $krses = [
            [
                'user_id' => 1,
                'matkul_id' => 1,
                'semester' => 5,
                'tahun_ajaran' => 25
            ],
            [
                'user_id' => 1,
                'matkul_id' => 2,
                'semester' => 5,
                'tahun_ajaran' => 25
            ],
            [
                'user_id' => 2,
                'matkul_id' => 1,
                'semester' => 7,
                'tahun_ajaran' => 25
            ],
        ];

        foreach ($krses as $krs) {
            Krs::create($krs);
        }
    }
}
