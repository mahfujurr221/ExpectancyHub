<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

////////////////////////////// Frontend Route ///////////////////////////////////
Route::get('/', [HomeController::class, 'front_index'])->name('website');

Route::prefix('home')->group(function () {

    //success stories
    Route::get('/success-stories', [HomeController::class, 'successStories'])->name('front.success-stories');

    Route::get('/about', [HomeController::class, 'about'])->name('front.about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('front.contact');
    Route::post('/contact-us', [HomeController::class, 'contactStore'])->name('front.contact-us');


    //branch
    Route::get('/branches', [HomeController::class, 'branches'])->name('front.branch');
    
    //register
    Route::get('/register', [HomeController::class, 'register'])->name('front.register');
    Route::post('/register/store', [HomeController::class, 'registerStore'])->name('front.register.store');
});

