<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public function photos(){
        return $this->hasMany(Photo::class, 'gallery_id', 'id');
    }
    public function page_block(){
        return $this->belongsTo(Page_block::class, 'gallery_id', 'id');
    }
    protected $fillable = [
        'title',
        'is_active',
    ];
}
