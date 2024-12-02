<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use App\Models\Gedung;
use App\Models\Hiburan;
use App\Models\Sourvenir;
use App\Models\Undangan;
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
        
        $dekorasiTerpilih = session('dekorasi_terpilih');
        $dekorasi = Dekorasi::find($dekorasiTerpilih);

        $dokumentasiTerpilih = session('dokumentasi_terpilih');
        $dokumentasi = Dokumentasi::find($dokumentasiTerpilih);

        $hiburanTerpilih = session('hiburan_terpilih');
        $hiburan = Hiburan::find($hiburanTerpilih);

        $gedungTerpilih = session('gedung_terpilih');
        $gedung = Gedung::find($gedungTerpilih);

        $sourvenirTerpilih = session('sourvenir_terpilih');
        $sourvenirQuantity = session('sourvenir_quantity');
        $sourvenir = Sourvenir::find($sourvenirTerpilih);

        $undanganTerpilih = session('undangan_terpilih');
        $undanganQuantity = session('undangan_quantity');
        $undangan = Undangan::find($undanganTerpilih);

        if (session()->has('gedung_terpilih')) {
            $total += $gedung->harga_sewa_gedung;
        }

        if (session()->has('dekorasi_terpilih')) {
            $total += $dekorasi->harga_dekorasi;
        }

        if (session()->has('dokumentasi_terpilih')) {
            $total += $dokumentasi->harga_dokumentasi;
        }

        if (session()->has('sourvenir_terpilih')) {
            $total += $sourvenir->harga_sourvenir * $sourvenirQuantity;
        }

        if (session()->has('hiburan_terpilih')) {
            $total += $hiburan->harga_sewa_hiburan;
        }

        if (session()->has('undangan_terpilih')) {
            $total += $undangan->harga_undangan * $undanganQuantity;
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
            'sourvenirQuantity' => $sourvenirQuantity,
            'sourvenirTerpilih' => $sourvenirTerpilih,
            'undangan' => $undangan,
            'undanganQuantity' => $undanganQuantity,
            'undanganTerpilih' => $undanganTerpilih
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
        session(['sourvenir_quantity' => $request->input('sourvenir_quantity')]);

        //Redirect kembali ke halaman dekorasi
        return redirect()->route('user.booking');
    }

    public function storeundangan(Request $request)
    {
        //Simpan ID Dekorasi yang dipilih ke session
        session(['undangan_terpilih' => $request->input('undangan')]);
        session(['undangan_quantity' => $request->input('undangan_quantity')]);

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
