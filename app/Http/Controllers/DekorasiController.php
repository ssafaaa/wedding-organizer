<?php

namespace App\Http\Controllers;

use App\Models\Dekorasi;
use Illuminate\Http\Request;

use App\Models\DekorasiImage;


class DekorasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $dekorasis = Dekorasi::all();
    //     return view('admin.dekorasi', compact('dekorasis'));

    //     $search = $request->input('search');

    // $dekorasis = Dekorasi::when($search, function ($query, $search) {
    //     return $query->where('id_dekorasi', 'like', "%{$search}%")
    //         ->orWhere('nama_dekorasi', 'like', "%{$search}%")
    //         ->orWhere('harga_dekorasi', 'like', "%{$search}%");
    // })->get();

    // return view('admin.dekorasi', compact('dekorasis', 'search'));

    // }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $dekorasis = $search ? Dekorasi::where('id_dekorasi', 'like', "%{$search}%")
            ->orWhere('nama_dekorasi', 'like', "%{$search}%")
            ->orWhere('harga_dekorasi', 'like', "%{$search}%")->get()
            : Dekorasi::all();

        return view('admin.dekorasi', [
            'dekorasis' => $dekorasis,
            'search' => $search
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dekorasis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upload foto menu
        $fotoPath = null;
        if ($request->hasFile('foto_dekorasi')) {
            $fotoPath = $request->file('foto_dekorasi')->store('foto_dekorasi', 'public');
        };

        $dekorasi = Dekorasi::create([
            'nama_dekorasi' => $request->input('nama_dekorasi'),
            'deskripsi_dekorasi' => $request->input('deskripsi_dekorasi'),
            'harga_dekorasi' => $request->input('harga_dekorasi'),
            'foto_dekorasi' => $fotoPath,
        ]);

        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                // Simpan gambar ke storage dan ambil path-nya
                $imagePath = $file->store('multiple_foto_dekorasi', 'public');

                // Simpan path ke dalam database
                DekorasiImage::create([
                    'dekorasi_id' => $dekorasi->id_dekorasi,  // Pastikan id dekorasi benar
                    'image_path' => $imagePath,  // Simpan path gambar ke database
                ]);
            }
        }

        return redirect('admin/dekorasi')->with('Succes', 'Item berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Dekorasi $dekorasi)
    {
        return view('dekorasis.show', compact('dekorasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dekorasi $dekorasi)
    {
        return view('dekorasis.edit', compact('dekorasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dekorasi $dekorasi)
    {
        // return $request;
        // Mengambil data request dan update dekorasi
        // dd($request);
        // Jika ada file 'foto_dekorasi' yang diunggah, simpan dan dapatkan path-nya
    if ($request->hasFile('foto_dekorasi')) {
        $fotoPath = $request->file('foto_dekorasi')->store('foto_dekorasi', 'public');
    } else {
        $fotoPath = $dekorasi->foto_dekorasi; // Jika tidak ada file baru, tetap gunakan foto lama
    }

    // Update data dekorasi
    $dekorasi->update([
        'nama_dekorasi' => $request->nama_dekorasi,
        'harga_dekorasi' => $request->harga_dekorasi,
        'deskripsi_dekorasi' => $request->deskripsi_dekorasi,
        'foto_dekorasi' => $fotoPath, // Menggunakan foto baru atau foto lama jika tidak ada file baru
    ]);

    // Mengelola multiple_foto jika ada
    if ($request->hasFile('multiple_foto')) {
        foreach ($request->file('multiple_foto') as $file) {
            $imagePath = $file->store('multiple_foto_dekorasi', 'public');

            // Membuat entri baru untuk setiap foto multiple
            $dekorasi->images()->create([
                'image_path' => $imagePath,
            ]);
        }
    }

        return redirect()->back()->with('success', 'Dekorasi berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dekorasi $dekorasi)
    {
        //
    }
}
