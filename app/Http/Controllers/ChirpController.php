<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
 
class ChirpController extends Controller
{
    public function index()
    {
        $chirps = Chirp::with('user')
            ->latest()
            ->take(50) 
            ->get();
 
        return view('home', ['chirps' => $chirps]);
    }
}
