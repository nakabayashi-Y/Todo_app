<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;



// Route::get('/', [TodoController::class, 'add']);  ///addにアクセスして、TodoControllerのaddメソッドを行う
Route::post('/create', [TodoController::class, 'create']);
// Route::get('/', [TodoController::class, 'edit']);
Route::get('/', [TodoController::class, 'index']);  //getメソッドは、第１引数に割り当てるアドレス、第２引数に呼び出される処理を記述
Route::post('/edit', [TodoController::class, 'update'])->name('todo.update');
// Route::get('/delete', [TodoController::class, 'delete']);
Route::post('/delete', [TodoController::class, 'remove'])->name('todo.delete');