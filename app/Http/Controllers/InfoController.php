<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi/');
        $data = $response->json();
        $title="Data Covid-19 Provinsi Indonesia";  
        
        return view('index', compact('title','data'));
    }
}
