@extends('layout')

@section('content')

    <div class="row" style="margin-top: 70px;">
        <div class="col-md-3 col-md-offset-3"><h3> Planilla del mes: {{$Planilla->mes}}</h3></div>
        <div class="col-md-3"><h3>Atenciones ingresadas: {{ count($Planilla->filas)}}</h3></div>
    </div>
    <div class="row" style="margin-top: 40px; margin-bottom: 20px;">
        <div class="col-md-3 col-md-3 col-md-offset-3"><a href="{{route('home',$Planilla->id)}}" ><button type="button" class="btn btn-success">Cargar atenciones</button></a></div>
        <div class="col-md-3"><button type="button" class="btn btn-warning">Cerrar planilla</button></div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>fecha comprobante</th>
                    <th>letra</th>
                    <th>prefijo</th>
                    <th>número</th>
                    <th>convenio</th>
                    <th>número</th>
                    <th>orden</th>
                    <th>matr. prescrip.</th>
                    <th>fecha prescrip.</th>
                    <th>matr. efec.</th>
                    <th>fecha de práctica</th>
                    <th>prestación</th>
                    <th>cantidad</th>
                    <th>importe</th>
                    <th>dni</th>
                    <th>nomenclador</th>
                    <th>nro gerenc.</th>
                </tr>
            </thead>

            <tbody>
            @foreach($Planilla->filas as $fila)
            <tr class=" @if ($fila->estado == 'incompleta') success @else danger @endif " >
                <th scope="row">{{$fila->id}}</th>
                <td>{{$fila->comprobante_fecha}}</td>
                <td>{{$fila->comprobante_letra}}</td>
                <td>{{$fila->comprobante_prefijo}}</td>
                <td>{{$fila->comprobante_número}}</td>
                <td>{{$fila->afiliado_convenio}}</td>
                <td>{{$fila->afiliado_número}}</td>
                <td>{{$fila->afiliado_orden}}</td>
                <td>{{$fila->matricula_prescriptor}}</td>
                <td>{{$fila->fecha_prescripcion}}</td>
                <td>{{$fila->matricula_efector}}</td>
                <td>{{$fila->fecha_practica}}</td>
                <td>{{$fila->prestacion}}</td>
                <td>{{$fila->cantidad}}</td>
                <td>{{$fila->importe}}</td>
                <td>{{$fila->afiliado_dni}}</td>
                <td>{{$fila->nomenclador}}</td>
                <td>{{$fila->gerenciadora_numero}}</td>
            </tr>
            @endforeach

            </tbody>

        </table>
    </div>
@endsection