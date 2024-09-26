<?php
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
Route::put('/user/{id}', [UserController::class, 'update']);
Route::get('/', function (Request $request) {
    // ...
});
?>