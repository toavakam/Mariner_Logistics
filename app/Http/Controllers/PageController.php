<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index($lang = null, $slug = "")
    {
        $lang = in_array($lang, ['en', 'lv']) ? $lang : 'en';

        App::setLocale($lang);

        $page = \App\Models\Page::where('slug', $slug)
            ->where('lang', $lang)
            ->where('is_published', true)
            ->firstOrFail();

        $page_blocks = \App\Models\Page_block::where('page_id', $page->id)
            ->where('is_active', 1)
            ->orderBy('sort')
            ->get();



        return view('page', ['page_block' => $page_blocks]);

    }

}