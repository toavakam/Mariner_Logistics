<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug = "")
    {
        $page = \App\Models\Page::where('slug', $slug)
            ->where('lang', 'en')
            ->where('is_published', true)
            ->firstOrFail();

        $page_blocks = \App\Models\Page_block::where('page_id', $page->id)
            ->where('is_active', 1)
            ->orderBy('sort')
            ->get();

        $gallery_block = \App\Models\Page_block::where('page_id', $page->id)
            ->where('is_active', 1)
            ->where('block_type', 'gallery')
            ->orderBy('sort')
            ->first();
        if ($gallery_block) {

            $gallery = \App\Models\Gallery::where('id', $gallery_block->gallery_id)
                ->where('is_active', 1)
                ->first();

            $photos = \App\Models\Photo::where('gallery_id', $gallery->id)
                ->where('is_active', true)
                ->get();


            return view('page', ['page_block' => $page_blocks, 'photos' => $photos]);
        }

        
        return view('page', ['page_block' => $page_blocks]);

    }

}