<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Http\Requests\StorePetugasRequest;
use App\Http\Requests\UpdatePetugasRequest;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data petugas
        $petugas = Petugas::all();

        // Mengembalikan view index dengan data petugas
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengembalikan view untuk membuat petugas baru
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetugasRequest $request)
    {
        // Membuat petugas baru berdasarkan data yang diterima dari form
        Petugas::create($request->validated());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('petugas.index')->with('success', 'Data Petugas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petuga)
    {
        // Mengembalikan view detail dengan data petugas yang dipilih
        return view('petugas.show', compact('petuga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petuga)
    {
        // Mengembalikan view edit dengan data petugas yang dipilih
        return view('petugas.edit', compact('petuga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetugasRequest $request, Petugas $petuga)
    {
        // Mengupdate data petugas berdasarkan data yang diterima dari form
        $petuga->update($request->validated());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('petugas.index')->with('success', 'Data Petugas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petuga)
    {
        // Menghapus data petugas berdasarkan ID
        $petuga->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('petugas.index')->with('success', 'Data Petugas berhasil dihapus');
    }
}