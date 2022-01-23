<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        //$about = About::first();
        $about = cache()->remember('about', 60*60*24, function () {
            return About::first();
        });

        return view('about',compact('about'));
    }
}
