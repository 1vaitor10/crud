 
@vite(['resources/js/app.js'])
<div class="panel-body">
 
 @if(Session::has('message'))
   <div class="alert alert-primary" role="alert">
     {{ Session::get('message') }}
   </div>
 @endif 
          
   <p class="h5">nom:</p>
   <p class="h6 mb-3">{{ $incidencies->nombre }}</p>

   <p class="h5">tipus:</p>
   <p class="h6 mb-3">{{ $incidencies->tipus }}</p>

   <p class="h5">descripcio:</p>
   <p class="h6 mb-3">{{ $incidencies->descripcio }}</p> 

   <p class="h5">Imagen:</p>
   <img src="../../../uploads/{{ $incidencies->foto }}" class="img-fluid" width="20%">                    

</div>

