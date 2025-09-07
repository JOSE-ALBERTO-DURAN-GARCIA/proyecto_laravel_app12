<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/persona_ajax", [PersonaController::class, "funListarAjax"]);
// CRUD PERSONA
//listar (GET)
Route::get("/persona", [PersonaController::class, "funListar"]);
//crear (GET)
// es para cargar el formulario 
Route::get("/persona/crear",[PersonaController::class, "funCrear"]);
//guardar(POST)
Route::post("/persona",[PersonaController::class, "funGuardar"]);
//mostrar(GET)
//estamos ocupando un parametro {id} que es un identifcador
Route::get("/persona/{id}",[PersonaController::class, "funMostrar"]);
//editar(GET)
//cargar el formulario de editcion de un cierto recurso
Route::get("/persona/{id}",[PersonaController::class, "funEditar"]);
// modificar(PUT)
//y el modificar modifica de un cierto recurso
Route::put("/persona/{id}", [PersonaController::class, "funModificar"]);
// eliminar(DELETE)
// el eliminar elimina de un cierto recurso
Route::delete("/persona/{id}",[PersonaController::class, "funEliminar"]);


//CRUD Usuarios - Controlador de recursos

Route::resource("/usuario", UsuarioController::class);