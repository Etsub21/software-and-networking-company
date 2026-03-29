<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Validator;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the incoming data
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // 2. If validation fails, return a 422 Unprocessable Content error
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // 3. If valid, save to database
        try {
            $inquiry = Inquiry::create($request->all());
            
            return response()->json([
                'status'  => 'success',
                'message' => 'Thank you! Your inquiry has been received.',
                'data'    => $inquiry
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Server error, please try again later.'
            ], 500);
        }
    }
}