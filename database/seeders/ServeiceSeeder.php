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
            'nama_service' => 'Landing Page',
            'deskripsi' => 'Desain landing page modern dan responsif untuk memperkenalkan produk, layanan, atau portofolio Anda dengan profesional.',
            'harga' => 200000
        ]);
        DB::table('tb_service')->insert([
            'nama_service' => 'Website CRUD',
            'deskripsi' => 'Bangun website dengan fitur manajemen data sederhana yang sesuai untuk tugas kuliah atau proyek kerja Anda.',
            'harga' => 200000
        ]);
        DB::table('tb_service')->insert([
            'nama_service' => 'Website Undangan Digital',
            'deskripsi' => 'Buat undangan pernikahan atau acara spesial Anda dengan desain elegan dan link yang mudah dibagikan.',
            'harga' => 200000
        ]);
        DB::table('tb_service')->insert([
            'nama_service' => 'Redesign Website',
            'deskripsi' => 'Memperbarui tampilan Website Anda Jadi Lebih Baik dan Sesuai Dengan Yang Anda Inginkan',
            'harga' => 100000
        ]);
    }
}
