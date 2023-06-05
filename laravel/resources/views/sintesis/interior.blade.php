@extends('master')
@section('title', $noticia->titulo )
@section('content')

<!--banner-->
@include('sintesis.secciones.banner')
<!-- contenido-->
@include('sintesis.secciones.contenido')
<!-- formulario-->
@include('home.secciones.formulario')

@endsection
