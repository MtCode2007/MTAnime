<?php

use App\Http\Controllers\AnimeAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Anime;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('animes',AnimeAPIController::class.'@index');

Route::get('test1',function(){
    return Response()->json(Anime::all());
});