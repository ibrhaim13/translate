<?php

use Ibrhaim13\Translate\Http\Controllers\TranslateController;
use Illuminate\Support\Facades\Route;


Route::resource('/posts', TranslateController::class);
