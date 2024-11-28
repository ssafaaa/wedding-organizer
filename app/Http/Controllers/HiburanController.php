<?php

namespace App\Http\Controllers;

use App\Models\Hiburan;
use App\Models\HiburanImage;
use Illuminate\Http\Request;

class HiburanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hiburan = Hiburan::all();
        return view('admin.hiburan', compact('hiburan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hiburans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upload foto menu
        $fotoPath = null;
        if ($request->hasFile('foto_hiburan')) {
            $fotoPath = $request->file('foto_hiburan')->store('foto_hiburan', 'public');
        };

        $hiburan = Hiburan::create([
            'nama_paket_hiburan' => $request->nama_paket_hiburan,
            'deskripsi_hiburan' => $request->deskripsi_hiburan,
            'harga_sewa_hiburan' => $request->harga_sewa_hiburan,
            'foto_hiburan' => $request->foto_hiburan,
        ]);

        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                // Simpan gambar ke storage dan ambil path-nya
                $imagePath = $file->store('multiple_foto_hiburan', 'public');

                // Simpan path ke dalam database
                HiburanImage::create([
                    'hiburan_id' => $hiburan->id_hiburan,  // Pastikan id hiburan benar
                    'image_path' => $imagePath,  // Simpan path gambar ke database
                ]);
            }
        }

        return redirect('admin/hiburan')->with('Succes', 'Item berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Hiburan $hiburan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hiburan $hiburan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hiburan $hiburan)
    {
        // return $request;
        // Mengambil data request dan update hiburan

        // Jika ada file 'foto_hiburan' yang diunggah, simpan dan dapatkan path-nya
    if ($request->hasFile('foto_hiburan')) {
        $fotoPath = $request->file('foto_hiburan')->store('foto_hiburan', 'public');
    } else {
        $fotoPath = $hiburan->foto_hiburan; // Jika tidak ada file baru, tetap gunakan foto lama
    }

    // Update data hiburan
    $hiburan->update([
        'nama_paket_hiburan' => $request->nama_paket_hiburan,
        'harga_sewa_hiburan' => $request->harga_sewa_hiburan,
        'deskripsi_hiburan' => $request->deskripsi_hiburan,
        'foto_hiburan' => $fotoPath, // Menggunakan foto baru atau foto lama jika tidak ada file baru
    ]);

    // Mengelola multiple_foto jika ada
    if ($request->hasFile('multiple_foto')) {
        foreach ($request->file('multiple_foto') as $file) {
            $imagePath = $file->store('multiple_foto_hiburan', 'public');

            // Membuat entri baru untuk setiap foto multiple
            $hiburan->hiburanImages()->create([
                'image_path' => $imagePath,
            ]);
        }
    }

        return redirect()->back()->with('success', 'hiburan berhasil diperbarui.');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hiburan $hiburan)
    {
        //
    }
}
