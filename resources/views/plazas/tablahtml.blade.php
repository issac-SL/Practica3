 {{--@dd($alumnos)--}}

 <ul>
    {{--@foreach ( $alumnos as $alumno )
     {{--<li>{{$alumno->nombre}}</li>
    {{--@endforeach--}}
    
 </ul>
 <a href="{{route('plazasa.create')}}" class="btn button btn-primary">Nuevo</a>
 <div
     class="table-responsive-md"
 >
     <table
         class="table table-primary"
     >
         <thead>
             <tr>
                 <th scope="col">ID </th>
                 <th scope="col">ID Plaza</th>
                 <th scope="col">Nombre Plaza</th>
                 <th scope="col"></th>
                 <th scope="col"></th>
                 <th scope="col"></th>
                 <th scope="col"></th>
             </tr>
         </thead>
         <tbody
         @foreach ($plazas as $plaza )
             <tr class="">
                 <td scope="row">{{$plaza->id}}</td>
                 <td>{{$plaza->idplaza}}</td>
                 <td>{{$plaza->nombrePlaza}}</td>
                 
                 <td><a href="{{route('plazas.edit',$plaza->id)}}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{route('plazas.show',$plaza->id)}}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{route('plazas.show',$plaza->id)}}" class="btn button btn-primary">ver</a></td>
             </tr>
         @endforeach
           
         </tbody>
     </table>
     {{$plazas->links()}}
 </div>