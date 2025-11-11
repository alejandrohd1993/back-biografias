<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin'); // o la ruta que uses para Filament
});
