<?php
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/test-connection', function () {
    return Response::json([
        'status' => 'success',
    ]);
});