@extends('app')
@section('title', 'Editando Libro')
@section('content')
<style>
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=number], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=bool], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 30%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
   </style>
<div style= "display:flex wrap:none">
<form action="{{route('updateLibro')}}" method="POST">
    @csrf
    <label for="">Titulo</label>
    <input type="text" name="titulo" value ="{{ $libro->titulo }}">
    <label for="">Autor</label>
    <input type="text" name="autor" value = "{{ $libro->autor }}">
    <label for="">Año de publicacion</label>
    <input type="number" name="anno_publicacion" value = "{{ $libro->anno_publicacion }}">
    <label for="">Género</label>
    <input type="text" name="genero" value = "{{ $libro->genero }}">
    <label for="">Disponible</label>
    <input type="bool" name="disponible" value = "{{ $libro->disponible }}">
    <input type="submit" value= 'enviar datos'>
</form>
</div>
@endsection

