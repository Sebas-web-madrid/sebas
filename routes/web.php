<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addLibro', [LibrosController::class,'addLibroFormulario'])->name('addLibro');
Route::get('/formAddLibro', [LibrosController::class,'showFormularioAddLibro']);
Route::get('/mostrarLibros', [LibrosController::class,'showMostrarTodosLibros']);
Route::get('/deleteLibro/{id}', [LibrosController::class,'deleteLibro'])->name('deleteLibro');
Route::get('/updateLibroForm/{id}', [LibrosController::class,'updateLibroForm'])->name('updateLibroForm');
Route::post('/updateLibro', [LibrosController::class,'updateLibro'])->name('updateLibro');

Route::get('/addPrestamo', [PrestamosController::class,'addPrestamoFormulario'])->name('addPrestamo');
Route::get('/formAddPrestamo', [PrestamosController::class,'showFormularioAddPrestamo']);
Route::get('/mostrarPrestamos', [PrestamosController::class,'showMostrarTodosPrestamos']);
Route::get('/deletePrestamo/{id}', [PrestamosController::class,'deletePrestamo'])->name('deletePrestamo');
Route::get('/updatePrestamoForm/{id}', [PrestamosController::class,'updatePrestamoForm'])->name('updatePrestamoForm');
Route::post('/updatePrestamo', [PrestamosController::class,'updatePrestamo'])->name('updatePrestamo');

