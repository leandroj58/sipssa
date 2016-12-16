@extends('layout')

@section('content')

    <form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <br><legend>Agregar Entrada en </legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Fecha comprobante">Fecha comprobante</label>
            <div class="col-md-4">
                <input id="Fecha comprobante" name="Fecha comprobante" type="text" placeholder="fecha comprobante" class="form-control input-md" required="">
                <span class="help-block">ingrese la fecha del comprobante</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Fecha práctica">Fecha práctica</label>
            <div class="col-md-4">
                <input id="Fecha práctica" name="Fecha práctica" type="text" placeholder="Fecha práctica" class="form-control input-md" required="">
                <span class="help-block">ingrese la fecha de la practica</span>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="matricula efector">Matrícula efector</label>
            <div class="col-md-4">
                <select id="matricula efector" name="matricula efector" class="form-control">
                    <option value="17868">17868</option>
                    <option value="120202">120202</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="precio">precio</label>
            <div class="col-md-4">
                <input id="precio" name="precio" type="text" placeholder="precio" class="form-control input-md" required="">
                <span class="help-block">precio de la practica</span>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="CargarEntrada"></label>
            <div class="col-md-4">
                <button id="CargarEntrada" name="CargarEntrada" class="btn btn-primary">Cargar Entrada</button>
            </div>
        </div>

    </fieldset>
</form>
@endsection