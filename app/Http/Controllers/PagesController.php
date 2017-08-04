<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $links = [
            'https://laracasts.com' => 'Laracasts',
            'https://laravel-news.com' => 'News',
            'https://forge.laravel.com' => 'Forge',
            'https://github.com/laravel/laravel' => 'GitHub'
        ];

        return view('welcome', [ 'links' => $links ]);
    }

    public function about()
    {
        return view('about');
    }
}
