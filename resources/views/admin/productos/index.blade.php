@vite(['resources/js/app.js'])
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>descripcio</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Imagen</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody> 
    @foreach($productos as $prod) <tr>
      <td class="v-align-middle">{{$prod->nombre}}</td>
      <td class="v-align-middle">{{$prod->descripcion}}</td>
      <td class="v-align-middle">{{$prod->precio}}</td>
      <td class="v-align-middle">{{$prod->stock}}</td>
      <td class="v-align-middle">
        <imagen src="{!! asset(" uploads/$prod->imagen") !!}" width="30" class="imagen-responsive">
      </td>
      <td class="v-align-middle">
        <form action="{{ route('admin/productos/eliminar',$prod->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <a href="{{ route('admin/productos/detalles',$prod->id) }}" class="btn btn-dark">Detalles</a>
          <a href="{{ route('admin/productos/actualizar',$prod->id) }}" class="btn btn-primary">Editar</a>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
      <a href="{{ route('admin/productos/crear',$prod->id) }}" class="btn btn-primary">crear</a>
    </tr> 
    @endforeach 
    <script type="text/javascript">
 
        function confirmarEliminar()
        {
        var x = confirm("Estas seguro de Eliminar?");
        if (x)
          return true;
        else
          return false;
        }
    </script>
   </tbody>
</table>
 
