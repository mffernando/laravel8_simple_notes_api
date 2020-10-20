<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// test API -> /api/ping
Route::get('/ping', function (Request $request) {
    return ['pong' => true];
});

//Routes: CRUD

// list notes -> /api/notes
Route::get('/notes', [NoteController::class, 'all']);

// // list note -> /api/note/id
Route::get('/note/{id}', [NoteController::class, 'one']);

// // create note -> /api/note
Route::post('/note', [NoteController::class, 'new']);

// // update note -> /api/note/id
// Route::put('/note/{id}', '');

// // delete note -> /api/note/id
// Route::delete('/note/{id}', '');