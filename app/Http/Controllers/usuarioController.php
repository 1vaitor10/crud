<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Http\Requests\StoreproductoRequest;
use App\Http\Requests\UpdateusuarioRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = usuario::all();
        return view('admin.usuario.index', compact('usuario')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuario = usuario::all();
        return view('admin.usuario.crear', compact('usuario'));
    }

  
    // Proceso de Creación de un Registro 
public function store(StoreproductoRequest $request)
{
    // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
    $usuario = new usuario; 
 
    // Recibo todos los datos del formulario de la vista 'crear.blade.php'
    $usuario->nombre = $request->nombre;
    $usuario->descripcion = $request->descripcion;
    $usuario->precio = $request->precio;
    $usuario->stock = $request->stock;
        
    // Almacenos la imagen en la carpeta publica especifica, esto lo veremos más adelante 
    $usuario->imagen = $request->file('img')->store('/');
 
    // Inserto todos los datos en mi tabla 'productos' 
    $usuario->save();
 
    // Hago una redirección a la vista principal con un mensaje 
    return redirect('admin/usuario')->with('message','Guardado Satisfactoriamente !'); 
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = usuario::find($id);
        return view('admin.usuario.detalles', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = usuario::find($id);
        return view('admin/usuario.actualizar',['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateusuarioRequest $request, $id)
    {
        // Recibo todos los datos desde el formulario Actualizar
    $usuario = usuario::find($id);
    $usuario->nombre = $request->nombre;
    $usuario->descripcion = $request->descripcion;
    $usuario->precio = $request->precio;
    $usuario->stock = $request->stock;

 
    // Recibo la imagen desde el formulario Actualizar
    if ($request->hasFile('imagen')) {
        $usuario->img = $request->file('imagen')->store('/');
    }
 
    // Guardamos la fecha de actualización del registro 
    $usuario->updated_at = (new DateTime)->getTimestamp(); 
        
    // Actualizo los datos en la tabla 'productos'
    $usuario->save();
 
    // Muestro un mensaje y redirecciono a la vista principal 
    Session::flash('message', 'Editado Satisfactoriamente !');
    return Redirect::to('admin/usuario'); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $usuario = usuario::find($id);
     
        // Elimino la imagen de la carpeta 'uploads', esto lo veremos más adelante
        $imagen = explode(",", $usuario->img);
        Storage::delete($imagen);
            
        // Elimino el registro de la tabla 'productos' 
        usuario::destroy($id); 
     
        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en 
        // una tabla llamada por ejemplo 'productos_eliminados' y alli guardas su fecha de eliminación 
        // $productos->deleted_at = (new DateTime)->getTimestamp();
            
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/usuario');
}

}