<?php

use App\Models\User;

use Illuminate\Support\Str;
// use App\Http\Livewire\Categories\Categories;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users\UserController;
use App\Http\Controllers\curso\CursoController;
use App\Http\Controllers\inicio\HomeController;

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
   // -- address --
//    Route::get('/address', function () {
//        $users=User::first();
       //
       //    $users->informations=['key'=>true];
       //    $address=array(
       //        'numero'=>10,
       //        'calle'=>Str::title('cité des trois bornes'),
       //        'cp'=>75016,
       //        'ciudad'=>Str::title('paris'),
       //        'pais'=>Str::title('france'),
       //        );
       //    //    dd($address);
       //    //    dd($users->address);
       //    $users->address=$address;
       //    $users->price=10;

       //    $users->save();
       //    //
//        return $users;
//    });


Route::controller(HomeController::class)->group(function () {
    Route::view('/address', 'principal.address')->name('address');

    //
    Route::get('/', 'index')->name('home');
    Route::get('/#', 'gato')->name('gato');
    ///
    Route::view('/acercade', 'principal.acercade')->name('acercade');
    Route::view('/contactanos', 'principal.contactanos')->name('contactanos');
    Route::post('/contactanos', 'enviar')->name('contactanos.enviar');

//
    // Route::view('/dashboard', 'dashboard')->name('dashboard');
});

// Cursos
// Route::resource('cursos', CursoController::class);

Route::get('/cursos', [CursoController::class,'index'])->name('cursos.index');

Route::middleware(['auth:sanctum',    config('jetstream.auth_session'),    'verified'])->group(function () {
    Route::resource('/cursos', CursoController::class)
    ->except('index');

    Route::get('/dashboard', [UserController::class,'index'])
    ->name('dashboard');

    Route::middleware(['admin'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::resource('/cursos', CursoController::class);
    });
    // users
    // Route::resource('/dashboard/users', UserController::class);
    // categories
    // Route::get('/dashboard/categories', Categories::class)->name('categories');
    // Route::get('dashboard/categories/{id}/posts', Categoryposts::class);

    // Route::view('/tables', 'admin.user.tables.tables')->name('tables');

    // Route::view('/banca', 'banca.index')->name('banca.index');
});
