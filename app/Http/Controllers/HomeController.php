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
        $brands = Brand::select('url','foto')->get();
        $resenas = Resena::select('name','description')->get();
        $sliders= Slider::select('name', 'foto')->orderBy('name','ASC')->get();
        $services = Service::where('status', '2')
                                    ->with(['image','goals'])
                                    ->take(8)->get();
            return view('welcome', compact('services','brands','resenas','sliders'));
    }
}
