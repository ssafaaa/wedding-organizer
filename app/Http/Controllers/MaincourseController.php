<?php

namespace App\Http\Controllers;

use App\Models\Maincourse;
use App\Models\MainCImage;
use Illuminate\Http\Request;

class MaincourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maincourses = Maincourse::all();
        return view('admin.maincourse', compact('maincourses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('maincourses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upload foto menu
        $fotoPath = null;
        if ($request->hasFile('foto_mainC')) {
            $fotoPath = $request->file('foto_mainC')->store('foto_mainC', 'public');
        };

        $maincourses = Maincourse::create([
            'nama_paket_mainC' => $request->nama_paket_mainC,
            'deskripsi_mainC' => $request->deskripsi_mainC,
            'harga_paket_mainC' => $request->harga_paket_mainC,
            'foto_mainC' => $fotoPath,
        ]);

        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                // Simpan gambar ke storage dan ambil path-nya
                $imagePath = $file->store('multiple_foto_maincourse', 'public');

                // Simpan path ke dalam database
                MainCImage::create([
                    'maincourse_id' => $maincourses->id_maincourse,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect('admin/maincourse')->with('succes', 'Item berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Maincourse $maincourse)
    {
        return view('maincourses.show', compact('maincourse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maincourse $maincourse)
    {
        return view('maincourses.edit', compact('maincourse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maincourse $maincourse)
{
    // Validasi input
    $request->validate([
        'nama_paket_mainC' => 'required|string|max:255',
        'deskripsi_mainC' => 'nullable|string',
        'harga_paket_mainC' => 'required|numeric',
        'foto_mainC' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Mengelola foto_mainC
    if ($request->hasFile('foto_mainC')) {
        // Simpan file baru
        $fotoPath = $request->file('foto_mainC')->store('foto_mainC', 'public');
    } else {
        // Gunakan file lama
        $fotoPath = $maincourse->foto_mainC;
    }

    // Update data maincourse
    $maincourse->update([
        'nama_paket_mainC' => $request->nama_paket_mainC,
        'deskripsi_mainC' => $request->deskripsi_mainC,
        'harga_paket_mainC' => $request->harga_paket_mainC,
        'foto_mainC' => $fotoPath, // Menggunakan variabel $fotoPath
    ]);

    // Mengelola multiple_foto jika ada
    if ($request->hasFile('multiple_foto')) {
        foreach ($request->file('multiple_foto') as $file) {
            $imagePath = $file->store('multiple_foto_maincourse', 'public');
            $maincourse->maincourseImagesimages()->create([
                'image_path' => $imagePath,
            ]);
        }
    }

    return redirect()->back()->with('success', 'Maincourse updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maincourse $maincourse)
    {
        //
    }
}
