@extends("plantillas/plantilla2")

@section("contenido1")
   @include("reticulas/tablahtml") 
@endsection

@section("contenido2")
<h1>Editando</h1>

<form action="{{route('reticulas.update',$reticula->id)}}" method="POST">
  @csrf
     <div class="row mb-3">
      <label for="idreticula" class="col-sm-3 col-form-label">Id Reticula</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idreticula" name="idreticula"  value="{{$reticula->idreticula}}">
      </div>
    </div>
    <div class="row mb-3">
     <label for="descripcion" class="col-sm-3 col-form-label">Descripcion</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="descripcion" name="descripcion"  value="{{$reticula->descripcion}}">
     </div>
   </div>
    <div class="row mb-3">
       <label for="fechaEnvigor" class="col-sm-3 col-form-label">Fecha en Vigor</label>
       <div class="col-sm-9">
         <input type="date" class="form-control" id="fechaEnvigor" name="fechaEnvigor"  value="{{$reticula->fehaEnvigor}}">
       </div>
     </div>

   <button type="submit" class="btn btn-primary">Grabar</button>
 </form>

@endsection