<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_histori';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'historiss';


    protected $fillable = [
        'id_histori', 'id_customer', 'id_pemesanan', 'tanggal_pemesanan'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($product) {
            do {
                $lastCustomer = Histori::orderBy('id_histori', 'desc')->first();
                $lastId = $lastCustomer ? intval(substr($lastCustomer->id_histori, 3)) : 0;
                $newId = 'HI' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Histori::where('id_histori', $newId)->exists());

            $product->id_histori = $newId;
        });
    }


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id_customer');
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id', 'id_pemesanan');
    }
}
