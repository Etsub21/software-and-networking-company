<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\InquiryController;

Route::get('/', [ProjectController::class, 'index']);

Route::post('/contact', [InquiryController::class, 'store']);
