@extends('master')
@section('title', 'Inicio' )
@section('content')

<!-- banner -->
@include('home.secciones.banners')
<!-- formulario-->
@include('contacto.secciones.formulario')
<!-- accion constante-->
@include('home.secciones.accion')
<!-- timeline-->
@include('home.secciones.timeline')
<!-- blog-->
@include('home.secciones.blog')
<!-- about-->
@include('home.secciones.about')
<!-- informacion-->
@include('home.secciones.informacion')
<!-- eventos-->
@include('home.secciones.eventos')



@endsection
