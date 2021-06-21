<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function first()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $response->json();

        $title="Data Dashboard";     
        return view('admin.dashboard', compact('title','data'));
    }
}
