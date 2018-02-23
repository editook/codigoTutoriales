@extends('home.home')

@section('contenido')
  <h1>introduccion a la programacion</h1> 
  <h1>{{ $titulo }}</h1>
  <lu>
  	@if (!@empty ($listado))
  	    @foreach ($listado as $dato)
	  		<li>contando: {{ $dato }}</li>
<!--e(..)metodo que elimina un html injection)  toda infromacion lo almacena en cache por lo cual no lentea-->
	  	@endforeach
  	@else
  		<h3>listado vacio</h3>
  	@endif
  </lu>
@endsection
@section('otros')
	<h2>otros datos en el misma seccion</h2>
@endsection