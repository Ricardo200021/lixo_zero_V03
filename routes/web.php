<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\PostsController;
use App\Models\Formulario;
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

Route::get('/', [ AdmController::class, 'login' ]);
Route::post('/', [ AdmController::class, 'loginPost' ]);

Route::get('/cadastro', [ AdmController::class, 'cadastro' ]);
Route::post('/cadastro', [ AdmController::class, 'cadastroPost' ]);

Route::get('/denuncias', [ AdmController::class, 'denuncias' ]);
Route::get('/denuncias/{id}', [ AdmController::class, 'verDenuncia' ]);

Route::get('/nova-denuncia', [ AdmController::class, 'novaDenuncia' ]);
Route::post('/nova-denuncia', [ AdmController::class, 'novaDenunciaPost' ]);

Route::get('/denuncias/deletar/{id}', [ AdmController::class, 'deletarDenuncia' ])->name('deletarDenuncia');
Route::get('/denuncias/concluir/{id}', [ AdmController::class, 'concluirDenuncia' ])->name('concluirDenuncia');