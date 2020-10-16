<?php

use App\Http\Controllers\StudentController;
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

Route::view('/', 'presentation');

Route::view('/login', 'userpage');

Route::view('/perfildodesenvolvedor', 'devprofile');

Route::resource('classes', GradesController::class)->only([
    'index', 'create', 'store'
])->names([
    'create' => "classes.cadastrar"
]);

Route::resource('students', StudentController::class)->only([
    'create', 'store'
])->names([
    'create' => "matricula"
]);
