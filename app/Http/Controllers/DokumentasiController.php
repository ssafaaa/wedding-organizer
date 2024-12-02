<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;

use App\Models\DokumentasiImage;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $dokumentasis = $search ? Dokumentasi::where('id_dokumentasi', 'like', "%{$search}%")
            ->orWhere('nama_paket_dokumentasi', 'like', "%{$search}%")
            ->orWhere('harga_dokumentasi', 'like', "%{$search}%")->get()
            : Dokumentasi::all();

        return view('admin.dokumentasi', [
            'dokumentasis' => $dokumentasis,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokumentasis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upload foto menu
        $fotoPath = null;
        if ($request->hasFile('foto_dokumentasi')) {
            $fotoPath = $request->file('foto_dokumentasi')->store('foto_dokumentasi', 'public');
        };

        $dokumentasi = Dokumentasi::create([
            'nama_paket_dokumentasi' => $request->nama_paket_dokumentasi,
            'jenis_dokumentasi' => $request->jenis_dokumentasi,
            'deskripsi_dokumentasi' => $request->deskripsi_dokumentasi,
            'harga_dokumentasi' => $request->harga_dokumentasi,
            'foto_dokumentasi' => $fotoPath,
        ]);


        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                // Simpan gambar ke storage dan ambil path-nya
                $imagePath = $file->store('multiple_foto_dokumentasi', 'public');

                // Simpan path ke dalam database
                DokumentasiImage::create([
                    'dokumentasi_id' => $dokumentasi->id_dokumentasi,  // Pastikan id dokumentasi benar
                    'image_path' => $imagePath,  // Simpan path gambar ke database
                ]);
            }
        }

        return redirect('admin/dokumentasi')->with('succes', 'Item berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokumentasi $dokumentasi)
    {
        return view('dokumentasis.show', compact('dokumentasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokumentasi $dokumentasi)
    {
        return view('dokumentasis.edit', compact('dokumentasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokumentasi $dokumentasi)
    {
        // return $request;
        // Mengambil data request dan update dokumentasi

        // Jika ada file 'foto_dokumentasi' yang diunggah, simpan dan dapatkan path-nya
    if ($request->hasFile('foto_dokumentasi')) {
        $fotoPath = $request->file('foto_dokumentasi')->store('foto_dokumentasi', 'public');
    } else {
        $fotoPath = $dokumentasi->foto_dokumentasi; // Jika tidak ada file baru, tetap gunakan foto lama
    }

    // Update data dokumentasi
    $dokumentasi->update([
        'nama_paket_dokumentasi' => $request->nama_paket_dokumentasi,
        'jenis_dokumentasi' => $request->jenis_dokumentasi,
        'harga_dokumentasi' => $request->harga_dokumentasi,
        'deskripsi_dokumentasi' => $request->deskripsi_dokumentasi,
        'foto_dokumentasi' => $fotoPath, // Menggunakan foto baru atau foto lama jika tidak ada file baru
    ]);

    // Mengelola multiple_foto jika ada
    if ($request->hasFile('multiple_foto')) {
        foreach ($request->file('multiple_foto') as $file) {
            $imagePath = $file->store('multiple_foto_dokumentasi', 'public');

            // Membuat entri baru untuk setiap foto multiple
            $dokumentasi->dokumentasiImages()->create([
                'image_path' => $imagePath,
            ]);
        }
    }

        return redirect()->back()->with('success', 'dokumentasi berhasil diperbarui.');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokumentasi $dokumentasi)
    {
        //
    }
}
