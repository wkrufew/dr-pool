<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Resena;
use App\Models\Service;
use App\Models\Slider;

class HomeController extends Controller
{
    public function __invoke()
    {
        
        $brands = cache()->remember('brands', 60*60*24, function () {
            return Brand::select('url','foto')->get();
        });
        
        $resenas = cache()->remember('resenas', 60*60*24, function () {
            return Resena::select('name','description')->get();
        });
           
        return view('welcome', compact('brands','resenas'));
    }
}
