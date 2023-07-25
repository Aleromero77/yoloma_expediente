

<label for="nombre">Nombre(s): </label>
<input type="text" name="nombre" id="nombre" value="{{ $terapeuta->nombre }}">
<br>
<label for="a_paterno">Apellido Paterno: </label>
<input type="text" name="a_paterno" id="a_paterno" value="{{ $terapeuta->a_paterno }}">
<br>
<label for="a_materno">Apellido Materno</label>
<input type="text" name="a_materno" id="a_materno" value="{{ $terapeuta->a_materno }}">
<br>
<label for="correo">Correo: </label>
<input type="text" name="correo" id="correo" value="{{ $terapeuta->correo }}">
<br>
<label for="telefono"> Telefono: </label>
<input type="text" name="telefono" id="telefono" value="{{ $terapeuta->telefono }}">
<br>
<label for="foto">Foto:</label>
{{ $terapeuta->foto }}
<input type="file" name="foto" id="foto" value="">
<br>

<input type="submit" value="Guardar Datos">