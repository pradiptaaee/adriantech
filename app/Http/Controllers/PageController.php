<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        $services = Service::take(4)->get(); // Mengambil 4 layanan

        return view('home', compact('services'));
    }
    function about(){
        $title= 'Tentang Kami';

        return view('about', compact('title'));
    }
    public function layanan()
    {
        $title = 'Layanan Kami';
        $services = Service::all(); // Ambil semua data
        return view('layanan', compact('title', 'services'));
    }
}
