<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Ver Dashboard')->only('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'The order field is required',
        ];
        $rules = [
            'name'=> array('required'),
            'file'=>array('image', 'required'),
        ];
        
        $this->validate($request, $rules,$messages);
        
        
        $slider = new Slider($request->only('name','file'));

        if($request->file('file'))
        {
             $foto = Storage::put('sliders', $request->file('file'));

             $slider->foto =  $foto;
        }
       
        $slider->save();

        return redirect()->route('admin.sliders.index')->with('mensaje','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $messages = [
            'name.required' => 'The order field is required',
        ];
        $rules = [
            'name'=> array('required'),
            'file'=>array('image'),
            //'file' => array('mimes:jpeg,png,jpg'),
        ];
        
        $this->validate($request, $rules, $messages);

        if($request->file('file'))
        {
            $foto = Storage::put('sliders', $request->file('file'));

            if ($slider->foto) {
                Storage::delete($slider->foto);

                $slider->foto =  $foto;
            }else{
                
                $slider->foto =  $foto;
            }
        }

        $slider->update($request->only('name','file'));

        return redirect()->route('admin.sliders.index')->with('mensaje1','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        Storage::delete($slider->foto);
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('mensaje1','ok');
    }
}
