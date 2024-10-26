@extends("plantillas/plantilla2")

@section("contenido1")
   @include("carreras/tablahtml") 
@endsection

@section("contenido2")
<h1>Ver todos los datos</h1>

<form action="{{route('carreras.destroy',$carrera)}}" method="post">
  @csrf
   <div class="row mb-3">
     <label for="idcarrera" class="col-sm-3 col-form-label">Id Carrera</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="idcarrera" name="idcarrera" disabled value="{{$carrera->idcarrera}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombrecarrera" class="col-sm-3 col-form-label">Nombre Carrera</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecarrera" name="nombrecarrera" disabled value="{{$carrera->nombrecarrera}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombremediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremediano" name="nombremediano" disabled value="{{$carrera->nombremediano}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" disabled value="{{$carrera->nombrecorto}}">
      </div>
    </div>
   <button type="submit" class="btn btn-primary">Confirma la eliminacion</button>
<a href="{{route('carreras.index')}}" class="btn btn-primary">REGRESAR</a> 
</form>

@endsection
