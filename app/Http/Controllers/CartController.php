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
        $total = 0;
        
        $dekorasi = Dekorasi::all();

        $dekorasiTerpilih = session('dekorasi_terpilih');
        $dekorasi = Dekorasi::find($dekorasiTerpilih);

        $dokumentasi = Dokumentasi::all();

        $dokumentasiTerpilih = session('dokumentasi_terpilih');

        $hiburan = Hiburan::all();

        $hiburanTerpilih = session('hiburan_terpilih');

        $gedung = Gedung::all();

        $gedungTerpilih = session('gedung_terpilih');
        $gedung = Gedung::find($gedungTerpilih);

        $sourvenir = Sourvenir::all();
        $sourvenirTerpilih = session('sourvenir_terpilih');

        if (session()->has('gedung_terpilih') && session()->has('dekorasi_terpilih') && session()->has('dokumentasi_terpilih') && session()->has('hiburan_terpilih') && session()->has('sourvenir_terpilih')) {
            $total = $gedung->harga_sewa_gedung + $dekorasi->harga_dekorasi;
        }

        return view('user.keranjang', [
            'total' => $total,
            'dokumentasi' => $dokumentasi,
            'dokumentasiTerpilih' => $dokumentasiTerpilih,
            'dekorasi' => $dekorasi,
            'dekorasiTerpilih' => $dekorasiTerpilih,
            'hiburan' => $hiburan,
            'hiburanTerpilih' => $hiburanTerpilih,
            'gedung' => $gedung,
            'gedungTerpilih' => $gedungTerpilih,
            'sourvenir' => $sourvenir,
            'sourvenirTerpilih' => $sourvenirTerpilih
        ]);
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
