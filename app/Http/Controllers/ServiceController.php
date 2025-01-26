<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $title = 'Layanan Kami';
        $services = Service::all(); // Ambil semua data
        return view('service.index', compact('title', 'services'));
    }

    // Menampilkan detail layanan berdasarkan ID
    public function show($id)
    {
        $title = 'Detail Layanan';
        $service = Service::findOrFail($id); // Cari data berdasarkan ID
        return view('service.show', compact('title', 'service'));
    }
}
