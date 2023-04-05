<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CertificateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/students');
// Route::get('/', [HomeController::class, 'index']);
Route::get('/sertifikat', [HomeController::class, 'cetak_pdf']);

Route::resource('/students', StudentController::class);
Route::resource('/certificates', CertificateController::class);
Route::get('/certificates/{student}/create', [CertificateController::class, 'generate'])->name('certificates.generate');
// Route::get('/certificates/list', [CertificateController::class, 'list'])->name('certificates.list');
Route::get('list', [CertificateController::class, 'list']);