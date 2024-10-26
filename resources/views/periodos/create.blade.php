@extends("plantillas/plantilla2")

@section("contenido1")
   @include("periodos/tablahtml") 
@endsection

@section("contenido2")
<h1>Insertando</h1>

<form action="{{route('periodos.store')}}" method="POST">
  @csrf
   <div class="row mb-3">
     <label for="idperiodo" class="col-sm-3 col-form-label">Id Periodo</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="idperiodo" name="idperiodo">
     </div>
   </div>
   <div class="row mb-3">
      <label for="periodo" class="col-sm-3 col-form-label">Periodo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="periodo" name="periodo">
      </div>
    </div>
    <div class="row mb-3">
      <label for="descCorta" class="col-sm-3 col-form-label">DescCorta</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="descCorta" name="descCorta">
      </div>
    </div>
    <div class="row mb-3">
      <label for="fechaIni" class="col-sm-3 col-form-label">Fecha Inicio</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="fechaIni" name="fechaIni">
      </div>
    </div>
    <div class="row mb-3">
      <label for="fechaFin" class="col-sm-3 col-form-label">Fecha Final</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="fechaFin" name="fechaFin">
      </div>
    </div>
   
   <button type="submit" class="btn btn-primary">Grabar</button>
 </form>

@endsection
