<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AprobadoContact;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioContact;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
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
    public function index(Request $request)
    {
        $texto = $request->texto;
        $contacts = Contact::where('status',1)
                                ->where('name', 'LIKE','%'.$texto.'%')
                                ->latest()
                                ->paginate(6);
        return view('admin.contacs.index', compact('contacts'));
    }

    public function aprobar(Contact $contact)
    {
        try {
            $service_id = $contact->service_id;
            //aqui se van enviar los correos
            Mail::to($contact->email)
                ->cc('admin@dr-pools.com')
                ->send(new AprobadoContact($contact));
            // fin del envio de correos
            $contact->status=3;
            $contact->save();

            $servicio = Service::find($service_id); //encuentra La materia en la se inscribió;
            $servicio->contacts()->attach($contact->id); //agrega el contacto al servicio registrado

            $variable = "El contacto $contact->name ha sido asignado al servicio con exito $contact->service_name"; 
            return redirect()->route('admin.contacts.index')->with('info', $variable);
            //$this->buildXMLHeader();
        } catch (\Exception $e) {
          
            return redirect()->route('admin.contacts.index')->with('errores', 'Ocurrio un error, intentalo nuevamente');  
              //return $e->getMessage();
        }
            return redirect()->back();

    }

    public function aprobada(Request $request)
    {
        $texto = $request->texto;
        $contacts = Contact::where('status', 3)
                                ->where('name', 'LIKE','%'.$texto.'%')
                                ->latest()->paginate(6); 

        return view('admin.contacs.aprobada', compact('contacts'));
    }

    public function rechazar(Contact $contact)
    {
        //$this->authorize('revision', $course);  
        
        if ($contact->status == 1) {
            $contact->status = 2;
            $contact->save();

            return redirect()->route('admin.contacts.index')->with('info', 'El contacto ha sido rechadado con exito!');
        }
        if ($contact->status == 2) {
            $contact->status = 1;
            $contact->save();

            return redirect()->route('admin.contacts.index')->with('info', 'El contacto ha sido removido de rechazado a pendiente con exito!');
        }
        
    }

    public function rechazo(Request $request)
    {
        $texto = $request->texto;
        $contacts = Contact::where('status', 2)
                                ->where('name', 'LIKE','%'.$texto.'%')
                                ->latest()->paginate(10);
        return view('admin.contacs.rechazo', compact('contacts'));
    }

    public function desaprobar(Contact $contact)
    {
        $service_id = $contact->service_id;

        $contact->status=2;

        $contact->save();

       $servicio = Service::find($service_id); //encuentra La materia en la se inscribió;
       $servicio->contacts()->detach($contact->id); //agrega el contacto al servicio registrado

      
       $variable = "El contacto $contact->name ha sido removido del servicio $contact->service_name"; 
       return redirect()->route('admin.contacts.rechazo')->with('info', $variable);
       
    }

    public function destroy(Contact $contact)
    {
        if ($contact->image1) {
            Storage::disk('public')->delete($contact->image1);
        }
        if ($contact->image2) {
            Storage::disk('public')->delete($contact->image2);
        }
        
        $contact->delete();

        $variable = "El contacto $contact->name ha sido elimminado permanentemente"; 
        return redirect()->route('admin.contacts.rechazo')->with('info',$variable);
    }
}
