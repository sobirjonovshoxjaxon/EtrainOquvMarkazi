<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

//PageController
Route::get('/',[PageController::class, 'index'])->name('index.page');
Route::get('/about',[PageController::class, 'about'])->name('about.page');
Route::get('/blog',[PageController::class, 'blog'])->name('blog.page');
Route::get('/contact',[PageController::class, 'contact'])->name('contact.page');
Route::get('/course/detail',[PageController::class, 'courseDetail'])->name('courseDetail.page');
Route::get('/course',[PageController::class, 'course'])->name('course.page');
Route::get('/elements',[PageController::class, 'elements'])->name('elements.page');
Route::get('/single/blog',[PageController::class, 'singleBlog'])->name('singleBlog.page');


//AdminController 
Route::get('/admin/index',[AdminController::class, 'index'])->name('admin.index');


//Laravel Breeze 
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
