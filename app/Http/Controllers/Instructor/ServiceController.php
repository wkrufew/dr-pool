<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Leer Servicios')->only('index');

        $this->middleware('can:Crear Servicios')->only('create', 'store');

        $this->middleware('can:Actualizar Servicios')->only('edit', 'update', 'goals');

        $this->middleware('can:Eliminar Servicios')->only('destroy');
  
    }

    public function index()
    {
        return view('instructor.services.index');
    }


    public function create()
    {
        $categories = Category::pluck('name', 'id'); 

        return view('instructor.services.create', compact('categories'));
    }


    public function store(Request $request)
    {
        try {
            $messages = [
                'title.required' => 'El campo Titulo es requerido',
                'slug.required' => 'El campo nombre es requerido',
                'slug.unique' => 'El slug ya existe por favor intenta con otro titulo',
                'description.required' => 'El campo descripcion es requerido',
                'category_id.required' => 'Debe seleccionar una categoria',
                'file.image' => 'El archivo que intentaste subir no es una imagen',
                'file1.image' => 'El archivo que intentaste subir no es una imagen',
                'file.required' => 'El campo logo es requerido',
                'file1.required' => 'El campo foto de portada es requerido',
            ];
            $rules = [
                'title'=> array('required'),
                'slug'=> array('required','unique:services'),
                'description'=>array('required'),
                'category_id'=> array('required'),
                'file'=>array('image','required'),
                'file1'=>array('image','required'),
            ];
            
            $this->validate($request, $rules, $messages);
            
            $service=new Service($request->all());
            $service->user_id=auth()->user()->id;
            if($request->file('file1') && $request->file('file'))
            {
                $foto1 = Storage::put('services', $request->file('file1'));

                $url = Storage::put('services', $request->file('file'));

                $service->logo =  $foto1;
                
                $service->save();

                $service->image()->create([
                    'url' => $url
                ]);
            }
        }catch (ModelNotFoundException $exception){
            return back()->withError($exception->getMessage())->withInput();
        }
        
        
        
        $servicio = $request->title;
        $notificacion="El servicio $servicio se ha creado correctamente";

        return redirect()->route('instructor.services.index')->with(compact('notificacion'));
    }

    public function show(Service $service)
    {
        return view('instructor.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        $categories = Category::pluck('name', 'id'); 

        return view('instructor.services.edit', compact('service', 'categories'));
    }


    public function update(Request $request, Service $service)
    {
        //$this->authorize('dicatated',$service);
        
        $messages = [
            'title.required' => 'El campo Titulo es requerido',
            'slug.required' => 'El campo nombre es requerido',
            'slug.unique' => 'El slug ya existe por favor intenta con otro titulo',
            'description.required' => 'El campo descripcion es requerido',
            'category_id.required' => 'Debe seleccionar una categoria',
            'file1.logo' => 'El archivo que intentaste subir no es un logo',
            'file.image' => 'El archivo que intentaste subir no es una imagen'
        ];
        $rules = [
            'title'=> array('required'),
            'slug'=> array('required','unique:services,slug,' . $service->id),
            'description'=>array('required'),
            'category_id'=> array('required'),
            'file1'=>array('image'),
            'file'=>array('image'),
        ];
        
        $this->validate($request, $rules, $messages);

        

        if($request->file('file'))
        {
            $url = Storage::put('services', $request->file('file'));

            if ($service->image) {
                Storage::delete($service->image->url);

                $service->image->update([
                    'url' => $url
                ]);
            }else{
                $service->image()->create([
                    'url' => $url
                ]);
            }
        }

        if($request->file('file1'))
        {
            $foto1 = Storage::put('services', $request->file('file1'));

            if ($service->logo) {
                Storage::delete($service->logo);

                $service->logo =  $foto1;
            }else{
                
                $service->logo =  $foto1;
            }
        }

        $service->update($request->all());

        return redirect()->route('instructor.services.edit', $service);
        
    }
    public function destroy(Service $service)
    {
       
    }

    public function goals(Service $service)
    {
        //$this->authorize('dicatated',$service);

        return view('instructor.services.goals', compact('service'));
    }

    public function status(Service $service)
    {
        if ($service->status == 1) {

            $service->status = 2;
            $service->save();

            return back();

        }
        if ($service->status == 2) {

            $service->status = 1;
            $service->save();  
              
            return back(); 

        }
        
    }
}
