<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridalstyle extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_bridalstyle';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'bridalstyles';

    protected $fillable = [
        'nama_paket_bridalstyle',
        'deskripsi_paket',
        'harga_paket',
        'foto_bridalstyle',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($product) {
            do {
                $lastCustomer = Bridalstyle::orderBy('id_bridalstyle', 'desc')->first();
                $lastId = $lastCustomer ? intval(substr($lastCustomer->id_bridalstyle, 2)) : 0;
                $newId = 'BR' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Bridalstyle::where('id_bridalstyle', $newId)->exists());

            $product->id_bridalstyle = $newId;
        });
    }

    public function images()
    {
        return $this->hasMany(BridalImage::class, 'bridalstyle_id', 'id_bridalstyle');
    }
}
