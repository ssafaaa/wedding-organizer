<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_testimoni';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'testimonis';

    protected $fillable = [
       'id_testimoni', 'id_pemesanan', 'testimoni', 'rating', 'id_customer'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($product) {
            do {
                $lastCustomer = Testimoni::orderBy('id_testimoni', 'desc')->first();
                $lastId = $lastCustomer ? intval(substr($lastCustomer->id_testimoni, 3)) : 0;
                $newId = 'TS' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Testimoni::where('id_testimoni', $newId)->exists());

            $product->id_testimoni = $newId;
        });
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id', 'id_pemesanan');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id_customer');
    }
}