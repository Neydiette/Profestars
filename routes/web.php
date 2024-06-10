<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('anuncio/{id}', function ($id) {
    return view('savvy.anuncio', ['id' => $id]);
})->name('anuncio-mostrar')->middleware('auth');

Route::get('admin/{section?}', function ($section = 'usuarios') {
    return view('savvy.admin-view', compact('section'));
})->name('admin')->middleware('auth')->middleware('auth');

Route::get('educards', function () {
    return view('savvy.educards');
})->name('educards')->middleware('auth');
Route::get('estrategias', function () {
    return view('savvy.estrategias');
})->name('estrategias')->middleware('auth');
Route::get('comunidad', function () {
    return view('savvy.cofre');
})->name('cofre')->middleware('auth');

Route::get('favoritos', function () {
    return view('savvy.favoritos');
})->name('favoritos')->middleware('auth');
Route::get('emoticones', function () {
    return view('savvy.emotes');
})->name('emotes')->middleware('auth');
Route::get('crear', function () {
    return view('savvy.crear-anuncio');
})->name('crear')->middleware('auth');
Route::get('crear-estrategia', function () {
    return view('savvy.crear-estrategia');
})->name('crear-estrategia')->middleware('auth');

Route::get('editar-estrategia/{id}', function ($id) {
    return view('savvy.editar-estrategia', ['id' => $id]);
})->name('editarEstrategia')->middleware('auth');

Route::get('educard/{id}', function ($id) {
    return view('savvy.educard-view', ['id' => $id]);
})->name('educard.view')->middleware('auth');
Route::get('notificaciones', function () {
    return view('savvy.notis');
})->name('notificaciones')->middleware('auth');