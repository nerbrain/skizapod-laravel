<?php

use App\Http\Controllers\PodcastController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/podcasts', [PodcastController::class, 'showAllPodcasts']);
Route::get('/podcast/find/{searchItem}',[PodcastController::class, 'findPodcast']);
Route::get('/podcast/{id}', [PodcastController::class,'showPodcast']);
