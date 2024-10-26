 {{--@dd($alumnos)--}}

 <ul>
    {{--@foreach ( $alumnos as $alumno )
     {{--<li>{{$alumno->nombre}}</li>
    {{--@endforeach--}}
    
 </ul>
 <a href="{{route('carreras.create')}}" class="btn button btn-primary">Nuevo</a>
 <div
     class="table-responsive-md"
 >
     <table
         class="table table-primary"
     >
         <thead>
             <tr>
                 <th scope="col">IDCarrera</th>
                 <th scope="col">Nombre Carrera</th>
                 <th scope="col">Nombre Mediano</th>
                 <th scope="col">NOmbre Corto</th>
                 <th scope="col"></th>
                 <th scope="col"></th>
                 <th scope="col"></th>
             </tr>
         </thead>
         <tbody
         @foreach ($carreras as $carrera )
             <tr class="">
                 <td scope="row">{{$carrera->id}}</td>
                 <td>{{$carrera->idcarrera}}</td>
                 <td>{{$carrera->nombrecarrera}}</td>
                 <td>{{$carrera->nombremediano}}</td>
                 <td>{{$carrera->nombrecorto}}</td>
                 <td><a href="{{route('carreras.edit',$carrera->id)}}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{route('carreras.show',$carrera->id)}}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{route('carreras.show',$carrera->id)}}" class="btn button btn-primary">ver</a></td>
             </tr>
         @endforeach
           
         </tbody>
     </table>
     {{$carreras->links()}}
 </div>