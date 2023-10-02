<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function page_blocks(){
    
        return $this->hasMany(Page_block::class, 'page_id', 'id');
    }

    protected $fillable = [
        'lang',
        'slug',
        'title',
        'show_in_header',
        'sort',
        'is_published',
        'seo_title',
        'seo_description',
        'seo_keywords'
    ];
}

