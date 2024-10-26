 {{--@dd($alumnos)--}}

 <ul>
    {{--@foreach ( $alumnos as $alumno )
     {{--<li>{{$alumno->nombre}}</li>
    {{--@endforeach--}}
    
 </ul>
 <a href="{{route('reticulas.create')}}" class="btn button btn-primary">Nuevo</a>
 <div
     class="table-responsive-md"
 >
     <table
         class="table table-primary"
     >
         <thead>
             <tr>
                 <th scope="col">ID Reticula</th>
                 <th scope="col">Descripcion</th>
                 <th scope="col">Fecha en Vigor</th>
                 <th scope="col"></th>
                 <th scope="col"></th>
                 <th scope="col"></th>
                 <th scope="col"></th>
             </tr>
         </thead>
         <tbody
         @foreach ($reticulas as $reticula )
             <tr class="">
                 <td scope="row">{{$reticula->id}}</td>
                 <td>{{$reticula->idreticula}}</td>
                 <td>{{$reticula->descripcion}}</td>
                 <td>{{$reticula->fechaEnvigor}}</td>
                 <td><a href="{{route('reticulas.edit',$reticula->id)}}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{route('reticulas.show',$reticula->id)}}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{route('reticulas.show',$reticula->id)}}" class="btn button btn-primary">ver</a></td>
             </tr>
         @endforeach
           
         </tbody>
     </table>
     {{$reticulas->links()}}
 </div>