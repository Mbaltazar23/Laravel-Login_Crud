<h1>{{$modo}} Empleado</h1>
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{isset($empleado->Nombre) ? $empleado->Nombre : ''}}" id="Nombre">
</div>

<div class="form-group">

    <label for="ApellidoPaterno">ApellidoPaterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno: ''}}" id="ApellidoPaterno">
</div>

<div class="form-group">
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : ''}}" id="ApellidoMaterno">

</div>
<div class="form-group">

    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{isset($empleado->Correo) ? $empleado->Correo : ''}}" id="Correo">
</div>
<div class="form-group">

    <label for="Foto">Foto</label>
    @if (isset($empleado->Foto))
    <img src="{{asset('storage').'/'.$empleado->Foto}}" class="img-thumbanil img-fluid" width="100" alt="">
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
</div>
<br>
<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('empleado/')}}">Regresar</a>
<br>