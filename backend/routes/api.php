<?php

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/inquiry', function (Request $request) {
    $inquiry = Inquiry::create($request->all());
    return response()->json(['message' => 'Inquiry received successfully!'], 201);
});