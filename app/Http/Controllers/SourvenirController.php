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
    public function index()
    {
        $sourvenirs = Sourvenir::all();
        return view('admin.sourvenir', compact('sourvenirs'));
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
            'nama_sourvenir' => $request->nama_sourvenir,
            'harga_sourvenir' => $request->harga_sourvenir,
            'deskripsi_sourvenir' => $request->deskripsi_sourvenir,
            'foto_sourvenir' => $request->foto_sourvenir,
        ]);

        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                // Simpan gambar ke storage dan ambil path-nya
                $imagePath = $file->store('multiple_foto_sourvenir', 'public');

                // Simpan path ke dalam database
                SourvenirImage::create([
                    'sourvenir_id' => $sourvenir->id_sourvenir,  // Pastikan id dekorasi benar
                    'image_path' => $imagePath,  // Simpan path gambar ke database
                ]);
            }
        }

        return redirect('admin/sourvenir')->with('succes', 'Item berhasil ditambahkan');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sourvenir $sourvenir)
    {
        //
    }
}
