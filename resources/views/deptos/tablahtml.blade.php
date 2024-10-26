 {{--@dd($alumnos)--}}

 <ul>
    {{--@foreach ( $alumnos as $alumno )
     {{--<li>{{$alumno->nombre}}</li>
    {{--@endforeach--}}
    
 </ul>
 <a href="{{route('deptos.create')}}" class="btn button btn-primary">Nuevo</a>
 <div
     class="table-responsive-md"
 >
     <table
         class="table table-primary"
     >
         <thead>
             <tr>
                 <th scope="col">ID Depto</th>
                 <th scope="col">Nombre Depto</th>
                 <th scope="col">Nombre Mediano</th>
                 <th scope="col">Nombre Corto</th>
                 <th scope="col"></th>
                 <th scope="col"></th>
                 <th scope="col"></th>
             </tr>
         </thead>
         <tbody
         @foreach ($deptos as $depto )
             <tr class="">
                 <td scope="row">{{$depto->id}}</td>
                 <td>{{$depto->iddepto}}</td>
                 <td>{{$depto->nombredepto}}</td>
                 <td>{{$depto->nombrecorto}}</td>
                 <td>{{$depto->nombremediano}}</td>
                 <td><a href="{{route('deptos.edit',$depto->id)}}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{route('deptos.show',$depto->id)}}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{route('deptos.show',$depto->id)}}" class="btn button btn-primary">ver</a></td>
             </tr>
         @endforeach
           
         </tbody>
     </table>
     {{$deptos->links()}}
 </div>