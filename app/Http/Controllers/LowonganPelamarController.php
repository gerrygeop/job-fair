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

    public function store(Lowongan $lowongan)
    {
        if (is_null(auth()->user()->pelamar->resume_path)) {
            return redirect()->route('lowongan-kerja.detail', $lowongan)->with('status', 'resume-null');
        }

        $lowongan->pelamar()->sync(auth()->user()->pelamar->id);

        return to_route('pelamar.lamaran');
    }
}
