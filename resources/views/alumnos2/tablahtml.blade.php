 {{--@dd($alumnos)--}}

 <ul>
    {{--@foreach ( $alumnos as $alumno )
     {{--<li>{{$alumno->nombre}}</li>
    {{--@endforeach--}}
    
 </ul>
 @isset($mensaje)
 <p>{{$mensaje}}</p> 
 @endisset
 <a href="{{route('alumnos.create')}}" class="btn button btn-primary">Nuevo</a>
 <div
     class="table-responsive-md"
 >
     <table
         class="table table-primary"
     >
         <thead>
             <tr>
                 <th scope="col">ID</th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Apellido P</th>
                 <th scope="col">Email</th>
                 <th scope="col">Carrera</th>
                 <th scope="col">Depto</th>
                 <th scope="col"></th>
                 <th scope="col"></th>
             </tr>
         </thead>
         <tbody
         @foreach ($alumnos as $alumno )
             <tr>
                 <td scope="row">{{$alumno->id}}</td>
                 <td>{{$alumno->nombre}}</td>
                 <td>{{$alumno->apellidop}}</td>
                 <td>{{$alumno->apellidom}}</td>
                 <td>{{$alumno->email}}</td>
                 <td>{{$alumno->sexo}}</td>

                {{-- <td>{{$alumno->carrera->nombrecarrera->}}</td>
                 <td>{{$alumno->carrera->depto->nombredepto->}}</td>--}}
                 
                 <td><a href="{{route('alumnos.edit',$alumno->id)}}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary">ver</a></td>
             </tr>
         @endforeach
           
         </tbody>
  {{--   </table>
     {{$alumnos->links()}}
 </div>
 <hr>
 <ul>
    @foreach ($deptos as $depto)
    <li>{{$depto->nombredepto}}</li>
    <ul>
    @foreach ($depto->carreras as $carrera)
        <li>{{$carrera->nombrecarrera}}</li>
        <ul>
            @foreach ($carrera->alumnos as $alumno )
                <li>{{$alumno->nombre}}</li>
            @endforeach
        </ul>
    @endforeach
</ul>
    @endforeach 
</ul>
<ul>
    <div class="contaner">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <form action="{{route('alumnos.index')}}" method="GET">
                <select name="iddepto" onchange="this.form.submit">
                    @foreach ($deptos as $depto )
                        <option value="{{$depto->id}}">{{$depto->nombredepto}}</option>
                    @endforeach
                </select>
                <select name="idcarrera" id="idcarrera">
                    <option value="0">Selecciona la materia</option>
                    @if (request('iddepto') !== null)
                    @foreach ($deptos->find(request('iddepto'))->carreras as $carreras )
                   <option value="{{$carrera->id}}">{{$carrera->nombrecarrera}}</option>     
                    @endforeach
                    @endif
                </select>
                <button>Ver</button>
                </form>

            </div>

        </div>

    </div>
</ul>
<script>
    
    document.getElementById("iddepto").value={{request('iddepto')}};
</script>--}}