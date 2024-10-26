@extends("plantillas/plantilla2")

@section("contenido1")
   @include("deptos/tablahtml") 
@endsection

@section("contenido2")
<h1>Editando</h1>

<form action="{{route('deptos.update',$depto->id)}}" method="POST">
  @csrf
   <div class="row mb-3">
     <label for="iddepto" class="col-sm-3 col-form-label">Id Depto</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="iddepto" name="iddepto" value="{{$depto->iddepto}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombredepto" class="col-sm-3 col-form-label">NOmbre depto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombredepto" name="nombredepto" value="{{$depto->nombredepto}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombremediano" class="col-sm-3 col-form-label">NOmbre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremediano" name="nombremediano" value="{{$depto->nombremediano}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombrecorto" class="col-sm-3 col-form-label">NOmbre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" value="{{$depto->nombrecorto}}">
      </div>
    </div>
   <button type="submit" class="btn btn-primary">Grabar</button>
 </form>

@endsection