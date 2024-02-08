<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use App\Http\Requests\StoreIncidenciaRequest;
use App\Http\Requests\UpdateIncidenciaRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Support\Facades\Session;



class IncidenciaController extends Controller
{
    public function index()
    {
        $incidencies = Incidencia::all();
        return view('admin.incidencies.index', compact('incidencies')); 
    }
    // Crear un Registro (Create) 
public function crear()
{
    $incidencies = Incidencia::all();
    return view('admin.incidencies.crear', compact('incidencies'));
}

public function store(StoreIncidenciaRequest $request)
    {
        // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
    $incidencies = new Incidencia; 
 
    // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $incidencies->nom = $request->nom;
        $incidencies->tipus = $request->tipus;
        $incidencies->descripcio = $request->descripcio;
        $incidencies->fot = $request->file('fot')->store('/');
    // Inserto todos los datos en mi tabla 'productos' 
    $incidencies->save();
 
    // Hago una redirección a la vista principal con un mensaje 
    return redirect('admin/incidencies')->with('message','Guardado Satisfactoriamente !'); 

    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $incidencies = Incidencia::find($id);
        return view('admin/incidencies/detalles', compact('incidencies'));    
    }
    public function actualizar($id)
    {
        $incidencies = Incidencia::find($id);
        return view('admin/incidencies.actualizar',['incidencies'=>$incidencies]);
    } 

    
    // Proceso de Actualización de un Registro (Update)
    public function update(UpdateIncidenciaRequest $request, $id)
    {        
        // Recibo todos los datos desde el formulario Actualizar
        $incidencies = Incidencia::find($id);
        $incidencies->nom = $request->nom;
        $incidencies->tipus = $request->tipus;
        $incidencies->descripcio = $request->descripcio;

        $incidencies->fot = $request->file('fot')->store('/');
        // Actualizo los datos en la tabla 'productos'
        $incidencies->save();

        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/incidencies');
    }

    // Eliminar un Registro 
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $incidencies = Incidencia::find($id);

        // Elimino el registro de la tabla 'productos' 
        Incidencia::destroy($id); 

        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en 
        // una tabla llamada por ejemplo 'productos_eliminados' y alli guardas su fecha de eliminación 
        // $productos->deleted_at = (new DateTime)->getTimestamp();
            
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/incidencies');
    } 

} 