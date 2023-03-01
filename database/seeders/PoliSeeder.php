<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poli;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poli::insert([
            [
                'kode_poli'=>'PM',
                'nama_poli'=>'Poliklinik Mata',
                'jumlah'=>99,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PA',
                'nama_poli'=>'Poliklinik Anak',
                'jumlah'=>99,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PTHT',
                'nama_poli'=>'Poliklinik THT',
                'jumlah'=>99,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PJ',
                'nama_poli'=>'Poliklinik Jiwa',
                'jumlah'=>99,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PS',
                'nama_poli'=>'Poliklinik Saraf',
                'jumlah'=>99,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PG',
                'nama_poli'=>'Poliklinik Gizi',
                'jumlah'=>99,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
        ]);
    }
}
