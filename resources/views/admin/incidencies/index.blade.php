<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
    <a href="{{ route('admin/incidencies/crear') }}" class="btn btn-primary">crear</a>
      <th>nom</th>
      <th>tipus</th>
      <th>descripcio</th>
      <th>Foto</th>
     
    </tr>
  </thead>
  <tbody> 
    @foreach($incidencies as $ins) <tr>
      <td class="v-align-middle">{{$ins->nom}}</td>
      <td class="v-align-middle">{{$ins->tipus}}</td>
      <td class="v-align-middle">{{$ins->descripcio}}</td>
      <td class="v-align-middle">
        <foto src="{!! asset(" uploads/$ins->imagen") !!}" width="30" class="imagen-responsive">
      </td>
      <td </td>
      <td class="v-align-middle">
        <form action="{{ route('admin/incidencies/eliminar',$ins->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <a href="{{ route('admin/incidencies/detalles',$ins->id) }}" class="btn btn-dark">Detalles</a>
          <a href="{{ route('admin/incidencies/actualizar',$ins->id) }}" class="btn btn-primary">Editar</a>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    
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