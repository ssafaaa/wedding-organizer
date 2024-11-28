<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\GedungImage;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gedungs = Gedung::all();
        return view('admin.gedung', compact('gedungs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gedungs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upload foto menu
        $fotoPath = null;
        if ($request->hasFile('foto_gedung')) {
            $fotoPath = $request->file('foto_gedung')->store('foto_gedung', 'public');
        };

        $gedung = Gedung::create([
            'nama_gedung' => $request->input('nama_gedung'),
            'tipe_gedung' => $request->input('tipe_gedung'),
            'alamat_gedung' => $request->input('alamat_gedung'),
            'kapasitas_gedung' => $request->input('kapasitas_gedung'),
            'harga_sewa_gedung' => $request->input('harga_sewa_gedung'),
            'status_gedung' => $request->input('status_gedung'),
            'deskripsi_gedung' => $request->input('deskripsi_gedung'),
            'foto_gedung' => $fotoPath,
        ]);

        if($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                $imagePath = $file->store('multiple_foto_gedung', 'public');
                GedungImage::create([
                    'gedung_id' => $gedung->id_gedung,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect('admin/gedung')->with('succes', 'Item berhasil ditambahkan');


        // return back()->with('error', 'Gagal menyimpan data. Silakan coba lagi.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Gedung $gedung)
    {
        return view('gedungs.show', compact('gedung'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gedung $gedung)
    {
        return view('gedungs.edit', compact('gedung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gedung $gedung)
    {
        // return $request;
        // Mengambil data request dan update gedung

        // Jika ada file 'foto_gedung' yang diunggah, simpan dan dapatkan path-nya
    if ($request->hasFile('foto_gedung')) {
        $fotoPath = $request->file('foto_gedung')->store('foto_gedung', 'public');
    } else {
        $fotoPath = $gedung->foto_gedung; // Jika tidak ada file baru, tetap gunakan foto lama
    }

    // Update data gedung
    $gedung->update([
        'nama_gedung' => $request->nama_gedung,
        'tipe_gedung' => $request->tipe_gedung,
        'alamat_gedung' => $request->alamat_gedung,
        'kapasitas_gedung' => $request->kapasitas_gedung,
        'harga_sewa_gedung' => $request->harga_sewa_gedung,
        'status_gedung' => $request->status_gedung,
        'deskripsi_gedung' => $request->deskripsi_gedung,
        'foto_gedung' => $fotoPath, // Menggunakan foto baru atau foto lama jika tidak ada file baru
    ]);

    // Mengelola multiple_foto jika ada
    if ($request->hasFile('multiple_foto')) {
        foreach ($request->file('multiple_foto') as $file) {
            $imagePath = $file->store('multiple_foto_gedung', 'public');

            // Membuat entri baru untuk setiap foto multiple
            $gedung->images()->create([
                'image_path' => $imagePath,
            ]);
        }
    }

        return redirect()->back()->with('success', 'Gedung berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gedung $gedung)
    {
        //
    }
}
