

<a
name=""
id="nuevo"
class="btn btn-primary"
href="{{route('Plazas.create')}}"
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
       
        <th scope="col">Id plaza</th>
        <th scope="col">Nombre</th>
        
        <th scope="col">EDITAR</th>
        <th scope="col">ELIMINAR</th>
        <th scope="col">VER</th>
    </tr>
</thead >
<tbody>
            @foreach ($plazas as $plaza)
            <tr>
           
                <td scope="row">{{ $plaza->idPlaza }}  </td>
                <td scope="row">{{ $plaza->nombrePlaza }}  </td>
                <td>
                    <a href="{{route('Plazas.editar',$plaza->idPlaza)}}" class="btn btn-success">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                </td>
                <td>
                    <a href="{{route('Plazas.ver',$plaza->idPlaza)}}" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Eliminar
                    </a>
                </td>
                <td>
                    <a href="{{route('Plazas.ver',$plaza->idPlaza)}}" class="btn btn-primary">
                        <i class="fas fa-eye"></i> Ver
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
</table> 
{{$plazas->links() }}
</div>


