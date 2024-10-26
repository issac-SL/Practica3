@extends("plantillas/plantilla2")

@section("contenido1")
   @include("materias/tablahtml") 
@endsection

@section("contenido2")
<h1>Ver todos los datos</h1>

<form action="{{route('materias.destroy',$materia)}}" method="post">
  @csrf
   <div class="row mb-3">
     <label for="idmateria" class="col-sm-3 col-form-label">Id Materia</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="idmateria" name="idmateria" disabled value="{{$materia->idmateria}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombremateria" class="col-sm-3 col-form-label">Nombre Materia</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremateria" name="nombremateria" disabled value="{{$materia->nombremateria}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombremediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremediano" name="nombremediano" disabled value="{{$materia->nombremediano}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" disabled value="{{$materia->nombrecorto}}">
      </div>
    </div>
   <button type="submit" class="btn btn-primary">Confirma la eliminacion</button>
<a href="{{route('materias.index')}}" class="btn btn-primary">REGRESAR</a> 
</form>

@endsection
