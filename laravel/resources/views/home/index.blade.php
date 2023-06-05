@extends('master')
@section('title', 'Inicio' )
@section('content')

<!-- banner -->
@include('home.secciones.banners')
<!-- formulario-->
@include('home.secciones.formulario')
<!-- accion constante-->
@include('home.secciones.accion')
{{-- video --}}
@include('home.secciones.videos')
{{-- <!-- timeline-->
@include('home.secciones.timeline') --}}
<!-- blog-->
@include('home.secciones.blog')
<!-- about-->
@include('home.secciones.about')
<!-- informacion-->
@include('home.secciones.informacion')
<!-- eventos-->
@include('home.secciones.eventos')



@endsection
