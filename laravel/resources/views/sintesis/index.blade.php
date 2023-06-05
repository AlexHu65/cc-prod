@extends('master')
@section('title', 'Síntesis')
@section('content')

<!--banner-->
@include('sintesis.secciones.banner')
<!-- contenido-->
@include('home.secciones.sintesis')

<!-- formulario-->
@include('home.secciones.formulario')

@endsection
