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
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Auth;
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

        return view('user.booking', compact(
            'gedung',
            'fotogedung',
            'dekorasi',
            'fotodekorasi',
            'hiburan',
            'fotohiburan',
            'dokumentasi',
            'fotodokumentasi',
            'sourvenir',
            'fotosourvenir'
        ));
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

        return view('user.checkout', [
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
        $gedung = Gedung::find(session('gedung_terpilih'));
        $dekorasi = Dekorasi::find(session('dekorasi_terpilih'));
        $customer = Customer::where('user_id', Auth::user()->id_user)->first();

        $total = $gedung->harga_sewa_gedung + $dekorasi->harga_dekorasi;

        Pemesanan::create([
            'id_customer' => $customer->id_customer,
            'tanggal_pemesanan' => now(),
            'tanggal_acara' => now(),
            'status_pemesanan' => 'Pending',
            'total_biaya' => $total
        ]);

        session()->forget(['gedung_terpilih', 'dekorasi_terpilih']);

        return redirect()->route('user.checkout');
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
