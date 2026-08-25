<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = config('destinations');

        return view('home', [
            'destinations' => $destinations,
        ]);
    }
}
