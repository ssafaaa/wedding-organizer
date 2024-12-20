<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_customer';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'customers';


    protected $guarded = [''];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($product) {
            do {
                $lastCustomer = Customer::orderBy('id_customer', 'desc')->first();
                $lastId = $lastCustomer ? intval(substr($lastCustomer->id_customer, 3)) : 0;
                $newId = 'CS' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Customer::where('id_customer', $newId)->exists());

            $product->id_customer = $newId;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_user');
    }


    public function histori()
    {
        return $this->hasMany(Histori::class, 'histori_id', 'id_histori');
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }

    public function testimoni()
    {
        return $this->hasMany(Testimoni::class, 'testimoni_id', 'id_testimoni');
    }
}
