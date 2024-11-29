<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridalImage extends Model
{
    use HasFactory;

    protected $fillable = ['bridalstyle_id', 'image_path'];

    public function bridalstyle()
    {
        return $this->belongsTo(Bridalstyle::class, 'bridalstyle_id', 'id_bridalstyle');
    }
}
