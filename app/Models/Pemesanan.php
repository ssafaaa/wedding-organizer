<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pemesanan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'pemesanans';


    protected $fillable = [
        'id_pemesanan',
        'id_customer',
        'tanggal_pemesanan',
        'tanggal_acara',
        'status_pemesanan',
        'total_biaya',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($product) {
            do {
                $lastPemesanan = Pemesanan::orderBy('id_pemesanan', 'desc')->first();
                $lastId = $lastPemesanan ? intval(substr($lastPemesanan->id_pemesanan, 3)) : 0;
                $newId = 'CO' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Pemesanan::where('id_pemesanan', $newId)->exists());

            $product->id_customer = $newId;
        });
    }

    public function customer()
    {
        return $this->hasMany(Customer::class, 'customer_id', 'id_customer');
    }

    public function histori()
    {
        return $this->hasMany(Histori::class, 'histori_id', 'id_histori');
    }

}
