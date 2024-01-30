 
@vite(['resources/js/app.js'])
<div class="panel-body">
 
 @if(Session::has('message'))
   <div class="alert alert-primary" role="alert">
     {{ Session::get('message') }}
   </div>
 @endif 
          
   <p class="h5">Nombre:</p>
   <p class="h6 mb-3">{{ $producto->nombre }}</p>

   <p class="h5">Precio:</p>
   <p class="h6 mb-3">{{ $producto->precio }}</p>

   <p class="h5">Stock:</p>
   <p class="h6 mb-3">{{ $producto->stock }}</p> 

   <p class="h5">Imagen:</p>
   <img src="../../../uploads/{{ $producto->img }}" class="img-fluid" width="20%">                    

</div>

