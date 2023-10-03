<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $slug = request()->route('slug');

        $pages = \App\Models\Page::where('is_published', true)
        ->where('show_in_header', true)
        ->where('lang', App::currentLocale())
        ->orderBy('sort')
        ->get();

        return view('components.header', ['pages' => $pages, 'slug'=>$slug]);

    }
}
