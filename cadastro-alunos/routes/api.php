<?php

use App\Http\Controllers\AlunoController;

Route::get('/alunos', [AlunoController::class, 'index']);
Route::post('/alunos', [AlunoController::class, 'store']);
Route::get('/alunos/{id}', [AlunoController::class, 'show']);
Route::put('/alunos/{id}', [AlunoController::class, 'update']);
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy']);