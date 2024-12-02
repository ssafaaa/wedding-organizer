<?php

namespace App\Http\Controllers;

use App\Models\Sourvenir;
use App\Models\SourvenirImage;
use Illuminate\Http\Request;

class SourvenirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $sourvenirs = $search ? Sourvenir::where('id_sourvenir', 'like', "%{$search}%")
            ->orWhere('nama_paket_sourvenir', 'like', "%{$search}%")
            ->orWhere('harga_sourvenir', 'like', "%{$search}%")->get()
            : Sourvenir::all();

        return view('admin.sourvenir', [
            'sourvenirs' => $sourvenirs,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sourvenirs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upload foto menu
        $fotoPath = null;
        if ($request->hasFile('foto_sourvenir')) {
            $fotoPath = $request->file('foto_sourvenir')->store('foto_sourvenir', 'public');
        };

        $sourvenir = Sourvenir::create([
            'nama_paket_sourvenir' => $request->input('nama_paket_sourvenir'),
            'deskripsi_sourvenir' => $request->input('deskripsi_sourvenir'),
            'harga_sourvenir' => $request->input('harga_sourvenir'),
            'foto_sourvenir' => $fotoPath,
        ]);

        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                // Simpan gambar ke storage dan ambil path-nya
                $imagePath = $file->store('multiple_foto_sourvenir', 'public');

                // Simpan path ke dalam database
                SourvenirImage::create([
                    'sourvenir_id' => $sourvenir->id_sourvenir,  // Pastikan id sourvenir benar
                    'image_path' => $imagePath,  // Simpan path gambar ke database
                ]);
            }
        }

        return redirect('admin/sourvenir')->with('Succes', 'Item berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sourvenir $sourvenir)
    {
        return view('sourvenirs.show', compact('sourvenir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sourvenir $sourvenir)
    {
        return view('sourvenirs.edit', compact('sourvenir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sourvenir $sourvenir)
    {
        // return $request;
        // Mengambil data request dan update sourvenir

        // Jika ada file 'foto_sourvenir' yang diunggah, simpan dan dapatkan path-nya
    if ($request->hasFile('foto_sourvenir')) {
        $fotoPath = $request->file('foto_sourvenir')->store('foto_sourvenir', 'public');
    } else {
        $fotoPath = $sourvenir->foto_sourvenir; // Jika tidak ada file baru, tetap gunakan foto lama
    }

    // Update data sourvenir
    $sourvenir->update([
        'nama_paket_sourvenir' => $request->nama_paket_sourvenir,
        'harga_sourvenir' => $request->harga_sourvenir,
        'deskripsi_sourvenir' => $request->deskripsi_sourvenir,
        'foto_sourvenir' => $fotoPath, // Menggunakan foto baru atau foto lama jika tidak ada file baru
    ]);

    // Mengelola multiple_foto jika ada
    if ($request->hasFile('multiple_foto')) {
        foreach ($request->file('multiple_foto') as $file) {
            $imagePath = $file->store('multiple_foto_sourvenir', 'public');

            // Membuat entri baru untuk setiap foto multiple
            $sourvenir->sourvenirImages()->create([
                'image_path' => $imagePath,
            ]);
        }
    }

        return redirect()->back()->with('success', 'sourvenir berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sourvenir $sourvenir)
    {
        //
    }
}
