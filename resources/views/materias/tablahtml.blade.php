 {{--@dd($alumnos)--}}

 <ul>
    {{--@foreach ( $alumnos as $alumno )
     {{--<li>{{$alumno->nombre}}</li>
    {{--@endforeach--}}
    
 </ul>
 <a href="{{route('materias.create')}}" class="btn button btn-primary">Nuevo</a>
 <div
     class="table-responsive-md"
 >
     <table
         class="table table-primary"
     >
         <thead>
             <tr>
                 <th scope="col">ID Materia</th>
                 <th scope="col">Nombre Materia</th>
                 <th scope="col">Nombre Mediano</th>
                 <th scope="col">Nombre Corto</th>
                 <th scope="col"></th>
                 <th scope="col"></th>
                 <th scope="col"></th>
             </tr>
         </thead>
         <tbody
         @foreach ($materias as $materia )
             <tr class="">
                 <td scope="row">{{$materia->id}}</td>
                 <td>{{$materia->idmateria}}</td>
                 <td>{{$materia->nombremateria}}</td>
                 <td>{{$materia->nombrecorto}}</td>
                 <td>{{$materia->nombremediano}}</td>
                 <td><a href="{{route('materias.edit',$materia->id)}}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{route('materias.show',$materia->id)}}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{route('materias.show',$materia->id)}}" class="btn button btn-primary">ver</a></td>
             </tr>
         @endforeach
           
         </tbody>
     </table>
     {{$materias->links()}}
 </div>