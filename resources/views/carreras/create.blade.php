@extends("plantillas/plantilla2")

@section("contenido1")
   @include("carreras/tablahtml") 
@endsection

@section("contenido2")
<h1>Insertando</h1>

<form action="{{route('carreras.store')}}" method="POST">
  @csrf
   <div class="row mb-3">
     <label for="idcarrera" class="col-sm-3 col-form-label">IdCarrera</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="idcarrera" name="idcarrera">
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombrecarrera" class="col-sm-3 col-form-label">NombreCarrera</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecarrera" name="nombrecarrera">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombremediano" class="col-sm-3 col-form-label">NombreMediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremediano" name="nombremediano">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombrecorto" class="col-sm-3 col-form-label">NombreCorto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto">
      </div>
    </div>
   
   <button type="submit" class="btn btn-primary">Grabar</button>
 </form>

@endsection
