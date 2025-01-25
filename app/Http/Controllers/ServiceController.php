<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $title = 'Layanan Kami';
        $services = Service::all();

        return view('service.index', compact('title', 'services'));
    }
}
