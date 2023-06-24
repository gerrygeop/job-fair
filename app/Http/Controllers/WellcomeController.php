<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function wellcome()
    {
        return view('welcome', [
            'lowongan' => Lowongan::with('perusahaan')->limit(6)->get(),
            'perusahaan' => Perusahaan::with('industri')->withCount('lowongan')->get(),
        ]);
    }

    public function lowongan()
    {
        return view('lowongan', [
            'lowongan' => Lowongan::with('perusahaan')->get(),
        ]);
    }
}
