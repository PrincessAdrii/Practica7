@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Plazas/tabla')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido3')


@foreach ( $errors->all() as $error )
  <li>
   {{$error}}
   </li>
@endforeach
@if ($accion == 'C')
<h1>Insertar</h1> 
  <form action="{{route('Plazas.store')}}" method="POST">
  @elseif ($accion == 'E')
  <h1>Editar</h1> 
  <form action="{{route('Plazas.update',$plaza->idPlaza)}}" method="POST">

    @elseif ($accion=='D')
    <h1>Ver y Eliminar</h1> 
    <form action="{{route('Plazas.eliminar',$plaza)}}" method="POST">
    
  @endif
  
  @csrf
    {{-- <div class="row mb-3">
      <label for="idPlaza" class="col-sm-3 col-form-label">Id Plaza</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idPlaza" name="idPlaza" value="{{old('idPlaza',$plaza->idPlaza)}}" {{$des}}>
        @error('idPlaza')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div> --}}
    
    <div class="row mb-3">
      <label for="nombrePlaza" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza" value="{{old('nombrePlaza',$plaza->nombrePlaza)}}" {{$des}}>
        @error('nombrePlaza')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


