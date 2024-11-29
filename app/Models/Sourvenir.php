<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sourvenir extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_sourvenir';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'sourvenirs';

    protected $fillable = [
        'id_sourvenir',
        'nama_paket_sourvenir',
        'harga_sourvenir',
        'deskripsi_sourvenir',
        'foto_sourvenir'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Ambil record terakhir
            $lastRecord = self::orderBy('id_sourvenir', 'desc')->first();
            // Ambil angka dari id terakhir dan tambahkan 1
            $lastIdNumber = $lastRecord ? (int)substr($lastRecord->id_sourvenir, 2) : 0;
            // Generate id baru
            $model->id_sourvenir = 'SV' . str_pad($lastIdNumber + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function sourvenirImages()
    {
        return $this->hasMany(SourvenirImage::class, 'sourvenir_id', 'id_sourvenir');
    }
}
