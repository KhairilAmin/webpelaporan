<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->insert(
            [
                'nama' => 'Taman Kota',
                'alamat' => 'Jl.Menganti, Gresik'
            ],
            [
                'nama' => 'Jalan Raya',
                'alamat' => 'Desa Bungah'
            ],
            [
                'nama' => 'Toilet Umum',
                'alamat' => 'Alun - alun Gresik'
            ],
            [
                'nama' => 'Lampu Jalan',
                'alamat' => 'Kecamatan Kebomas'
            ]
        );
    }
}
