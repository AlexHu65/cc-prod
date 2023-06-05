@extends('master')
@section('title', 'Blog' )
@section('content')

<!-- banner -->
@include('home.secciones.banners')
<!-- blog -->
@include('blog.secciones.entradas')
<!-- eventos-->
@include('home.secciones.eventos')
<!-- accion constante-->
@include('home.secciones.accion')
<!-- formulario-->
@include('home.secciones.formulario')

@endsection
