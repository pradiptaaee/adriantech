<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServeiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_service')->insert([
            'nama_service' => 'CRUD',
            'deskripsi' => 'membuat sistem crud dengan php',
            'harga' => 200000
        ]);
    }
}
