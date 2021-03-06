<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\RaidController;

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

Route::get('members', [MemberController::class, 'index']);
Route::get('player/{id}',[MemberController::class, 'findPlayer']);
Route::get('raids',[RaidController::class, 'index']);
Route::get('raids/specific/{id}',[RaidController::class, 'getRaidInfo']);
Route::get('addPlayer/{playerName}',[RaidController::class, 'addPlayer']);
Route::get('raids/total',[RaidController::class, 'totalRaids']);

?>