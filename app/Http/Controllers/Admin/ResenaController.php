<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resena;
use Illuminate\Http\Request;

class ResenaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Ver Dashboard')->only('index');
    }

    public function index()
    {
        $resenas = Resena::all();
        
        return view('admin.resenas.index', compact('resenas'));
    }

    public function create()
    {
        return view('admin.resenas.create');
    }


    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'El campo nombre es requerido',
            'name.unique' => 'La categoria ingresada ya existe',   
            'description.required' => 'El campo descripcion es requerido es requerido',         
        ];
        $rules = [
            'name'=> array('required', 'unique:categories'),
            'description'=> array('required'),
        ];
        
        $this->validate($request, $rules, $messages);

        $resena = Resena::create($request->all());
        
        $res = $request->name;
        $notificacion="La reseña $res se ha añadido correctamente";

        return redirect()->route('admin.resenas.index')->with(compact('notificacion'));
    }

 
    public function show(Resena $resena)
    {
        return view('admin.resenas.show', compact('resena'));
    }

    public function edit(Resena $resena)
    {
        return view('admin.resenas.edit', compact('resena'));
    }

    public function update(Request $request, Resena $resena)
    {
        $messages = [
            'name.required' => 'El campo nombre es requerido'
        ];
        $rules = [
            'name'=> array('required', 'unique:categories,name,'.$resena->id),
        ];
        
        $this->validate($request, $rules, $messages);

        $resena->update($request->all());

        $res = $request->name;
        $notificacion="La reseña  $res  se ha actualizado correctamente";

        return redirect()->route('admin.resenas.index')->with(compact('notificacion'));
    }

    public function destroy(Resena $resena)
    {
        $resena->delete();

        $res = $resena->name;
        $notificacion="La reseña $res se ha eliminado correctamente";

        return redirect()->route('admin.resenas.index')->with(compact('notificacion'));
    }
}
