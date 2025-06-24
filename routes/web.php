<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\HeadlineController;
use App\Http\Controllers\Backend\BlogVideoController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\SuccessStoryController;
use App\Http\Controllers\Backend\OwnerController;
use App\Http\Controllers\CountryController;

////////////////////////////// Backend Route ///////////////////////////////////

Route::middleware('auth')->prefix('back')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    //owner
    Route::get('owner', [OwnerController::class, 'index'])->name('owner.index');
    //owner update
    Route::post('owner', [OwnerController::class, 'update'])->name('owner.update');

    //success story
    Route::resource('success-story', SuccessStoryController::class)->except(['show']);

    //headline
    Route::resource('headline', HeadlineController::class)->except(['show']);

    //Branch
    Route::resource('branches', BranchController::class)->except(['show']);
    //banner
    Route::resource('banners', BannerController::class)->except(['show']);

    //videos
    Route::resource('blog-videos', BlogVideoController::class)->except(['show']);
    //about
    Route::resource('about-us', AboutController::class)->except(['show']);

    //payments
    Route::resource('payments', PaymentController::class)->except(['show']);

    //countries
    Route::resource('countries', CountryController::class)->except(['show']);


    ///////////////////////////// Roles And Permission Route ///////////////////////////////////
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class)->except(['create', 'show', 'edit']);
    Route::get('roles/permissions/{id}', [RoleController::class, 'addPermissionToRole'])->name('role.permissions');
    Route::put('roles/permissions/{id}', [RoleController::class, 'addPermissionToRoleUpdate'])->name('role-permissions.update');

    ///////////////////////////// User and Profile Route ///////////////////////////////////
    Route::resource('users', UserController::class)->except(['show']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    ///////////////////////////// Settings Route ///////////////////////////////////
    Route::resource('settings', SettingController::class)->except(['show', 'edit', 'create', 'destroy']);
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "All caches are cleared";
});


require __DIR__ . '/front.php';
require __DIR__ . '/auth.php';
