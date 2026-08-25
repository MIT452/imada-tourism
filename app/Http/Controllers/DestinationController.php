<?php

namespace App\Http\Controllers;

class DestinationController extends Controller
{
    public function show(string $slug)
    {
        $destinations = config('destinations');

        if (! isset($destinations[$slug])) {
            abort(404);
        }

        return view('destinations.show', [
            'destination' => $destinations[$slug],
            'autresDestinations' => collect($destinations)->except($slug)->take(3),
        ]);
    }
}
