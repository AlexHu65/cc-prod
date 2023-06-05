@extends('master')
@section('title', 'Acción Constante' )
@section('content')

<!-- banner -->
@include('home.secciones.banners')
<!-- blog -->
@include('acciones.secciones.entradas')
<!-- eventos-->
@include('home.secciones.eventos')
<!-- formulario-->
@include('home.secciones.formulario')

@endsection
