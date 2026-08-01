<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

Route::get('/',[todosController::class,'index'])->name('todo.home');

Route::get('/create', function () {
    return view('create');
})->name('todo.create');

// update todo route

Route::post('/update',[todosController::class,'updateData'])->name('todo.updateData');

// edit todo route

Route::get('edit/{id}',[todosController::class,'edit'])->name('todo.edit');

// create todo route

Route::post('/create',[todosController::class,'store'])->name('todo.store');

// delete todo route 

Route::post('/delete/{id}',[todosController::class,'delete'])->name('todo.delete');


