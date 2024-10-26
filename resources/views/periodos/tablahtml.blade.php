 {{--@dd($alumnos)--}}

 <ul>
    {{--@foreach ( $alumnos as $alumno )
     {{--<li>{{$alumno->nombre}}</li>
    {{--@endforeach--}}
    
 </ul>
 <a href="{{route('periodos.create')}}" class="btn button btn-primary">Nuevo</a>
 <div
     class="table-responsive-md"
 >
     <table
         class="table table-primary"
     >
         <thead>
             <tr>
                 <th scope="col">ID Periodo</th>
                 <th scope="col">Periodo</th>
                 <th scope="col">DescCorta</th>
                 <th scope="col">Fecha Inicio</th>
                 <th scope="col">Fecha Fin</th>
                 <th scope="col"></th>
                 <th scope="col"></th>
             </tr>
         </thead>
         <tbody
         @foreach ($periodos as $periodo )
             <tr class="">
                 <td scope="row">{{$periodo->id}}</td>
                 <td>{{$periodo->idperiodo}}</td>
                 <td>{{$periodo->periodo}}</td>
                 <td>{{$periodo->descCorta}}</td>
                 <td>{{$periodo->fechaIni}}</td>
                 <td>{{$periodo->fechaFin}}</td>
                 <td><a href="{{route('periodos.edit',$periodo->id)}}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{route('periodos.show',$periodo->id)}}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{route('periodos.show',$periodo->id)}}" class="btn button btn-primary">ver</a></td>
             </tr>
         @endforeach
           
         </tbody>
     </table>
     {{$periodos->links()}}
 </div>