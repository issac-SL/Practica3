@extends("plantillas/plantilla2")

@section("contenido1")
   @include("plazas/tablahtml") 
@endsection

@section("contenido2")
<h1>Insertando</h1>

<form action="{{route('plazas.store')}}" method="POST">
  @csrf
   <div class="row mb-3">
     <label for="nombre" class="col-sm-3 col-form-label">Id Plaza</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="idplaza" name="idplaza">
     </div>
   </div>
   <div class="row mb-3">
      <label for="apellidop" class="col-sm-3 col-form-label">Nombre Plaza</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza">
      </div>
    </div>
   
   <button type="submit" class="btn btn-primary">Grabar</button>
 </form>

@endsection
