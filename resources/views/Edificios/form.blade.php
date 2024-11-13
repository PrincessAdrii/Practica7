
@extends('plantillas/plantilla2')

@section('contenido1')

    @include('Edificios/tabla')
    
@endsection



@section('contenido3')

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
   {{$error}}
  </div>
@endforeach
@endif


@if ($accion == 'C')
<h1>insertar</h1> 
  <form action="{{route('Edificios.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>Editar</h1> 
  <form action="{{route('Edificios.update',$edificio->idEdificio)}}" method="POST">

    @elseif ($accion=='D')
    <h1>Eliminar</h1> 
    <form action="{{route('Edificios.eliminar',$edificio)}}" method="POST">
    
  @endif
  
  @csrf
 
  {{-- <div class="row mb-3">
    <label for="idEdificio" class="col-sm-3 col-form-label">ID edificio</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idEdificio" name="idEdificio" value="{{old('nombreEdificio',$edificio->idEdificio)}}" {{$des}}>
      @error('idEdificio')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
    </div>
  </div> --}}
    
    <div class="row mb-3">
      <label for="nombreEdificio" class="col-sm-3 col-form-label">Nombre Edificio</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreEdificio" name="nombreEdificio" value="{{old('nombreEdificio',$edificio->nombreEdificio)}}" {{$des}}>
        @error('nombreEdificio')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    
      <div class="row mb-3">
        <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" value="{{old('nombreCorto',$edificio->nombreCorto)}}" {{$des}}>
          @error('nombreCorto')
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
      </div>

    
      
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


