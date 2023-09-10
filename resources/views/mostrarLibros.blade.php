@extends('app')
@section('title', 'Mostrar Libros')
@section('content')
@if($libro->isEmpty())
    <p>No hay libros</p>
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
                        <th >Titulo</th>
                        <th >Autor</th>
                        <th >Año de Publicación</th>
                        <th >Género</th>
                        <th >Disponible</th>
                        <th >Acciones</th>
                    </tr>
                </thead>
                @each('tabla',$libro , 'item')
            </table>
        </div>
    </div>
  </div>
</div>

@endif

@endsection
