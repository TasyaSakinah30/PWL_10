<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\Mahasiswa_MataKuliah;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswaMatkul = [
            [
                'mahasiswa_id' => Mahasiswa::min('nim'),
                'matakuliah_id' => '1',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => Mahasiswa::min('nim'),
                'matakuliah_id' => '2',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => Mahasiswa::min('nim'),
                'matakuliah_id' => '3',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => Mahasiswa::min('nim'),
                'matakuliah_id' => '4',
                'nilai' => 'A'
            ],
          
        ];
        DB::table('mahasiswa_matakuliah')->insert($mahasiswaMatkul);
    }
}
