
@extends("plantillas/plantilla2")

@section("contenido1")

@include("Periodos/tabla")
@endsection

@section("contenido2")

    <h1>Insertar form</h1>
@endsection

@section("contenido3")
@if ($accion=='C')
<form action="{{route('Periodos.store')}}" method="POST">
  <h1>Insertar form</h1>
  @endif
  @if ($accion=='E')
  <form action="{{route('Periodos.update',$periodo->idPeriodo)}}" method="POST">
    <h1>Actualizar</h1>
@endif
@if ($accion=='D')
<form action="{{route('Periodos.eliminar', $periodo)}}" method="POST">
  <h1>ver y eliminar</h1>
@endif


@csrf
  <div class="row mb-3">
    <label for="periodo" class="col-sm-3 col-form-label">Periodo</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="periodo" name="periodo" value="{{old('periodo',$periodo->periodo)}}" {{$des}}>
      @error('periodo')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label for="descCorta" class="col-sm-3 col-form-label">Decripcion Corta</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="descCorta" name="descCorta" value="{{old('descCorta',$periodo->descCorta)}}" {{$des}}>
      @error('descCorta')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
      
    </div>
  </div>

  <div class="row mb-3">
    <label for="fechaIni" class="col-sm-3 col-form-label">Fecha de Inicio</label>
    <div class="col-sm-9">
      <!-- Cambiado type="text" a type="date" -->
      <input type="date" class="form-control" id="fechaIni" name="fechaIni" 
             value="{{ old('fechaIni', $periodo->fechaIni ? $periodo->fechaIni->format('Y-m-d') : '') }}" {{$des}}>
      @error('fechaIni')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="fechaFin" class="col-sm-3 col-form-label">Fecha Final</label>
    <div class="col-sm-9">
      <!-- Cambiado type="text" a type="date" -->
      <input type="date" class="form-control" id="fechaFin" name="fechaFin" 
             value="{{ old('fechaFin', $periodo->fechaFin ? $periodo->fechaFin->format('Y-m-d') : '') }}" {{$des}}>
      @error('fechaFin')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
    </div>
  </div>


    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>
      
    
    
  </form>
  @endsection