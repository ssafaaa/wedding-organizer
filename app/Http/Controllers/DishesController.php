<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use App\Models\DishesImage;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dishes::all();
        return view('admin.dishes', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upload foto menu
        $fotoPath = null;
        if ($request->hasFile('foto_dishes')) {
            $fotoPath = $request->file('foto_dishes')->store('foto_dishes', 'public');
        };

        $dishes = Dishes::create([
            'nama_paket_dishes' => $request->nama_paket_dishes,
            'deskripsi_dishes' => $request->deskripsi_dishes,
            'harga_paket_dishes' => $request->harga_paket_dishes,
            'foto_dishes' => $fotoPath
        ]);

        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                // Simpan gambar ke storage dan ambil path-nya
                $imagePath = $file->store('multiple_foto_dishes', 'public');

                // Simpan path ke dalam database
                DishesImage::create([
                    'dishes_id' => $dishes->id_dishes,  // Pastikan id dishes benar
                    'image_path' => $imagePath,  // Simpan path gambar ke database
                ]);
            }
        }

        return redirect('admin/dishes')->with('succes', 'Item berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dishes $dishes)
    {
        return view('dishes.show', compact('dishes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dishes $dishes)
    {
        return view('dishes.edit', compact('dishes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dishes $dishes)
    {
        // return $request;
        // Mengambil data request dan update dishes

        // Jika ada file 'foto_dishes' yang diunggah, simpan dan dapatkan path-nya
    if ($request->hasFile('foto_dishes')) {
        $fotoPath = $request->file('foto_dishes')->store('foto_dishes', 'public');
    } else {
        $fotoPath = $dishes->foto_dishes; // Jika tidak ada file baru, tetap gunakan foto lama
    }

    // Update data dishes
    $dishes->update([
        'nama_paket_dishes' => $request->nama_paket_dishes,
        'harga_paket_dishes' => $request->harga_paket_dishes,
        'deskripsi_dishes' => $request->deskripsi_dishes,
        'foto_dishes' => $fotoPath, // Menggunakan foto baru atau foto lama jika tidak ada file baru
    ]);

    // Mengelola multiple_foto jika ada
    if ($request->hasFile('multiple_foto')) {
        foreach ($request->file('multiple_foto') as $file) {
            $imagePath = $file->store('multiple_foto_dishes', 'public');

            // Membuat entri baru untuk setiap foto multiple
            $dishes->images()->create([
                'image_path' => $imagePath,
            ]);
        }
    }

        return redirect()->back()->with('success', 'dishes berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dishes $dishes)
    {
        //
    }
}
