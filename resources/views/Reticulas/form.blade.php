
@extends("plantillas/plantilla2")

@section("contenido1")

@include("Reticulas/tabla")
@endsection

@section("contenido2")

    <h1>Insertar form</h1>
@endsection

@section("contenido3")
@if ($accion=='C')
<form action="{{route('Reticulas.store')}}" method="POST">
  <h1>Insertar form</h1>
  @endif
  @if ($accion=='E')
  <form action="{{route('Reticulas.update',$reticula->idReticula)}}" method="POST">
    <h1>Actualizar</h1>
@endif
@if ($accion=='D')
<form action="{{route('Reticulas.eliminar', $reticula)}}" method="POST">
  <h1>ver y eliminar</h1>
@endif


  @csrf
  
    
  <div class="row mb-3">
    <label for="descripcion" class="col-sm-3 col-form-label">Descripcion</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('nombre',$reticula->descripcion)}}" {{$des}}>
      @error('descripcion')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label for="fechaEnVigor" class="col-sm-3 col-form-label">Fecha en Vigor</label>
    <div class="col-sm-9">
        <input type="date" class="form-control" id="fechaEnVigor" name="fechaEnVigor" value="{{ old('fechaEnVigor', $reticula->fechaEnVigor ?? '') }}" {{$des}}>
        @error('fechaEnVigor')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

    <label for="idCarrera">Seleccionar Carrera</label>
    <select name="idCarrera" id="idCarrera" class="form-control" {{ $des }}>
      <option value="">-- Seleccione una Carrera --</option>
      @foreach ($carreras as $carrera)
          <option value="{{ $carrera->idCarrera }}" {{ $carrera->idCarrera == $reticula->idCarrera ? 'selected' : '' }}>
              {{ $carrera->nombreCarrera }}
          </option>
      @endforeach
    </select>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>
  @endsection