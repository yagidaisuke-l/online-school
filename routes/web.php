<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachingMaterialController;


// @todo テスト用
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('permission:admin-access');

Route::get('/', function () {
    return view('welcome');
});

/**
 * スクール生徒用の画面
 */
Route::prefix('students')->group(function () {
    /**
     * @TODO
     * 各画面の役割を定義してから作業開始する
     */
    Route::get('/dashboard', [StudentController::class, 'index'])->name('');
    Route::get('/message', [StudentController::class, 'index'])->name('');
    Route::get('/note', [StudentController::class, 'index'])->name('');
})->middleware('permission:student-access');

/**
 * 教材の画面
 */
Route::prefix('teaching_materials')->group(function () {
    Route::get('/', [TeachingMaterialController::class, 'index'])->name('');
});
