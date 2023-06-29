<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;

class LowonganPelamarController extends Controller
{
    public function index(Lowongan $lowongan)
    {
        return view('lowongan.list-pelamar', [
            'lowongan' => $lowongan
        ]);
    }
}
