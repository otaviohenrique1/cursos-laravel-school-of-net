<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestUserController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste.teste');
});

// Route::get('/hello', function () {
//     return 'Hello School of Net';
// });

// Route::get('/ola/{name}/{lastname?}', function ($name, $lastname = '') {
//     return "Hello {$name} {$lastname}";
// });

// Route::middleware('auth')->group(function () {
//     Route::middleware('auth')->get('auth', function () {
//         return 'Rota 1';
//     });

//     Route::middleware('auth')->get('auth-2', function () {
//         return 'Rota 2';
//     });
// });

// [App\Http\Controllers\TestUsersController, 'index']
// Route::get('/test/users', [TestUserController::class, 'index']);

Route::get('/test/users', [TestUserController::class, 'index']);
Route::get('/test/user/{id}', [TestUserController::class, 'show']);

// Listagem total (index)
// Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index'); // Exibe uma lista com todos os elementos

// Criacao (Create/Store)
// Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create'); // Abre a pagina de criacao
// Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store'); // Cria um elemento

// Visualizacao unica (Show)
// Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show'); // Exibe um elemento da lista

// Aualizacao (Edit/Put/Patch)
// Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update'); // Atualiza os dados de um elemento
// Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit'); // Edita os dados de um elemento

// Delete (Delete)
// Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // Deleta um elemento

Route::resource('tasks', TaskController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
