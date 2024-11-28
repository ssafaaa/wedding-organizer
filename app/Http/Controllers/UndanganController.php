<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use App\Models\UndanganImage;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $undangans = Undangan::all();
        return view('admin.undangan', compact('undangans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('undangans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upload foto menu
        $fotoPath = null;
        if ($request->hasFile('foto_undangan')) {
            $fotoPath = $request->file('foto_undangan')->store('foto_undangan', 'public');
        };

        $undangan = Undangan::create([
            'nama_undangan' => $request->nama_undangan,
            'bahan_undangan' => $request->bahan_undangan,
            'deskripsi_undangan' => $request->deskripsi_undangan,
            'harga_undangan' => $request->harga_undangan,
            'foto_undangan' => $request->foto_undangan,
        ]);

        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                // Simpan gambar ke storage dan ambil path-nya
                $imagePath = $file->store('multiple_foto_undangan', 'public');

                // Simpan path ke dalam database
                UndanganImage::create([
                    'undangan_id' => $undangan->id_undangan,  // Pastikan id dekorasi benar
                    'image_path' => $imagePath,  // Simpan path gambar ke database
                ]);
            }
        }

        return redirect('admin/undangan')->with('succes', 'Item berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Undangan $undangan)
    {
        return view('undangans.show', compact('undangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Undangan $undangan)
    {
        return view('undangans.edit', compact('undangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Undangan $undangan)
    {
        if ($request->hasFile('foto_undangan')) {
            $fotoPath = $request->file('foto_undangan')->store('foto_undangan', 'public');
        } else {
            $fotoPath = $undangan->foto_undangan; // Jika tidak ada file baru, tetap gunakan foto lama
        }

        // Update data gedung
        $undangan->update([
            'nama_undangan' => $request->nama_undangan,
            'bahan_undangan' => $request->bahan_undangan,
            'harga_undangan' => $request->harga_undangan,
            'deskripsi_undangan' => $request->deskripsi_undangan,
            'foto_undangan' => $fotoPath, // Menggunakan foto baru atau foto lama jika tidak ada file baru
        ]);

        // Mengelola multiple_foto jika ada
        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                $imagePath = $file->store('multiple_foto_undangan', 'public');

                // Membuat entri baru untuk setiap foto multiple
                $undangan->undanganImages()->create([
                    'image_path' => $imagePath,
                ]);
            }
        }

            return redirect()->back()->with('success', 'Gedung berhasil diperbarui.');

        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Undangan $undangan)
    {
        //
    }
}
