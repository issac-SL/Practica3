@extends("plantillas/plantilla2")

@section("contenido1")
   @include("materias/tablahtml") 
@endsection

@section("contenido2")
<h1>Editando</h1>

<form action="{{route('materias.update',$materia->id)}}" method="POST">
  @csrf
   <div class="row mb-3">
     <label for="idmateria" class="col-sm-3 col-form-label">Id Materia</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="idmateria" name="idmateria" value="{{$materia->idmateria}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombremateria" class="col-sm-3 col-form-label">NOmbre Materia</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremateria" name="nombremateria" value="{{$materia->nombremateria}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombremediano" class="col-sm-3 col-form-label">NOmbre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremediano" name="nombremediano" value="{{$materia->nombremediano}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombrecorto" class="col-sm-3 col-form-label">NOmbre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" value="{{$materia->nombrecorto}}">
      </div>
    </div>
   <button type="submit" class="btn btn-primary">Grabar</button>
 </form>

@endsection