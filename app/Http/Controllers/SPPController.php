<?php

namespace App\Http\Controllers;

use App\Models\SPP;
use App\Http\Requests\StoreSppsRequest;
use App\Http\Requests\UpdateSppsRequest;

class SPPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data SPP
        $spps = SPP::all();

        // Mengembalikan view index dengan data SPP
        return view('spp.index', compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengembalikan view untuk membuat SPP baru
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSppsRequest $request)
    {
        // Membuat SPP baru berdasarkan data yang diterima dari form
        SPP::create($request->validated());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('spp.index')->with('success', 'Data SPP berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(SPP $spp)
    {
        // Mengembalikan view detail dengan data SPP yang dipilih
        return view('spp.show', compact('spp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SPP $spp)
    {
        // Mengembalikan view edit dengan data SPP yang dipilih
        return view('spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSppsRequest $request, SPP $spp)
    {
        // Mengupdate data SPP berdasarkan data yang diterima dari form
        $spp->update($request->validated());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('spp.index')->with('success', 'Data SPP berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SPP $spp)
    {
        // Menghapus data SPP berdasarkan ID
        $spp->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('spp.index')->with('success', 'Data SPP berhasil dihapus');
    }
}
