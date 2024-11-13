
<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset


<a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('Personal.create')}}"
        role="button"
        >Nuevo</a
    >
<div
    class="table-responsive-md"
   >
    <table
        class="table  table-hover table-striped custom-table"
    >
        <thead class="table-dark ">
            <tr>

                <th scope="col">RFC</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Licenciatura</th>
                <th scope="col">Especialización</th>
                <th scope="col">Maestría</th>
                <th scope="col">Doctorado</th>
                <th scope="col">Fecha Ingreso SEP</th>
                <th scope="col">Fecha Ingreso Institución</th>
                <th scope="col">Depto</th>
                <th scope="col">Puesto</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>

            </tr>
        </thead> 
        <tbody>
            @foreach ($personales as $personal)
                <tr>
                    <td>{{ $personal->RFC }}</td>
                    <td>{{ $personal->nombre }}</td>
                    <td>{{ $personal->apellidoP }}</td>
                    <td>{{ $personal->apellidoM }}</td>
                    <td>{{ $personal->licenciatura ?? 'N/A' }}</td> 
                    <td>{{ $personal->especializacion ?? 'N/A' }}</td> 
                    <td>{{ $personal->maestria ?? 'N/A' }}</td> 
                    <td>{{ $personal->doctorado ?? 'N/A' }}</td>  
                    <td>{{ $personal->fechaIngSep ?? 'N/A' }}</td> 
                    <td>{{ $personal->fechaIngIns ?? 'N/A' }}</td> 
                    <td>{{ $personal->depto->nombreDepto ?? 'N/A' }}</td>
                    <td>{{ $personal->puesto->nombrePuesto ?? 'N/A' }}</td>

                   
                    <td>
                        <a href="{{ route('Personal.editar', $personal->idPersonal) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </td>
                    <td> 
                        <a href="{{ route('Personal.ver', $personal->idPersonal) }}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('Personal.ver', $personal->idPersonal) }}" class="btn btn-primary">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    
    {{ $personales->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
    
    
</div>
