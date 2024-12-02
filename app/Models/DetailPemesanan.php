<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pemesanan',
        'item_type',
        'item_id',
        'quantity',
        'price',
        'subtotal',
    ];

    // Relationship to Pemesanan
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    }

    // Polymorphic relationship to either Gedung or Dokumentasi
    public function item()
    {
        return $this->morphTo();
    }
}
