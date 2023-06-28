<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerusahaanRequest;
use App\Models\Industri;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.perusahaan.index', [
            'perusahaan' => Perusahaan::paginate(5),
            'perusahaan_total' => Perusahaan::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Perusahaan $perusahaan)
    {
        return view('perusahaan.show', [
            'perusahaan' => $perusahaan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.edit', [
            'perusahaan' => $perusahaan,
            'industries' => Industri::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PerusahaanRequest $request, Perusahaan $perusahaan)
    {
        $validated = $request->validated();

        DB::transaction(function () use ($perusahaan, $validated) {
            if (request()->hasFile('logo_path')) {
                if (Storage::disk('public')->exists('perusahaan/logo/' . $perusahaan->logo_path)) {
                    Storage::disk('public')->delete('perusahaan/logo/' . $perusahaan->logo_path);
                }

                $logo_name = $validated['logo_path']->hashName();
                $validated['logo_path'] = $logo_name;
                request()->file('logo_path')->storeAs('perusahaan/logo/', $logo_name);
            }
            if (request()->hasFile('file_path')) {
                if (Storage::disk('public')->exists('perusahaan/dokumen/' . $perusahaan->file_path)) {
                    Storage::disk('public')->delete('perusahaan/dokumen/' . $perusahaan->file_path);
                }

                $file_name = time() . '-' . $validated['file_path']->getClientOriginalName();
                $validated['file_path'] = $file_name;
                request()->file('file_path')->storeAs('perusahaan/dokumen/', $file_name);
            }

            $perusahaan->update($validated);
        });

        return to_route('d.perusahaan.show', $perusahaan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perusahaan $perusahaan)
    {
        DB::transaction(function () use ($perusahaan) {
            if (Storage::disk('public')->exists('perusahaan/dokumen/' . $perusahaan->file_path)) {
                Storage::disk('public')->delete('perusahaan/dokumen/' . $perusahaan->file_path);
            }
            if (Storage::disk('public')->exists('perusahaan/logo/' . $perusahaan->logo_path)) {
                Storage::disk('public')->delete('perusahaan/logo/' . $perusahaan->logo_path);
            }

            $perusahaan->delete();
        });

        return to_route('dashboard');
    }

    /**
     * Remove the specified file from storage.
     */
    public function download(Perusahaan $perusahaan)
    {
        return response()->file(
            public_path('storage/perusahaan/dokumen/' . $perusahaan->file_path),
            ['content-type' => 'application/pdf']
        );
    }

    /**
     * Remove the specified file from storage.
     */
    public function deleteFile(Perusahaan $perusahaan)
    {
        DB::transaction(function () use ($perusahaan) {
            if (Storage::disk('public')->exists('perusahaan/dokumen/' . $perusahaan->file_path)) {
                Storage::disk('public')->delete('perusahaan/dokumen/' . $perusahaan->file_path);
            }

            $perusahaan->file_path = '';
            $perusahaan->save();
        });

        return back();
    }
}
