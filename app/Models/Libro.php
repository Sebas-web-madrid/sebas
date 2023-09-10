<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Libro extends Model
{
    use HasFactory;
    public static function create(Request $request){
        $libro = new Libro();
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->anno_publicacion = $request->input('anno_publicacion');
        $libro->genero = $request->input('genero');
        $libro->disponible = $request->input('disponible');
        $libro->save();
        return $libro->id;
    }
    public static function updatedLibroID($id, Request $request){
        $libro = Libro::find($id);
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->anno_publicacion = $request->input('anno_publicacion');
        $libro->genero = $request->input('genero');
        $libro->disponible = $request->input('disponible');
        $libro->save();
    }
    public static function destroy($ids){
        $libro = Libro::find($ids);
        $libro->delete();
    }
    public static function todosLibros(){
        return Libro::all();
    }
    public static function findLibroID($id){
        return Libro::find($id);
    }
}
