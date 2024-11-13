@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
    <a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('Alumnos.create')}}"
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
            <th scope="col">No Ctrl</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Sexo</th>
                <th scope="col">Carrera</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->noctrl }}  </td>
                <td>{{ $alumno->nombre }}  </td>
                <td>{{ $alumno->apellidoP }}</td>
                <td>{{ $alumno->apellidoM }}</td>
                <td>{{ $alumno->sexo }}</td>
                <td>{{ $alumno->carrera->nombreCarrera ?? 'N/A' }}</td> 
                <td>
                    <a href="{{route('Alumnos.editar', $alumno->noctrl)}}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                </td>
                <td>
                    <a href="{{route('Alumnos.ver', $alumno->noctrl)}}" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Eliminar
                    </a>
                </td>
                <td>
                    <a href="{{route('Alumnos.ver', $alumno->noctrl)}}" class="btn btn-primary">
                        <i class="fas fa-eye"></i> Ver
                    </a>
                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$alumnos->links() }}
   </div>
   
   
