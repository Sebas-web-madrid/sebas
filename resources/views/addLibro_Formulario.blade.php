@extends('app')
@section('title', 'Formulario añadir Libro')
@section('content')
<style>
    input[type=text], select {
      width: 30%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=number], select {
      width: 10%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=bool], select {
      width: 5%;
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

    /* div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    } */
   </style>
   <div>
    <form action="{{ route('addLibro') }}" method="get">
        @csrf
        <div style="display: flex; flex-direction: column">

            <label for="">Titulo</label>
            <input type="text" name="titulo">
            <label for="">Autor</label>
            <input type="text" name="autor">
            <label for="">Año de publicacion</label>
            <input type="number" name="anno_publicacion">
            <label for="">Género</label>
            <input type="text" name="genero">
            <label for="">Disponible</label>
            <input type="bool" name="disponible">

        </div>
        <input type="submit" value= 'enviar datos'>
    </form>
</div>
    @endsection

