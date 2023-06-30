<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelamarRequest;
use App\Models\Pelamar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pelamar.index', [
            'pelamar' => Pelamar::latest()->paginate(10),
            'pelamar_total' => Pelamar::count(),
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
    public function show(Pelamar $pelamar)
    {
        return view('pelamar.show', [
            'pelamar' => $pelamar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelamar $pelamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PelamarRequest $request, Pelamar $pelamar): RedirectResponse
    {
        $validated = $request->validated();

        DB::transaction(function () use ($validated, $pelamar) {
            if (request()->hasFile('photo_path')) {
                if (Storage::disk('public')->exists('pelamar/photo/' . $pelamar->photo_path)) {
                    Storage::disk('public')->delete('pelamar/photo/' . $pelamar->photo_path);
                }
                $photo_name = $validated['photo_path']->hashName();
                $validated['photo_path'] = $photo_name;
                request()->file('photo_path')->storeAs('pelamar/photo/', $photo_name);
            }
            if (request()->hasFile('resume_path')) {
                if (Storage::disk('public')->exists('pelamar/resume/' . $pelamar->resume_path)) {
                    Storage::disk('public')->delete('pelamar/resume/' . $pelamar->resume_path);
                }
                $resume_name = time() . '-' . $validated['resume_path']->getClientOriginalName();
                $validated['resume_path'] = $resume_name;
                request()->file('resume_path')->storeAs('pelamar/resume/', $resume_name);
            }

            $pelamar->update($validated);
        });

        return back()->with('status', 'pelamar-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelamar $pelamar)
    {
        //
    }

    public function download(Pelamar $pelamar)
    {
        return response()->file(
            public_path('storage/pelamar/resume/' . $pelamar->resume_path),
            ['content-type' => 'application/pdf']
        );
    }

    public function deleteFile(Pelamar $pelamar)
    {
        DB::transaction(function () use ($pelamar) {
            if (Storage::disk('public')->exists('pelamar/resume/' . $pelamar->resume_path)) {
                Storage::disk('public')->delete('pelamar/resume/' . $pelamar->resume_path);
            }

            $pelamar->resume_path = '';
            $pelamar->save();
        });

        return back();
    }
}
