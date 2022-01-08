<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Ver Dashboard')->only('index');
    }
    
    public function index()
    {
        $brands = Brand::latest('id')->paginate(6);
        
        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brands.create');
    }

 
    public function store(Request $request)
    {
        $messages = [
            'titulo.required' => 'El campo Nombre es requerido',
            'file.image' => 'El archivo que intentaste subir no es una imagen',
            'file.required' => 'Debe elegir una imagen',
            //'file.mimes'=>'No es una imagen',
        ];
        $rules = [
            'titulo'=> array('required'),
            'file'=>array('image', 'required'),
        ];
        
        $this->validate($request, $rules, $messages);
        
        
        $brand = new Brand($request->all());

        if($request->file('file'))
        {
             $foto = Storage::disk('public')->put('marcas', $request->file('file'));

             $brand->foto =  $foto;
        }
       
        $brand->save();

        return redirect()->route('admin.brands.index')->with('mensaje','ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('admin.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $messages = [
            'titulo.required' => 'El campo Nombre es requerido',
            'file.image' => 'El archivo que intentaste subir no es una imagen',
            'file.required' => 'Debe elegir una imagen',
            
            //'file.mimes'=>'No es una imagen',
        ];
        $rules = [
            'titulo'=> array('required', 'unique:brands,titulo,'.$brand->id),
            'file'=>array('image'),
            //'file' => array('mimes:jpeg,png,jpg'),
        ];
        
        $this->validate($request, $rules, $messages);

        if($request->file('file'))
        {
            $foto = Storage::disk('public')->put('marcas', $request->file('file'));

            if ($brand->foto) {
                Storage::disk('public')->delete($brand->foto);

                $brand->foto =  $foto;
            }else{
                
                $brand->foto =  $foto;
            }
        }

        $brand->update($request->all());

        return redirect()->route('admin.brands.index')->with('mensaje1','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        Storage::disk('public')->delete($brand->foto);
        $brand->delete();

        return redirect()->route('admin.brands.index')->with('mensaje','ok');

    }
}
