<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Dekorasi;
use App\Models\DekorasiImage;
use App\Models\DokumentasiImage;
use App\Models\Dokumentasi;
use App\Models\Gedung;
use App\Models\GedungImage;
use App\Models\Hiburan;
use App\Models\HiburanImage;
use App\Models\Sourvenir;
use App\Models\SourvenirImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendQuestionMail;
use SebastianBergmann\CodeCoverage\Report\Xml\Source;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index');
    }

    public function booking()
    {
        $gedung = Gedung::all();
        $fotogedung = GedungImage::all();
        $dekorasi = Dekorasi::all();
        $fotodekorasi = DekorasiImage::all();
        $dokumentasi = Dokumentasi::all();
        $fotodokumentasi = DokumentasiImage::all();
        $hiburan = Hiburan::all();
        $fotohiburan = HiburanImage::all();
        $sourvenir = Sourvenir::all();
        $fotosourvenir = SourvenirImage::all();
        // $user = User::all();
        // $customer = Customer::all();

        return view('user.booking', compact('gedung', 'fotogedung','dekorasi', 'fotodekorasi', 'hiburan',
        'fotohiburan', 'dokumentasi', 'fotodokumentasi', 'sourvenir', 'fotosourvenir'));

    }

    public function about()
    {
        return view('user.about');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view('user.contact');
    }

    public function project()
    {
        return view('user.project');
    }


    public function checkout()
    {
        return view('user.checkout');
    }

    //     public function sendQuestion(Request $request)
    // {
    //     $request->validate([
    //         'msg' => 'required|string|max:500', // Validasi pesan
    //     ]);

    //     // Kirim email menggunakan metode Symfony Mailer
    //     $email = (new Email())
    //         ->from('no-reply@example.com') // Ganti dengan email pengirim
    //         ->to('admin@example.com') // Ganti dengan email tujuan
    //         ->subject('New Question Submitted') // Judul email
    //         ->html('<p>' . e($request->msg) . '</p>'); // Konten HTML

    //     Mail::mailer('smtp')->send($email);

    //     return back()->with('success', 'Pertanyaan Anda telah dikirim.');
    // }

    public function sendQuestion(Request $request)
{
    $request->validate([
        'msg' => 'required|string|max:500',
    ]);

    // Kirim email
    Mail::to('hello@example.com')->send(new SendQuestionMail($request->msg));

    return back()->with('success', 'Pertanyaan Anda telah dikirim.');
}
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
