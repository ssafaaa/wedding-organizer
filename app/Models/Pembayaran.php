<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pembayaran';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'pembayarans';

    protected $fillable = [
       'id_pembayaran', 'metode_pembayaran', 'jumlah_pembayaran', 'status_transaksi'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($product) {
            do {
                $lastCustomer = Pembayaran::orderBy('id_pembayaran', 'desc')->first();
                $lastId = $lastCustomer ? intval(substr($lastCustomer->id_pembayaran, 3)) : 0;
                $newId = 'PM' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Pembayaran::where('id_pembayaran', $newId)->exists());

            $product->id_pembayaran = $newId;
        });
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id', 'id_pemesanan');
    }
}