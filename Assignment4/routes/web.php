<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentUpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/delete-records',[StudentController::class, 'indexDelete']);

Route::get('/delete/{id}', [StudentController::class, 'destroy']);

Route::get('edit-records',[StudentUpdateController::class, 'index']);

Route::get('edit/{id}',[StudentUpdateController::class, 'show']);


Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
Route::get('/insert', [StudentController::class, 'insertform']);

Route::post('/create', [StudentController::class, 'insert']);

Route::get('/view-records', [StudentController::class, 'index']);
