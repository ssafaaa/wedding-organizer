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
use App\Models\Bridalstyle;
use App\Models\Pemesanan;
use App\Models\Undangan;
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
        $dekorasi = Dekorasi::with('dekorasiImages')->get();
        $dokumentasi = Dokumentasi::all();
        $fotodokumentasi = DokumentasiImage::all();
        $hiburan = Hiburan::all();
        $fotohiburan = HiburanImage::all();
        $sourvenirs = Sourvenir::all();
        $fotosourvenir = SourvenirImage::all();
        $bridals = Bridalstyle::all();
        $undangans = Undangan::all();

        // $user = User::all();
        // $customer = Customer::all();

        return view('user.booking', [
            'gedung' => $gedung,
            'fotogedung' => $fotogedung,
            'dekorasi' => $dekorasi,
            'dokumentasi' => $dokumentasi,
            'fotodokumentasi' => $fotodokumentasi,
            'hiburan' => $hiburan,
            'fotohiburan' => $fotohiburan,
            'sourvenirs' => $sourvenirs,
            'fotosourvenir' => $fotosourvenir,
            'bridals' => $bridals,
            'undangans' => $undangans
        ]);
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

    public function buktiPembayaran(Request $request, $id)
    {
        $fotoPath = null;
        $pemesanan = Pemesanan::find($id);

        if ($request->hasFile('bukti_pembayaran')) {
            $fotoPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        }

        $pemesanan->update([
            'bukti_pembayaran' => $fotoPath,
            'status_pemesanan' => 'Ongoing'
        ]);

        return redirect()->back()->with('success', 'Bukti pembayaran berhasil diunggah.');
    }


    public function checkout()
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

        if (session()->has('hiburan_terpilih')) {
            $total += $hiburan->harga_sewa_hiburan;
        }

        if (session()->has('sourvenir_terpilih')) {
            $total += $sourvenir->harga_sourvenir * $sourvenirQuantity;
        }

        if (session()->has('undangan_terpilih')) {
            $total += $undangan->harga_undangan * $undanganQuantity;
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
            'sourvenirTerpilih' => $sourvenirTerpilih,
            'sourvenirQuantity' => $sourvenirQuantity,
            'undangan' => $undangan,
            'undanganTerpilih' => $undanganTerpilih,
            'undanganQuantity' => $undanganQuantity
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
        $customer = Customer::where('user_id', Auth::user()->id_user)->first();

        Pemesanan::create([
            'id_customer' => $customer->id_customer,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'tanggal_acara' => $request->tanggal_acara,
            'status_pemesanan' => 'Pending',
            'banyak_tamu' => $request->banyak_tamu,
            'total_biaya' => $request->total,
        ]);

        session()->forget(['gedung_terpilih', 'dekorasi_terpilih', 'dokumentasi_terpilih', 'hiburan_terpilih', 'sourvenir_terpilih', 'undangan_terpilih', 'sourvenir_quantity', 'undangan_quantity']);

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
