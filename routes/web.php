<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\StudentController;
use App\Models\Lecture;
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
    return view('admin/index');
});



// Route::get('/uas', function () {
//     return view('admin/uas');
// });

// Route::get('/utama', function () {
//     return view('admin/utama');
// });

// Route::get('/data-dosen', function () {
//     return view('admin/data-dosen');
// })->name('datadosen');

Route::resources([
    'datastudent' => StudentController::class,
    'index' => AdminController::class,
    'datalecture' => LectureController::class,
]);
// Route::resource('/data-mahasiswa', AdminController::class);// route

