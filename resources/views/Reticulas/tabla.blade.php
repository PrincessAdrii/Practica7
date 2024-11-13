@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
    <a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('Reticulas.create')}}"
        role="button"
        >Nuevo</a
    >
   
    {{--  --}}
   <div
    class="table-responsive-md"
   >
    <table
        class="table  table-hover table-striped custom-table"
    >
        <thead class="table-dark ">
        <tr>
                
                <th scope="col">Descripción</th>
                <th scope="col">Fecha Vigor</th>
                <th scope="col">Carrera</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($reticulas as $reticula)
                <tr>
                   
                    <td>{{ $reticula->descripcion }}</td>
                    <td>{{ $reticula->fechaEnVigor }}</td>
                    <td>{{ $reticula->carrera->nombreCarrera }}</td>
   
                
                <td><a
                    name=""
                    id=""
                    class="btn btn-warning"
                    href="{{route('Reticulas.editar',$reticula->idReticula)}}"
                    role="button"
                    >editar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="{{route('Reticulas.ver',$reticula->idReticula)}}"
                    role="button"
                    >Eliminar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('Reticulas.ver',$reticula->idReticula)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$reticulas->links() }}
   </div>
   

   
         
