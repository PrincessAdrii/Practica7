<ul>
</ul>

@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('PersonalPlazas.create')}}"
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
                <th scope="col">Personal</th>
                <th scope="col">Plaza</th>
                <th scope="col">Tipo de Nombramiento</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personalPlazas as $personalPlaza)
                <tr>
                    {{-- <td>{{ $personalPlaza->idPersonalPlaza }}</td> --}}
                    <td>{{ $personalPlaza->personal->nombre ?? 'N/A' }}</td>
                    <td>{{ $personalPlaza->plaza->nombrePlaza }}  </td>
                    <td>{{ $personalPlaza->tipoNombramiento }}</td>
                    <td>
                        <a href="{{ route('PersonalPlazas.editar', $personalPlaza->idPersonalPlaza) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('PersonalPlazas.ver', $personalPlaza->idPersonalPlaza) }}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('PersonalPlazas.ver', $personalPlaza->idPersonalPlaza) }}" class="btn btn-primary">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $personalPlazas->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
</div>
