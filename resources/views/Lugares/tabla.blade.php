<ul>
</ul>

@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Lugares.create')}}" class="btn btn-dark mb-3" role="button">
    <i class="fas fa-plus"></i> Insertar
</a>

<div
    class="table-responsive-md"
   >
    <table
        class="table  table-hover table-striped custom-table"
    >
        <thead class="table-dark ">
            <tr>
                <th scope="col">Nombre Lugar</th>
                <th scope="col">nombre Corto</th>
                <th scope="col">Edificio</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lugares as $lugar)
                <tr>
                    <td>{{ $lugar->nombreLugar}}</td>
                    <td>{{ $lugar->nombreCorto }}</td>
                    <td>{{ $lugar->edificio->nombreEdificio }}  </td>
                    
                    <td>
                        <a href="{{ route('Lugares.editar', $lugar->idLugar) }}" class="btn btn-success">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('Lugares.ver', $lugar->idLugar) }}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('Lugares.ver', $lugar->idLugar) }}" class="btn btn-primary">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $lugares->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
</div>
