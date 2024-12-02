<?php

namespace App\Http\Controllers;

use App\Models\Histori;
use Illuminate\Http\Request;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $histori = $search ? Histori::where('id_history', 'like', "%{$search}%")
            ->orWhere('id_history', 'like', "%{$search}%")
            ->orWhere('customer_id', 'like', "%{$search}%")
            ->orWhere('pemesanan_id', 'like', "%{$search}%")
            ->orWhere('tanggal pemesanan', 'like', "%{$search}%")->get()
            : Histori::all();

        return view('admin.histori', [
            'histori' => $histori,
            'search' => $search
        ]);
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
    public function show(Histori $histori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Histori $histori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Histori $histori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Histori $histori)
    {
        //
    }
}
