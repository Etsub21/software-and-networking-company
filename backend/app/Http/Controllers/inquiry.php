<?php

namespace App\Http\Controllers;
use\App\Models\Inquiry;  
use Illuminate\Http\Request;

class inquiry extends Controller
{
public function store(Request $request)
{
    Inquiry::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message
    ]);

    return redirect()->back();
}
}
