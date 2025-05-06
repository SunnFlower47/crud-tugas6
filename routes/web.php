<?php

use app\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan6Controller;

Route::get('/', function () {
    return redirect('pertemuan6');
});

Route::resource('pertemuan6', Pertemuan6Controller::class);




