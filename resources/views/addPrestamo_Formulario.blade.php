@extends('app')
@section('title', 'Formulario añadir Prestamo')
@section('content')
<style>
    
    input[type=number], select {
      width: 10%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=date], select {
      width: 15%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 15%;
      background-color: blue;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: rgb(3, 3, 152);
    }


   </style>
   <div>
    <form action="{{ route('addPrestamo') }}" method="get">
        @csrf
        <div style="display: flex; flex-direction: column">

            <label for="">Id_Usuario</label>
            <input type="number" name="user_id">
            <label for="">Id_Libro</label>
            <input type="number" name="book_id">
            <label for="">Fecha de Préstamo</label>
            <input type="date" name="fecha_prestamo">
            <label for="">Fecha de Devolución</label>
            <input type="date" name="fecha_devolucion">

        </div>
        <input type="submit" value= 'enviar datos'>
    </form>
</div>
    @endsection

