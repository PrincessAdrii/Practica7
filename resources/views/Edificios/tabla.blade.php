<ul>
</ul>

@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('Edificios.create')}}"
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
                <th scope="col">Id</th>
                <th scope="col">Nombre Edificio</th>
                <th scope="col">Nombre Corto</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($edificios as $edificio)
                <tr>
                    <td>{{ $edificio->idEdificio }}  </td>
                    <td>{{ $edificio->nombreEdificio }}  </td>
                    <td>{{ $edificio->nombreCorto }}</td>
                    <td>
                        <a href="{{ route('Edificios.editar', $edificio->idEdificio) }}" class="btn btn-success">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('Edificios.ver', $edificio->idEdificio) }}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('Edificios.ver', $edificio->idEdificio) }}" class="btn btn-primary">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $edificios->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
</div>
