<?php

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/inquiry', function (Request $request) {
    \Illuminate\Support\Facades\Log::info('Inquiry request arrived:', $request->all());
    // This creates the data in your database
    $inquiry = Inquiry::create($request->all());
    
    return response()->json([
        'message' => 'Inquiry received successfully!',
        'data' => $inquiry
    ], 201);
});