<?php

use App\Http\Controllers\Category;
use App\Http\Controllers\Task;
use Illuminate\Support\Facades\Route;



    Route::post('CreateCategory',[Category::class, 'store']);
    Route::get('categories', [Category::class, 'index']);

    

    Route::post('tasks',[Task::class, 'create']);
    Route::get('tasks', [Task::class, 'index']);
    Route::get('tasks/{id}', [Task::class, 'show']);   
    Route::patch('tasks/{id}/toggle', [Task::class, 'UpdateToggle']); 
