<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridalImage extends Model
{
    use HasFactory;

    protected $fillable = ['bridal_id', 'image_path'];

    public function bridal()
    {
        return $this->belongsTo(Bridalstyle::class, 'bridal_id', 'id_bridal');
    }
}
