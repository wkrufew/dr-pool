<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.abouts.index', compact('about'));
    }

    public function edit(About $about)
    {
        return view('admin.abouts.edit',compact('about'));
    }

    public function update(Request $request, About $about)
    {
        if($request->file('file'))
        {
            $url = Storage::put('abouts', $request->file('file'));
            if ($about->image) {
                Storage::delete($about->image);
                $about->image =  $url;
            }else{
                $about->image =  $url;
            }
        }
        $about->update($request->all());
        return redirect()->route('admin.abouts.index')->with('mensaje','ok');
    }
}
