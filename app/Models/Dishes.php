<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_dishes';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'dishes';

    protected $fillable = [
        'id_dishes',
        'nama_paket_dishes',
        'deskripsi_dishes',
        'harga_paket_dishes',
        'foto_dishes',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Ambil record terakhir
            $lastRecord = self::orderBy('id_dishes', 'desc')->first();
            // Ambil angka dari id terakhir dan tambahkan 1
            $lastIdNumber = $lastRecord ? (int)substr($lastRecord->id_dishes, 3) : 0;
            // Generate id baru
            $model->id_dishes = 'DIS' . str_pad($lastIdNumber + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function images()
    {
        return $this->hasMany(DishesImage::class, 'dishes_id', 'id_dishes');
    }

}
