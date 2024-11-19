@section("formulario2")
<div class="content">
         <div id="edificioYHorario" style="display: none; margin-top: 20px;">
                    <div style="display: flex; align-items: flex-start; gap: 20px;">
        <!-- Columna izquierda: Select de edificio y radios -->
        <div style="min-width: 250px;">
            <div class="form-group">
                <label for="edificio">Edificio</label>
                <select id="edificio" name="edificio" class="form-control">
                    <option value="">Seleccionar edificio</option>
                    @foreach($edificios as $edificio)
                        <option value="{{ $edificio->idEdificio }}">{{ $edificio->nombreEdificio }}</option>
                    @endforeach
                </select>
            </div>
            <div id="lugarContainer" style="margin-top: 10px;">
                @foreach($lugares as $lugar)
                    <label class="lugar" data-edificio-id="{{ $lugar->idEdificio }}" style="display: none; margin-top: 5px;">
                        <input type="radio" name="idLugar" data-nombre-corto="{{ $lugar->nombreCorto }}" value="{{ $lugar->idLugar }}">
                        {{ $lugar->nombreLugar }}
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Columna derecha: Tabla de horarios -->
        <div style="flex: 1;">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr style="background-color: black; color: white;">
                        <th>Hora</th>
                        <th>L</th>
                        <th>M</th>
                        <th>X</th>
                        <th>J</th>
                        <th>V</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 7; $i <= 21; $i++)
                        <tr>
                            <td>{{ $i }}-{{ $i + 1 }}</td>
                            <td><input type="checkbox" name="horarios[]" value="L,{{ $i }}"></td>
                            <td><input type="checkbox" name="horarios[]" value="M,{{ $i }}"></td>
                            <td><input type="checkbox" name="horarios[]" value="X,{{ $i }}"></td>
                            <td><input type="checkbox" name="horarios[]" value="J,{{ $i }}"></td>
                            <td><input type="checkbox" name="horarios[]" value="V,{{ $i }}"></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
                </div>
                     </div>
                
                     </div>
                    </div>
                     </div>

@endsection