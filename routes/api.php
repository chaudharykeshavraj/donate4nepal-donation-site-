<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('cms/{constant}',[HomeController::class,'aboutApi'])->name('api.about');

Route::group(['prefix' => 'meetings'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('list', 'AllMeetingsApi')->name('api.meetings.list');
        Route::get('detail/{id}', 'MeetingsDetailApi')->name('api.meetings.detail');
    });
});



