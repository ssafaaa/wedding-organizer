<?php

namespace App\Http\Controllers;

use App\Models\Bridalstyle;
use Illuminate\Http\Request;

class BridalstyleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bridalstyles = Bridalstyle::all();
        return view('admin.bridalstyle', compact('bridalstyles'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bridalstyle $bridalstyle)
    {
        //
    }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bridalstyle $bridalstyle)
    {
        //
    }
}
