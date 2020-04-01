<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CoronaController extends Controller
{
    public function index()
    {
        $provinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $indonesia = Http::get('https://covid19.mathdro.id/api/countries/Indonesia/confirmed');
        $provinsi and $indonesia->successful(error_log('Good'));
        $data = $provinsi->json();
        $base = $indonesia->json();
        return view('index', compact('data', 'base'));
    }
}
