<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    public function galleries(){
        return $this->belongsTo(Gallery::class, 'gallery_id', 'id');
    }
    protected $fillable = [
        'image',
        'title_en',
        'title_lv',
        'is_active',
        'sort',
    ];
}
