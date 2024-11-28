<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiburan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_hiburan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'hiburans';

    protected $fillable = [
        'id_hiburan',
        'nama_paket_hiburan',
        'deskripsi_hiburan',
        'harga_sewa_hiburan',
        'foto_hiburan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Ambil record terakhir
            $lastRecord = self::orderBy('id_hiburan', 'desc')->first();
            // Ambil angka dari id terakhir dan tambahkan 1
            $lastIdNumber = $lastRecord ? (int)substr($lastRecord->id_hiburan, 2) : 0;
            // Generate id baru
            $model->id_hiburan = 'HB' . str_pad($lastIdNumber + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function hiburanImages()
    {
        return $this->hasMany(HiburanImage::class, 'hiburan_id', 'id_hiburan');
    }
}
