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
            'deskripsi' => 'landing page modern dan responsif. Cocok untuk tugas kuliah seperti membuat portofolio pribadi, halaman profil, atau promosi produk.',
            'harga' => 200000,
            'alat' => 'HTML, CSS, JS, PHP' 
        ]);
        DB::table('tb_service')->insert([
            'nama_service' => 'Website CRUD',
            'deskripsi' => 'website dengan fungsi CRUD untuk tugas database sederhana seperti sistem katalog buku, atau daftar tugas.',
            'harga' => 200000,
            'alat' => 'HTML, CSS, JS, PHP, MYSQL'
        ]);
        DB::table('tb_service')->insert([
            'nama_service' => 'Website Undangan Digital',
            'deskripsi' => 'Buat undangan pernikahan atau acara spesial Anda dengan desain elegan dan link yang mudah dibagikan.',
            'harga' => 200000,
            'alat' => 'HTML, CSS, JS, PHP'
        ]);
        DB::table('tb_service')->insert([
            'nama_service' => 'Redesign Website',
            'deskripsi' => 'Memperbarui tampilan Website Anda Jadi Lebih Baik dan Sesuai Dengan Yang Anda Inginkan',
            'harga' => 100000,
            'alat' => 'HTML, CSS, JS, PHP'
        ]);
    }
}
