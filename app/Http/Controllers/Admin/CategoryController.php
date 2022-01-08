<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Ver Dashboard')->only('index');
    }
   
    public function index()
    {
        $categories = Category::all();
        
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'The name field is required',
            'name.unique' => 'The category entered already exists',            
        ];
        $rules = [
            'name'=> array('required', 'unique:categories'),
        ];
        
        $this->validate($request, $rules, $messages);

        $category = Category::create($request->all());
        
        $cat = $request->name;
        $notificacion="La categoria $cat  se ha añadido correctamente";

        return redirect()->route('admin.categories.index')->with(compact('notificacion'));

    }


    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

 
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

 
    public function update(Request $request, Category $category)
    {
        $messages = [
            'name.required' => 'El campo nombre es requerido'
        ];
        $rules = [
            'name'=> array('required', 'unique:categories,name,'.$category->id),
        ];
        
        $this->validate($request, $rules, $messages);

        $category->update($request->all());

        $cat = $request->name;
        $notificacion="La categoria  $cat  se ha actualizado correctamente";

        return redirect()->route('admin.categories.index')->with(compact('notificacion'));
    }

 
    public function destroy(Category $category)
    {
        $category->delete();

        $cat = $category->name;
        $notificacion="La categoria  $cat  se ha eliminado correctamente";

        return redirect()->route('admin.categories.index')->with(compact('notificacion'));
    }

}
