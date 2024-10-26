@extends("plantillas/plantilla1")

@section("contenido1")
<div class="row">
    <div class="col">
      <h3>Apertura de materias</h3>
    </div>
</div class="col">
<select name="idperiodo" id="idperiodo">
    <option value="{{$periodo}}">Enero-Jun 24</option>
</select><br>
<select name="idcarrera" id="1">ISC</select>
</div>


<div class="row">
     <div class="col">
       <button>Sem1</button><br>
       <input type="checkbox" name="m1" id="m1">Mat 1<br>
       <input type="checkbox" name="m1" id="m1">Mat 2<br>
       <input type="checkbox" name="m1" id="m1">Mat 3<br>
       <input type="checkbox" name="m1" id="m1">Mat 4<br>
       <input type="checkbox" name="m1" id="m1">Mat 5<br>
     </div>
     <div class="col">
        <button>Sem2</button><br>
        <input type="checkbox" name="m1" id="m1">pro 1<br>
        <input type="checkbox" name="m1" id="m1">pro 2<br>
        <input type="checkbox" name="m1" id="m1">pro 3<br>
        <input type="checkbox" name="m1" id="m1">pro 4<br>
        <input type="checkbox" name="m1" id="m1">pro 5<br>
      </div>
      <div class="col">
        <button>Sem3</button><br>
        <input type="checkbox" name="m1" id="m1">BD 1<br>
        <input type="checkbox" name="m1" id="m1">BD 2<br>
        <input type="checkbox" name="m1" id="m1">BD 3<br>
        <input type="checkbox" name="m1" id="m1">BD 4<br>
        <input type="checkbox" name="m1" id="m1">BD 5<br>
      </div>
</div>
</div>
@endsection