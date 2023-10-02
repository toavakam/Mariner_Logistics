<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_block extends Model
{
    use HasFactory;

    public function page(){
        return $this->belongsTo(Page::class, 'page_id', 'id');
    }
    public function gallery(){
        return $this->hasOne(Gallery::class, 'page_id', 'id');
    }
    protected $fillable = [
        'block_type',
        'text_1',
        'image_1',
        'text_2',
        'image_2',
        'gmap_url',
        'is_active',
        'sort',
    ];


}
