@extends("plantillas/plantilla2")

@section("contenido1")
   @include("reticulas/tablahtml") 
@endsection

@section("contenido2")
<h1>Ver todos los datos</h1>

<form action="{{route('reticulas.destroy',$reticula)}}" method="post">
  @csrf
  <div class="row mb-3">
    <label for="idreticula" class="col-sm-3 col-form-label">Id Reticula</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idreticula" name="idreticula">
    </div>
  </div>
  <div class="row mb-3">
   <label for="descripcion" class="col-sm-3 col-form-label">Descripcion</label>
   <div class="col-sm-9">
     <input type="text" class="form-control" id="descripcion" name="descripcion">
   </div>
 </div>
  <div class="row mb-3">
     <label for="fechaEnvigor" class="col-sm-3 col-form-label">Fecha en Vigor</label>
     <div class="col-sm-9">
       <input type="date" class="form-control" id="fechaEnvigor" name="fechaEnvigor">
     </div>
   </div>
  
   <button type="submit" class="btn btn-primary">Confirma la eliminacion</button>
<a href="{{route('reticulas.index')}}" class="btn btn-primary">REGRESAR</a> 
</form>

@endsection
