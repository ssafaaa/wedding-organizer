<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use App\Models\Gedung;
use App\Models\Hiburan;
use App\Models\Sourvenir;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.keranjang');
    }

    public function indexkeranjang()
    {
        // Ambil semua data dekorasi dari database
        $dekorasi = Dekorasi::all();
        // Cek apakah ada dekorasi yang sudah dipilih (dari session)
        $dekorasiTerpilih = session('dekorasi_terpilih');

        // dd($dekorasiTerpilih);

        // Ambil semua data dekorasi dari database
        $dokumentasi = Dokumentasi::all();
        // Cek apakah ada dekorasi yang sudah dipilih (dari session)
        $dokumentasiTerpilih = session('dokumentasi_terpilih');

        // Ambil semua data dekorasi dari database
        $hiburan = Hiburan::all();
        // Cek apakah ada dekorasi yang sudah dipilih (dari session)
        $hiburanTerpilih = session('hiburan_terpilih');

        // Ambil semua data dekorasi dari database
        $gedung = Gedung::all();
        // Cek apakah ada dekorasi yang sudah dipilih (dari session)
        $gedungTerpilih = session('gedung_terpilih');

        // // Ambil ID gedung yang tersimpan di session
        // $gedungTerpilih = session('gedung_terpilih');
        // return view('keranjanggedung.store', compact('gedungTerpilih'));

        // Ambil semua data dekorasi dari database
        $sourvenir = Sourvenir::all();
        // Cek apakah ada dekorasi yang sudah dipilih (dari session)
        $sourvenirTerpilih = session('sourvenir_terpilih');

        // Tampilkan view dan kirim data dekorasi beserta dekorasi yang dipilih (jika ada)
        return view('user.keranjang', compact('dokumentasi', 'dokumentasiTerpilih', 'dekorasi', 'dekorasiTerpilih', 'hiburan', 'hiburanTerpilih', 'gedung', 'gedungTerpilih', 'sourvenir', 'sourvenirTerpilih'));
    }

    // public function addToCart(Request $request)
    // {
    //     // Menyimpan Gedung ke dalam session
    //     if ($request->has('gedung_id')) {
    //         session()->put('gedung_terpilih', $request->gedung_id);
    //     }

    //     // Menyimpan Katering ke dalam session
    //     if ($request->has('katering_id')) {
    //         session()->put('katering_terpilih', $request->katering_id);
    //     }

    //     // Tambahkan logika serupa untuk kategori lain
    //     if ($request->has('dekorasi_id')) {
    //         session()->put('dekorasi_terpilih', $request->dekorasi_id);
    //     }


    //     return redirect()->route('cart.index')->with('success', 'Item berhasil ditambahkan ke cart!');
    // }


    public function storehiburan(Request $request)
    {
        //Simpan ID Dekorasi yang dipilih ke session
        session(['hiburan_terpilih' => $request->input('hiburan')]);

        //Redirect kembali ke halaman dekorasi
        return redirect()->route('user.booking');
    }

    public function storedekorasi(Request $request)
    {
        //Simpan ID Dekorasi yang dipilih ke session
        session(['dekorasi_terpilih' => $request->input('dekorasi')]);

        //Redirect kembali ke halaman dekorasi
        return redirect()->route('user.booking');
    }

    public function storedokum(Request $request)
    {
        //Simpan ID Dekorasi yang dipilih ke session
        session(['dokumentasi_terpilih' => $request->input('dokumentasi')]);

        //Redirect kembali ke halaman dekorasi
        return redirect()->route('user.booking');
    }

    public function storegedung(Request $request)
    {
        // return($request->input('gedung'));
        //Simpan ID Dekorasi yang dipilih ke session
        session(['gedung_terpilih' => $request->input('gedung')]);
        // return session('gedung_terpilih');

        //Redirect kembali ke halaman dekorasi
        return redirect()->route('user.booking');
    }

    public function storesourvenir(Request $request)
    {
        //Simpan ID Dekorasi yang dipilih ke session
        session(['sourvenir_terpilih' => $request->input('sourvenir')]);

        //Redirect kembali ke halaman dekorasi
        return redirect()->route('user.booking');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
