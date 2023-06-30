<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Perusahaan;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            'lowongan' => Lowongan::where('is_active', true)->with('perusahaan')->limit(6)->get(),
            'perusahaan' => Perusahaan::with('industri')->limit(6)->withCount('lowongan')->get(),
        ]);
    }

    public function lowongan()
    {

        $lowongan = Lowongan::query()->when(
            request('query'),
            function ($query) {
                return $query->where('judul', 'like', '%' . request('query') . '%')
                    ->orWhere('lokasi', 'like', '%' . request('query') . '%')
                    ->orWhereHas('category', function (Builder $query) {
                        $query->where('name', 'like', '%' . request('query') . '%');
                    })
                    ->orWhereHas('perusahaan', function (Builder $query) {
                        $query->where('nama_perusahaan', 'like', '%' . request('query') . '%')
                            ->orWhereHas('industri', function (Builder $query) {
                                $query->where('name', 'like', '%' . request('query') . '%');
                            });
                    });
            },
        )->get();

        return view('lowongan', [
            'lowongan' => $lowongan,
        ]);
    }

    public function lowonganDetail(Lowongan $lowongan)
    {
        $lowongan->clicks()->firstOrCreate([
            'user_agent' => request()->userAgent(),
            'ip' => request()->ip(),
        ]);

        return view('lowongan-detail', [
            'lowongan' => $lowongan,
        ]);
    }

    public function perusahaan()
    {
        return view('perusahaan', [
            'perusahaan' => Perusahaan::with('industri')->withCount('lowongan')->get(),
        ]);
    }

    public function perusahaanDetail(Perusahaan $perusahaan)
    {
        return view('perusahaan-detail', [
            'perusahaan' => $perusahaan,
        ]);
    }
}
