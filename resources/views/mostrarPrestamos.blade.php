@extends('app')
@section('title', 'Mostrar Préstamos')
@section('content')
@if($prestamo->isEmpty())
    <p>No hay prestamos</p>
@else
<style>
table {
   width: 70%;
   border: 1px solid #000;
   border-collapse: collapse;
   text-align: center;
}
th, td {
   width: 25%;
   text-align: center;
   vertical-align: top;
   border: 1px solid #000;
   border-spacing: 0;
   border-collapse: collapse;
   padding: 0;
}


</style>

            <table >
                <thead >
                    <tr >
                        <th >Id Usuario</th>
                        <th >Id Libro</th>
                        <th >Fecha de Préstamo</th>
                        <th >Fecha de Devolución</th>

                    </tr>
                </thead>
                @each('tablaPrestamo',$prestamo , 'item')
            </table>
        </div>
    </div>
  </div>
</div>

@endif

@endsection
