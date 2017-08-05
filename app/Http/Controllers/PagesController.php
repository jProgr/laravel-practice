<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $messages = [
            [
                'id' => 1,
                'content' => 'Mensaje de prueba 1',
                'image' => 'http://placekitten.com/g/600/338'
            ],
            [
                'id' => 2,
                'content' => 'Mensaje de prueba 2',
                'image' => 'http://placekitten.com/g/600/338'
            ],
            [
                'id' => 3,
                'content' => 'Mensaje de prueba 3',
                'image' => 'http://placekitten.com/g/600/338'
            ],
            [
                'id' => 4,
                'content' => 'Mensaje de prueba 4',
                'image' => 'http://placekitten.com/g/600/338'
            ]
        ];

        return view('welcome', [ 'messages' => $messages ]);
    }
}
