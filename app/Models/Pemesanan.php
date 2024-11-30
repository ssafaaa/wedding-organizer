<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pemesanan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'pemesanans';


    protected $guarded = [''];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($pemesanan) {
            do {
                $lastPemesanan = Pemesanan::orderBy('id_pemesanan', 'desc')->first();
                $lastId = $lastPemesanan ? intval(substr($lastPemesanan->id_pemesanan, 3)) : 0;
                $newId = 'PS' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Pemesanan::where('id_pemesanan', $newId)->exists());

            $pemesanan->id_pemesanan = $newId;
        });
    }

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }

    public function histori()
    {
        return $this->hasMany(Histori::class, 'histori_id', 'id_histori');
    }

    public function testimoni()
    {
        return $this->hasMany(Testimoni::class, 'testimoni_id', 'id_testimoni');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'pembayaran_id', 'id_pembayaran');
    }

}
