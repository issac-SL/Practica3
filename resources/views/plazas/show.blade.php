@extends("plantillas/plantilla2")

@section("contenido1")
   @include("puestos/tablahtml") 
@endsection

@section("contenido2")
<h1>Ver todos los datos</h1>

<form action="{{route('plazas.destroy',$plaza)}}" method="post">
  @csrf
   <div class="row mb-3">
     <label for="idplaza" class="col-sm-3 col-form-label">Id Plaza</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="idplaza" name="idplaza" disabled value="{{$plaza->idplaza}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombrePlaza" class="col-sm-3 col-form-label">Nombre Plaza</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza" disabled value="{{$plaza->nombrePlaza}}">
      </div>
    </div>
   <button type="submit" class="btn btn-primary">Confirma la eliminacion</button>
<a href="{{route('plazas.index')}}" class="btn btn-primary">REGRESAR</a> 
</form>

@endsection
