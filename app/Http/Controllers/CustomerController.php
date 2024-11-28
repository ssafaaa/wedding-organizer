<?php

namespace App\Http\Controllers;

use App\Models\Customer;
// use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::where('user_id', Auth::user()->id_user)->first();
        return view('user.profile', compact('customer'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = Customer::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'nik' => $request->input('nik'),
            'gender' => $request->input('gender'),
        ]);

        return redirect('user/profile')->with('Succes', 'Item berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit()
    {
        $customer = Customer::where('user_id', Auth::user()->id_user)->first();
        return view('user.profile', compact('customer'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        // dd($customer);
        $customer->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password,
                'address' => $request->address,
                'phone' => $request->phone,
                'nik' => $request->nik,
                'gender' => $request->gender,

        ]);

        return redirect()->back()->with('success', 'Profile berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
