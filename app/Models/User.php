<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_user';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = User::orderBy('id_user', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_user, 3)) : 0;
            $product->id_user = 'US' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);

        });
    }


    public function customer()
    {
        return $this->hasOne(Customer::class, 'customer_id', 'id_customer');
    }
}
