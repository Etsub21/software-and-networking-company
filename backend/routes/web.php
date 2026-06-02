<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Models\Inquiry;
use Illuminate\Http\Request;


// We are removing the 'api/' part just to test
Route::post('/inquiry-test', function (Request $request) {
    return Inquiry::create($request->all());
});
