<?php

namespace App\Http\Controllers;

use App\Http\Requests\LowonganRequest;
use App\Models\Category;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.lowongan.index', [
            'lowongan' => Lowongan::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lowongan.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LowonganRequest $request)
    {
        $validated = $request->validated();

        DB::transaction(function () use ($validated) {
            $validated['perusahaan_id'] = auth()->user()->perusahaan->id;

            Lowongan::create($validated);
        });

        return to_route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lowongan $lowongan)
    {
        return view('lowongan.show', [
            'lowongan' => $lowongan->load('category'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lowongan $lowongan)
    {
        return view('lowongan.edit', [
            'loker' => $lowongan->load('category'),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LowonganRequest $request, Lowongan $lowongan)
    {
        $validated = $request->validated();

        DB::transaction(function () use ($validated, $lowongan) {
            $lowongan->update($validated);
        });

        return to_route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lowongan $lowongan)
    {
        DB::transaction(function () use ($lowongan) {
            $lowongan->delete();
        });

        return back();
    }

    public function toggleStatus(Lowongan $lowongan)
    {
        DB::transaction(function () use ($lowongan) {
            $lowongan->update([
                'is_active' => !$lowongan->is_active
            ]);
        });

        return back();
    }
}
