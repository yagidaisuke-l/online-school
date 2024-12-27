<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachingMaterialController;


/**
 * 仮ルーティング
 * 一旦教材のURLを列挙していく
 * @TODO 後で再考する
 */
Route::get('/kyouzai/step1/step1_1', function () {
    return view('kyouzai.step1.step1_1');
});



// @todo テスト用
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('permission:admin-access');

Route::get('/', function () {
    return view('welcome');
});

/**
 * スクール生徒用の画面
 * 生徒権限でのみ閲覧ができれば良いと考える
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
 * 権限は生徒と講師のみが閲覧可能としたい
 */
Route::prefix('teaching_materials')->group(function () {
    Route::get('/', [TeachingMaterialController::class, 'index'])->name('');
})->middleware(['permission:student-access', 'permission:teacher-access']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
