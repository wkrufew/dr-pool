<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    public function cotizacion(Service $service)
    {
        return view('cotizacion', compact('service'));
    }

}
