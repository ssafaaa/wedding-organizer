<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Histori;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countUser = Customer::count();
        $totalOrder = Pemesanan::count();
        $closeVanue = Pemesanan::where('status_pemesanan', 'success')->count();
        $pendapatan = Pemesanan::sum('total_biaya');
        // dd($pemdapatam)
        return view('admin.index', compact('countUser', 'totalOrder', 'closeVanue', 'pendapatan'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
