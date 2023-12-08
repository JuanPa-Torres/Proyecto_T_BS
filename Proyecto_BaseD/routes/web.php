<?php

use App\Http\Controllers\BicicletaController;
use App\Http\Controllers\CaracteristicasController;
use App\Http\Controllers\ComponentesController;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\DistribuidorController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\VistasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ------------------------------Tabla Usuarios-------------------------------------------------------------------------------------------------------

// Ruta para Mostrar Usuario
Route::get("/", [UsuarioController::class, "Mostrar"])->name("usuario.mostrar");

// Ruta para añadir un nuevo usuario
Route::post("/registrar-usuarios", [UsuarioController::class, "create"])->name("usuario.create");

// Ruta para editar un usuario
Route::post("/modificar-usuarios", [UsuarioController::class, "update"])->name("usuario.update");

// Ruta para Eliminar un usuario
Route::get("/eliminar-usuarios-{id}", [UsuarioController::class, "delete"])->name("usuario.delete");

// ------------------------------Tabla Modelo-------------------------------------------------------------------------------------------------------

// Ruta para Mostrar modelo
Route::get("/modelo", [ModeloController::class, "Mostrar"])->name("modelo.mostrar");

// Ruta para añadir un nuevo modelo
Route::post("/registrar-modelo", [ModeloController::class, "create"])->name("modelo.create");

// Ruta para editar un modelo
Route::post("/modificar-modelo", [ModeloController::class, "update"])->name("modelo.update");

// Ruta para Eliminar un modelo
Route::get("/eliminar-modelo-{id}", [ModeloController::class, "delete"])->name("modelo.delete");


// ------------------------------Tabla Marca-------------------------------------------------------------------------------------------------------

// Ruta para Mostrar Marca
Route::get("/marca", [MarcaController::class, "Mostrar"])->name("marca.mostrar");

// Ruta para añadir un nueva Marca
Route::post("/registrar-marca", [MarcaController::class, "create"])->name("marca.create");

// Ruta para editar una Marca
Route::post("/modificar-marca", [MarcaController::class, "update"])->name("marca.update");

// Ruta para Eliminar una Marca
Route::get("/eliminar-marca-{id}", [MarcaController::class, "delete"])->name("marca.delete");


// ------------------------------Tabla Distribuidor-------------------------------------------------------------------------------------------------------

// Ruta para Mostrar Distribuidor
Route::get("/distribuidor", [DistribuidorController::class, "Mostrar"])->name("distribuidor.mostrar");

// Ruta para añadir un nueva Distribuidor
Route::post("/registrar-distribuidor", [DistribuidorController::class, "create"])->name("distribuidor.create");

// Ruta para editar un Distribuidor
Route::post("/modificar-distribuidor", [DistribuidorController::class, "update"])->name("distribuidor.update");

// Ruta para Eliminar un Distribuidor
Route::get("/eliminar-distribuidor-{id}", [DistribuidorController::class, "delete"])->name("distribuidor.delete");


// ------------------------------Tabla Componentes-------------------------------------------------------------------------------------------------------

// Ruta para Mostrar Componentes
Route::get("/componentes", [ComponentesController::class, "Mostrar"])->name("componentes.mostrar");

// Ruta para añadir un nueva Componentes
Route::post("/registrar-componentes", [ComponentesController::class, "create"])->name("componentes.create");

// Ruta para editar un Componentes
Route::post("/modificar-componentes", [ComponentesController::class, "update"])->name("componentes.update");

// Ruta para Eliminar un Componentes
Route::get("/eliminar-componentes-{id}", [ComponentesController::class, "delete"])->name("componentes.delete");


// ------------------------------Tabla Caracteristicas -------------------------------------------------------------------------------------------------------

// Ruta para Mostrar Caracteristicas
Route::get("/caracteristicas", [CaracteristicasController::class, "Mostrar"])->name("caracteristicas.mostrar");

// Ruta para añadir un nueva Caracteristicas
Route::post("/registrar-caracteristicas", [CaracteristicasController::class, "create"])->name("caracteristicas.create");

// Ruta para editar un Caracteristicas
Route::post("/modificar-caracteristicas", [CaracteristicasController::class, "update"])->name("caracteristicas.update");

// Ruta para Eliminar un Caracteristicas
Route::get("/eliminar-caracteristicas-{id}", [CaracteristicasController::class, "delete"])->name("caracteristicas.delete");


// ------------------------------Tabla Bicicleta -------------------------------------------------------------------------------------------------------

// Ruta para Mostrar Bicicleta
Route::get("/bicicleta", [BicicletaController::class, "Mostrar"])->name("bicicleta.mostrar");

// Ruta para añadir un nueva Bicicleta
Route::post("/registrar-bicicleta", [BicicletaController::class, "create"])->name("bicicleta.create");

// Ruta para editar un Bicicleta
Route::post("/modificar-bicicleta", [BicicletaController::class, "update"])->name("bicicleta.update");

// Ruta para Eliminar un Bicicleta
Route::get("/eliminar-bicicleta-{id}", [BicicletaController::class, "delete"])->name("bicicleta.delete");



// Para mostrar las Vistas
Route::get('/Vistas/Vista1', [VistasController::class, 'vista1']);
Route::get('/Vistas/Vista2', [VistasController::class, 'vista2']);
Route::get('/Vistas/Vista3', [VistasController::class, 'vista3']);
Route::get('/Vistas/Vista4', [VistasController::class, 'vista4']);
Route::get('/Vistas/Vista5', [VistasController::class, 'vista5']);
// Para mostrar las consultas
Route::get('/Consultas/Consulta1', [ConsultasController::class, 'consulta1']);
Route::get('/Consultas/Consulta2', [ConsultasController::class, 'consulta2']);
Route::get('/Consultas/Consulta3', [ConsultasController::class, 'consulta3']);
