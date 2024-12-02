<?php

namespace App\Http\Controllers;

use App\Models\Bridalstyle;
use App\Models\BridalImage;
use Illuminate\Http\Request;

class BridalstyleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $bridalstyles = Bridalstyle::all();
        // return view('admin.bridalstyle', compact('bridalstyles'));

        $search = $request->input('search');

        $bridalstyles = $search ? Bridalstyle::where('id_bridalstyle', 'like', "%{$search}%")
            ->orWhere('nama_paket_bridalstyle', 'like', "%{$search}%")
            ->orWhere('harga_paket', 'like', "%{$search}%")->get()
            : Bridalstyle::all();

        return view('admin.bridal', [
            'bridalstyles' => $bridalstyles,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bridalstyles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fotoPath = null;

        if ($request->hasFile('foto_bridalstyle')) {
            $fotoPath = $request->file('foto_bridalstyle')->store('foto_bridalstyle', 'public');
        }

        $bridalstyle = Bridalstyle::create([
            'nama_paket_bridalstyle' => $request->input('nama_paket_bridalstyle'),
            'deskripsi_paket' => $request->input('deskripsi_paket'),
            'harga_paket' => $request->input('harga_paket'),
            'foto_bridalstyle' => $fotoPath,
        ]);

        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                $imagePath = $file->store('multiple_foto_bridalstyle', 'public');

                BridalImage::create([
                    'bridalstyle_id' => $bridalstyle->id_bridalstyle,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect('admin/bridalstyle')->with('Succes', 'Item berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bridalstyle $bridalstyle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bridalstyle $bridalstyle)
    {
        // Jika ada file 'foto_bridalstyle' yang diunggah, simpan dan dapatkan path-nya
        if ($request->hasFile('foto_bridalstyle')) {
            $fotoPath = $request->file('foto_bridalstyle')->store('foto_bridalstyle', 'public');
        } else {
            $fotoPath = $bridalstyle->foto_bridalstyle; // Jika tidak ada file baru, tetap gunakan foto lama
        }

        dd($request);
        
        // Update data bridalstyle
        $bridalstyle->update([
            'nama_paket_bridalstyle' => $request->nama_paket_bridalstyle,
            'harga_paket' => $request->harga_paket,
            'deskripsi_paket' => $request->deskripsi_paket,
            'foto_bridalstyle' => $fotoPath, // Menggunakan foto baru atau foto lama jika tidak ada file baru
        ]);

        // Mengelola multiple_foto jika ada
        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                $imagePath = $file->store('multiple_foto_bridalstyle', 'public');

                // Membuat entri baru untuk setiap foto multiple
                $bridalstyle->images()->create([
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Bridalstyle berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bridalstyle $bridalstyle)
    {
        //
    }
}
