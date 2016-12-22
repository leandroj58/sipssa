@extends('layout')

@section('content')

    <form class="form-horizontal">
    <fieldset>


        <h2>Agregar Entrada en </h2>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Fecha comprobante">Fecha del comprobante:</label>
            <div class="col-md-4">
                <input id="Fecha comprobante" name="Fecha comprobante" type="date" placeholder="fecha comprobante" class="form-control input-md" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="letra">Letra del comprobante: </label>
            <div class="col-md-4">
                <input id="letra" name="letra" type="text" placeholder="A" class="form-control input-md" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prefijo">Prefijo: </label>
            <div class="col-md-4">
                <input id="Prefijo" name="Prefijo" type="text" placeholder="0010" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prefijo">Número:</label>
            <div class="col-md-4">
                <input id="comprobante_numero" name="comprobante_numero" type="text" placeholder="número de comprobante" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prefijo">Convenio:</label>
            <div class="col-md-4">
                <input id="Convenio" name="Convenio" type="text" placeholder="Convenio" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prefijo">Número de afiliado:</label>
            <div class="col-md-4">
                <input id="afiliado_numero" name="afiliado_numero" type="text" placeholder="nro de afiliado" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prefijo">Número de orden:</label>
            <div class="col-md-4">
                <input id="orden_numero" name="orden_numero" type="text" placeholder="nro de orden" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prefijo">DNI:</label>
            <div class="col-md-4">
                <input id="dni" name="dni" type="text" placeholder="dni" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prefijo">Matrícula de prescriptor:</label>
            <div class="col-md-4">
                <input id="prescriptor_matricula" name="prescriptor_matricula" type="text" placeholder="matricula prescriptor" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prefijo">fecha de prescripción:</label>
            <div class="col-md-4">
                <input id="fecha_de_prescripcion" name="fecha_de_prescripcion" type="text" placeholder="fecha prescripcion" class="form-control input-md" required="">

            </div>
        </div>

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
            <label class="col-md-4 control-label" for="Fecha práctica">Fecha práctica</label>
            <div class="col-md-4">
                <input id="Fecha práctica" name="Fecha práctica" type="date" placeholder="Fecha práctica" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="precio">presentación:</label>
            <div class="col-md-4">
                <input id="presentacion" name="presentacion" type="text" placeholder="420101" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="precio">importe:</label>
            <div class="col-md-4">
                <input id="importe" name="importe" type="text" placeholder="170" class="form-control input-md" required="">

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