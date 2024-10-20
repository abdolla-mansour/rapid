<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ChangePasswordController;
use App\Models\CompanyProfile;

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/news','news')->name('news');
    Route::get('/news/{news}','news_show')->name('news.show');
    Route::get('project','project')->name('project');
    Route::get('project/{project}','project_show')->name('project.show');
    Route::get('service/{id}','service_show')->name('service.show');
    Route::get('gallery','gallery')->name('gallery');
    Route::get('branch','branch')->name('branch');
    Route::get('contactus','contactus')->name('contactus');
    Route::get('service/{id}','service_show')->name('service.show');
});

// Download Route
Route::get('download/', function()
{
    $filename = CompanyProfile::first()->profile_name;
    // Check if file exists in app/storage/file folder
    $file_path = public_path('storage/profile/' . $filename);

    if (file_exists($file_path))
    {
        return response()->download($file_path);
    }
    else
    {
        // Error
        exit('Requested file does not exist on our server!');
    }
});



Route::get('/dashboard', function () {
    return redirect()->route('news');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin',function(){
    return redirect()->route('admin.news');
});

Route::controller(NewsController::class)->prefix('admin/news')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/', 'index')->name('news');
    Route::post('store/', 'store')->name('news.store');
    Route::put('/update/{news}', 'update')->name('news.update');
    Route::get('/delete/{news}', 'destroy')->name('news.destroy');
});

Route::controller(ClientController::class)->prefix('admin/clients')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/', 'index')->name('clients');
    Route::post('store/', 'store')->name('clients.store');
    Route::put('/update/{client_id}', 'update')->name('clients.update');
    Route::get('/delete/{client_id}', 'destroy')->name('clients.destroy');
});

Route::controller(ProjectController::class)->prefix('admin/project')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/','index')->name('project');
    Route::post('store/', 'store')->name('project.store');
    Route::put('/update/{project}', 'update')->name('project.update');
    Route::get('/delete/{project}', 'destroy')->name('project.destroy');
});
Route::controller(BranchController::class)->prefix('admin/branch')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/','index')->name('branch');
    Route::post('store/', 'store')->name('branch.store');
    Route::put('/update/{branch}', 'update')->name('branch.update');
    Route::get('/delete/{branch}', 'destroy')->name('branch.destroy');
});
Route::controller(ServiceController::class)->prefix('admin/service')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/','index')->name('service');
    Route::post('store/', 'store')->name('service.store');
    Route::put('/update/{service}', 'update')->name('service.update');
    Route::get('/delete/{service}', 'destroy')->name('service.destroy');
});

Route::controller(SettingController::class)->prefix('admin/setting')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/','index')->name('setting');

    // update another setting
    Route::put('update/', 'another_update')->name('setting.update');

    // update about setting
    Route::put('update/about', 'about_update')->name('about.setting.update');

    // update rate setting
    Route::post('update/rate/', 'rate_create')->name('rate.setting.create');
    Route::put('update/rate/{id}', 'rate_update')->name('rate.setting.update');
    Route::delete('update/rate/delete/{id}', 'rate_delete')->name('rate.setting.delete');

    // update home setting
    Route::post('update/home/', 'home_create')->name('home.setting.create');
    Route::put('update/home/{id}', 'home_update')->name('home.setting.update');
    Route::delete('update/home/delete/{id}', 'home_delete')->name('home.setting.delete');

    // update profile setting
    Route::put('update/profile', 'profile_update')->name('profile.setting.update');
});

Route::controller(ContactController::class)->prefix('admin/contact')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/','index')->name('contact');
    Route::post('store/', 'store')->name('contact.store');
    Route::get('/delete/{contact}', 'destroy')->name('contact.destroy');
});


Route::post('change-password/{id}', ChangePasswordController::class)->middleware('auth')->name('admin.change-password');

