<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_undangan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'undangans';

    protected $fillable = [
        'id_undangan',
        'nama_undangan',
        'bahan_undangan',
        'deskripsi_undangan',
        'harga_undangan',
        'foto_undangan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Ambil record terakhir
            $lastRecord = self::orderBy('id_undangan', 'desc')->first();
            // Ambil angka dari id terakhir dan tambahkan 1
            $lastIdNumber = $lastRecord ? (int)substr($lastRecord->id_undangan, 2) : 0;
            // Generate id baru
            $model->id_undangan = 'UD' . str_pad($lastIdNumber + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function undanganImages()
    {
        return $this->hasMany(UndanganImage::class, 'undangan_id', 'id_undangan');
    }


}
