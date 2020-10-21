<?php

use Illuminate\Support\Facades\Route;

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

// ANTES
// Route::get('users', 'UsersController@index');

// AGORA
Route::get('users', [UsersController::class, 'index']);
// Route::resource('users', UsersController::class);

Route::get('user_create', [UsersController::class, 'store']);

Route::get('/job_batching', function() {
    $batch = Bus::batch([
        new CreateFile(),
        new CreateFile(),
        new CreateFile(),
        new CreateFile(),
        new CreateFile(),
    ])->then(function (Batch $batch) {
        echo "todos os jobs foram executados com sucesso";
    })->catch(function (Batch $batch, Throwable $e) {
        var_dump($e);
    })->finally(function (Batch $batch) {
        echo "finalizando comando";
        // $batch = Bus::batch([
        //     new CreateFile(),
        //     new CreateFile(),
        // ])->then(function (Batch $batch) {
        //     echo "segunda bateria de jobs foi concluída com sucesso";
        // })->catch(function (Batch $batch, Throwable $e) {
        //     var_dump($e);
        // })->finally(function (Batch $batch) {
        //     echo "agora acabaram-se todos os jobs";
        // })->dispatch();
    })->dispatch();

    return $batch->id;
});

Event::listen(function (CreateUser $event) {
    \Storage::disk('public')->put("user{$event->user->id}.txt", $event->user);
});
