<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourvenirImage extends Model
{
    use HasFactory;

    protected $fillable = ['sourvenir_id', 'image_path'];

    public function sourvenir()
    {
        return $this->belongsTo(Sourvenir::class, 'sourvenir_id', 'id_sourvenir');
    }

}
