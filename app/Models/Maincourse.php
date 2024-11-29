<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maincourse extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_maincourse';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'maincourses';

    protected $fillable = [
        'id_maincourse',
        'nama_paket_mainC',
        'deskripsi_mainC',
        'harga_paket_mainC',
        'foto_mainC',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Ambil record terakhir
            $lastRecord = self::orderBy('id_maincourse', 'desc')->first();
            // Ambil angka dari id terakhir dan tambahkan 1
            $lastIdNumber = $lastRecord ? (int)substr($lastRecord->id_maincourse, 2) : 0;
            // Generate id baru
            $model->id_maincourse = 'MC' . str_pad($lastIdNumber + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function maincourseImages()
    {
        return $this->hasMany(MainCImage::class, 'maincourse_id', 'id_maincourse');
    }
}
