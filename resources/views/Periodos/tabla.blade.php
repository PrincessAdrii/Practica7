@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
    <a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('Periodos.create')}}"
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
            <th scope="col">Periodo</th>
                <th scope="col">Descripcion Corta</th>
                <th scope="col">Fecha de Inicio</th>
                <th scope="col">Fecha Final</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($periodos as $periodo)
            <tr>
                {{-- <td>{{ $periodo->idPeriodo }}</td> --}}
                <td>{{ $periodo->periodo }}</td>
                <td>{{ $periodo->descCorta }}</td>
                <td>{{ $periodo->fechaIni ? $periodo->fechaIni->format('Y-m-d') : 'N/A' }}</td>
                <td>{{ $periodo->fechaFin ? $periodo->fechaFin->format('Y-m-d') : 'N/A' }}</td>
                
                <td><a
                    name=""
                    id=""
                    class="btn btn-warning"
                    href="{{route('Periodos.editar',$periodo->idPeriodo)}}"
                    role="button"
                    >editar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="{{route('Periodos.ver',$periodo->idPeriodo)}}"
                    role="button"
                    >Eliminar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('Periodos.ver',$periodo->idPeriodo)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$periodos->links() }}
   </div>
   
   
