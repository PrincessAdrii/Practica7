

<a
name=""
id="nuevo"
class="btn btn-primary"
href="{{route('Puestos.create')}}"
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
      
        <th scope="col">IdPuesto</th>
        <th scope="col">Nombre</th>
        <th scope="col">Puesto</th>
        <th scope="col">EDITAR</th>
        <th scope="col">ELIMINAR</th>
        <th scope="col">VER</th>
    </tr>
</thead >
<tbody class="table-group-divider">
    @foreach ($puestos as $puesto)
    

    <tr class="">
       
        <td scope="row"> {{$puesto->idPuesto}}</td>
        <td scope="row"> {{$puesto->nombrePuesto}}</td>
        <td> {{$puesto->tipo}}</td>
       
        <td><a
            name=""
            id=""
            class="btn btn-warning"
            href="{{route('Puestos.editar',$puesto->idPuesto)}}"
            role="button"
            >editar</a
        >
        </td>
        <td><a
            name=""
            id=""
            class="btn btn-danger"
            href="{{route('Puestos.ver',$puesto->idPuesto)}}"
            role="button"
            >Eliminar</a
        >
        </td>
        <td><a
            name=""
            id=""
            class="btn btn-primary"
            href="{{route('Puestos.ver',$puesto->idPuesto)}}"
            role="button"
            >Ver</a
        >
        </td>
    </tr>
    @endforeach
</tbody>
</table> 
{{$puestos->links() }}
</div>


