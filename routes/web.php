<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('whatwedo',[HomeController::class,'whatwedo'])->name('whatwedo');
Route::get('getinvolved',[HomeController::class,'getinvolved'])->name('getinvolved');
Route::get('shop',[HomeController::class,'shop'])->name('shop');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('contact-action',[HomeController::class,'ContactAction'])->name('contact.action');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin',[AdminController::class,'AdminLogin'])->name('admin.login');
Route::middleware('auth')->middleware(['auth', 'verified'])->group(function () {

    Route::get('dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'cms'], function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get('list', 'AllCms')->name('admin.cms.list');
                Route::get('edit/{id}', 'EditCms')->name('admin.cms.edit');
                Route::put('update', 'UpdateCms')->name('admin.cms.update');
            });
        });

        Route::group(['prefix' => 'category'], function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get('list', 'AllCategory')->name('admin.category.list');
                Route::get('add', 'AddCategory')->name('admin.category.add');
                Route::post('store', 'StoreCategory')->name('admin.category.store');
                Route::get('edit/{id}', 'EditCategory')->name('admin.category.edit');
                Route::put('update', 'UpdateCategory')->name('admin.category.update');
                Route::get('delete/{id}', 'DeleteCategory')->name('admin.category.delete');
            });
        });

        Route::group(['prefix' => 'meetings'], function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get('list', 'AllMeetings')->name('admin.meetings.list');
                Route::get('add', 'AddMeetings')->name('admin.meetings.add');
                Route::post('store', 'StoreMeetings')->name('admin.meetings.store');
                Route::get('edit/{id}', 'EditMeetings')->name('admin.meetings.edit');
                Route::put('update', 'UpdateMeetings')->name('admin.meetings.update');
                Route::get('delete/{id}', 'DeleteMeetings')->name('admin.meetings.delete');
            });
        });

        Route::group(['prefix' => 'courses'], function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get('list', 'AllCourses')->name('admin.courses.list');
                Route::get('add', 'AddCourses')->name('admin.courses.add');
                Route::post('store', 'StoreCourses')->name('admin.courses.store');
                Route::get('edit/{id}', 'EditCourses')->name('admin.courses.edit');
                Route::put('update', 'UpdateCourses')->name('admin.courses.update');
                Route::get('delete/{id}', 'DeleteCourses')->name('admin.courses.delete');
            });
        });

        Route::group(['prefix' => 'contact'], function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get('list', 'AllContact')->name('admin.contact.list');
                Route::get('delete/{id}', 'DeleteContact')->name('admin.contact.delete');
            });
        });


    });


});
require __DIR__.'/auth.php';
