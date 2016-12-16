@extends('layout')

@section('content')

    <h2> Mostrando datos de la planilla nro: {{$id_planilla}}</h2>
    <br>
    <a href="{{route('Detalle.planilla',$id_planilla)}}" >link al detalle de la planilla con nro: {{$id_planilla}}</a>
    {{route('Detalle.planilla',$id_planilla)}}
    <br>
    <h1>{{$datosPlanilla}}</h1>

@endsection