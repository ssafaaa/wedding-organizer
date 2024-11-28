<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\DekorasiController;
use App\Http\Controllers\SourvenirController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\MaincourseController;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\HiburanController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
        Route::get('/booking' , [UserController::class, 'booking'])->name('user.booking');
        Route::get('/about' , [UserController::class, 'about'])->name('user.about');
        Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');
        Route::get('/project' , [UserController::class, 'project'])->name('user.project');
        Route::get('/checkout' , [UserController::class, 'checkout'])->name('user.checkout');

        Route::get('/profile', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::put('/profile/update/{customer}', [CustomerController::class, 'update'])->name('customer.update');
    });
});

Route::post('/send-question', [UserController::class, 'sendQuestion'])->name('send-question');
Route::get('/send-question', function () {
    return redirect('/user/contact')->with('error', 'Silakan gunakan form untuk mengirimkan pertanyaan.');
});

// Route::get('/user/keranjang/dekorasi', [CartController::class, 'indexdekorasi'])->name('keranjangdekorasi.index');
Route::get('/user/keranjang', [CartController::class, 'indexkeranjang'])->name('keranjang.index');
Route::post('/user/keranjang/dekorasi/store', [CartController::class, 'storedekorasi'])->name('keranjangdekorasi.store');
Route::post('/user/keranjang/dokum/store', [CartController::class, 'storedokum'])->name('keranjangdokum.store');
Route::post('/user/keranjang/hiburan/store', [CartController::class, 'storehiburan'])->name('keranjanghiburan.store');
Route::post('/user/keranjang/gedung/store', [CartController::class, 'storegedung'])->name('keranjanggedung.store');
Route::post('/user/keranjang/sourvenir/store', [CartController::class, 'storesourvenir'])->name('keranjangsourvenir.store');

require __DIR__.'/auth.php';


route::get('admin/dashboard', [HomeController::class, 'index'])->
    middleware(['auth','admin']);

route::get('admin/gedung',[GedungController::class, 'index'])->name('gedung');
route::post('admin/gedung/store', [GedungController::class, 'store'])->name('gedung.store');
route::put('admin/gedung/update/{gedung}', [GedungController::class, 'update'])->name('gedung.update');

route::get('admin/dekorasi',[DekorasiController::class, 'index'])->name('dekorasi');
route::post('admin/dekorasi/store', [DekorasiController::class, 'store'])->name('dekorasi.store');
route::put('admin/dekorasi/update/{dekorasi}', [DekorasiController::class, 'update'])->name('dekorasi.update');

route::get('admin/sourvenir',[SourvenirController::class, 'index'])->name('sourvenir');
route::post('admin/sourvenir/store', [SourvenirController::class, 'store'])->name('sourvenir.store');

route::get('admin/dokumentasi',[DokumentasiController::class, 'index'])->name('dokumentasi');
route::post('admin/dokumentasi/store', [DokumentasiController::class, 'store'])->name('dokumentasi.store');
route::put('admin/dokumentasi/update/{dokumentasi}', [DokumentasiController::class, 'update'])->name('dokumentasi.update');

route::get('admin/maincourse',[MaincourseController::class, 'index'])->name('maincourse');
route::post('admin/maincourse/store', [MaincourseController::class, 'store'])->name('maincourse.store');
route::put('admin/maincourse/update/{maincourse}', [MaincourseController::class, 'update'])->name('maincourse.update');

route::get('admin/dishes',[DishesController::class, 'index'])->name('dishes');
route::post('admin/dishes/store', [DishesController::class, 'store'])->name('dishes.store');

route::get('admin/hiburan',[HiburanController::class, 'index'])->name('hiburan');
route::post('admin/hiburan/store', [HiburanController::class, 'store'])->name('hiburan.store');
route::put('admin/hiburan/update/{hiburan}', [HiburanController::class, 'update'])->name('hiburan.update');

route::get('admin/undangan',[UndanganController::class, 'index'])->name('undangan');
route::post('admin/undangan/store', [UndanganController::class, 'store'])->name('undangan.store');
route::put('admin/undangan/update/{undangan}', [UndanganController::class, 'update'])->name('undangan.update');


// Route::get('user/booking', [UserController::class, 'booking'])
// Route::get('gedung/create', [GedungController::class, 'create']);
// Route::get('gedung/{gedungs}/edit', [GedungController::class, 'edit']);
// Route::put('gedung/{gedungs}', [GedungController::class, 'update']);
