@extends("plantillas/plantilla2")

@section("contenido1")
   @include("periodos/tablahtml") 
@endsection

@section("contenido2")
<h1>Ver todos los datos</h1>

<form action="{{route('periodos.destroy',$periodo)}}" method="post">
  @csrf
  <div class="row mb-3">
    <label for="idperiodo" class="col-sm-3 col-form-label">Id Periodo</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idperiodo" name="idperiodo" value="{{$periodo->idperiodo}}">
    </div>
  </div>
  <div class="row mb-3">
     <label for="periodo" class="col-sm-3 col-form-label">Periodo</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="periodo" name="periodo" value="{{$periodo->periodo}}">
     </div>
   </div>
   <div class="row mb-3">
     <label for="descCorta" class="col-sm-3 col-form-label">DescCorta</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="descCorta" name="descCorta" value="{{$periodo->descCorta}}">
     </div>
   </div>
   <div class="row mb-3">
     <label for="fechaIni" class="col-sm-3 col-form-label">Fecha Inicio</label>
     <div class="col-sm-9">
       <input type="date" class="form-control" id="fechaIni" name="fechaIni" value="{{$periodo->fechaIni}}">
     </div>
   </div>
   <div class="row mb-3">
     <label for="fechaFin" class="col-sm-3 col-form-label">Fecha Final</label>
     <div class="col-sm-9">
       <input type="date" class="form-control" id="fechaFin" name="fechaFin" value="{{$periodo->fechaFin}}">
     </div>
   </div>
  
   <button type="submit" class="btn btn-primary">Confirma la eliminacion</button>
<a href="{{route('periodos.index')}}" class="btn btn-primary">REGRESAR</a> 
</form>

@endsection
