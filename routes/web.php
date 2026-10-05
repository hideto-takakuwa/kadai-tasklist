<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\TasksController;

Route::get('/', [TasksController::class, 'index']);
Route::resource('messages', TasksController::class);