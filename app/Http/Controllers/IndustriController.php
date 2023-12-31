<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.industri.index', [
            'industries' => Industri::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.industri.form', [
            'industri' => new Industri()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100', 'unique:' . Industri::class]
        ]);

        DB::transaction(function () use ($validated) {
            $validated['slug'] = str()->slug($validated['name']);
            Industri::create($validated);
        });

        return to_route('d.industri.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Industri $industri)
    {
        return view('admin.industri.form', [
            'industri' => $industri
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Industri $industri)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100', 'unique:' . Industri::class]
        ]);

        DB::transaction(function () use ($validated, $industri) {
            $validated['slug'] = str()->slug($validated['name']);
            $industri->update($validated);
        });

        return to_route('d.industri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Industri $industri)
    {
        DB::transaction(function () use ($industri) {
            $industri->delete();
        });

        return back();
    }
}
