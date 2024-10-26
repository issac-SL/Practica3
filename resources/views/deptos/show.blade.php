@extends("plantillas/plantilla2")

@section("contenido1")
   @include("deptos/tablahtml") 
@endsection

@section("contenido2")
<h1>Ver todos los datos</h1>

<form action="{{route('deptos.destroy',$depto)}}" method="post">
  @csrf
   <div class="row mb-3">
     <label for="iddepto" class="col-sm-3 col-form-label">Id Depto</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="iddepto" name="iddepto" disabled value="{{$depto->iddepto}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombredepto" class="col-sm-3 col-form-label">Nombre Depto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombredepto" name="nombredepto" disabled value="{{$depto->nombredepto}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombremediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremediano" name="nombremediano" disabled value="{{$depto->nombremediano}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" disabled value="{{$depto->nombrecorto}}">
      </div>
    </div>
   <button type="submit" class="btn btn-primary">Confirma la eliminacion</button>
<a href="{{route('deptos.index')}}" class="btn btn-primary">REGRESAR</a> 
</form>

@endsection
