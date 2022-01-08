<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Ver Dashboard')->only('index');
    }
    
    public function index()
    {
        $empresas = Empresa::all();
        return view('admin.empresas.index', compact('empresas'));
    }

    public function edit(Empresa $empresa)
    {
         return view('admin.empresas.edit', compact('empresa'));
    }

    public function update(Request $request, Empresa $empresa)
    {
       
        if($request->file('file'))
        {
            $url = Storage::put('empresas', $request->file('file'));

            if ($empresa->foto) {
                
                Storage::delete($empresa->foto);

                $empresa->foto =  $url;
            }else{
                
                $empresa->foto =  $url;
            }
        }
        if($request->file('file1'))
        {
            $url1 = Storage::put('empresas', $request->file('file1'));

            if ($empresa->whatsapp) {
                
                Storage::delete($empresa->whatsapp);

                $empresa->whatsapp =  $url1;
            }else{
                
                $empresa->whatsapp =  $url1;
            }
        }

        $empresa->update($request->all());

        
        return redirect()->route('admin.empresas.index')->with('mensaje','ok');
    }
}
