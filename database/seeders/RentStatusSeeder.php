<?php

namespace Database\Seeders;

use App\Models\RentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RentStatus::create([
            'name' => 'Menunggu Verifikasi'
        ]);
        RentStatus::create([
            'name' => 'Sedang Dipinjam'
        ]);
        RentStatus::create([
            'name' => 'Sudah Dikembalikan'
        ]);
        RentStatus::create([
            'name' => 'Dikembalikan Terlambat'
        ]);
        RentStatus::create([
            'name' => 'Gagal'
        ]);
    }
}
