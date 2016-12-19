@extends('layout')

@section('content')



    <h2> Mostrando datos de la planilla nro: {{$Planilla->id}}</h2>
    <br>
    mes de la planilla: {{ $Planilla->mes_correspondiente}} <br>
    <a href="{{route('Detalle.planilla',$Planilla->id)}}" >link al detalle de la planilla con nro: {{$Planilla->id}}</a>
    {{route('Detalle.planilla',$Planilla->id)}}
    <br>
    <h1> {{ $Planilla->año_correspondiente }}</h1>

    @foreach($Planilla->filas as $fila)
        <h2>Fila nro: {{$fila->id}}</h2>
        <p><strong>Dia del comprobante: </strong>{{ $fila->dia_comprobante }}</p>
        <p><strong>mes del comprobante: </strong>{{ $fila->mes_comprobante }}</p>
        <p><strong>año del comprobante: </strong>{{ $fila->año_comprobante }}</p>
        <br>
        <p><strong>Dia de la practica: </strong>{{ $fila->dia_practica }}</p>
        <p><strong>mes de la practica: </strong>{{ $fila->mes_practica }}</p>
        <p><strong>Año de la practica: </strong>{{ $fila->año_practica }}</p>
        <br>
        <p><strong>PRECIO: </strong>{{ $fila->precio_práctica}}</p>
        <br>
        <br>
    @endforeach

@endsection