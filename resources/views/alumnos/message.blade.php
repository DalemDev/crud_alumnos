@extends('layouts/template')

@section('title', "Registro")
    

@section('contenido')
  <main>
    <div class="container py-4">
      <h2>{{ $msg }}</h2>
      <a href="{{ url('alumnos') }}" class="btn btn-secondary">Regresar</a>
    </div>
  </main>
@endsection