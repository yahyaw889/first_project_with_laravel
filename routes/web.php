<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;

Route::view('/' , 'home');
Route::view('/content' , 'content');

Route::controller(JobController::class)->group( function (){
    Route::get('/jobs','index')->name('jobs');
    Route::get('/jobs/create' ,'create')->middleware('auth');
    Route::post('/jobs' ,'store');
    Route::get('/jobs/{job}', 'show')->name('jobs.show');
    Route::get('/jobs/{job}/edit','edit')->middleware('auth')->can('edit' , 'job');
    Route::put('/jobs/{job}','update')->middleware('auth')->can('edit' , 'job');
    Route::delete('/jobs/{job}','destory')->middleware('auth')->can('edit' , 'job');

});

Route::get('/register' , [RegisterUserController::class , 'create'])->name('register');
Route::post('/register' , [RegisterUserController::class , 'store']);


Route::get('/login' ,   [LoginUserController::class , 'create'])->name('login');
Route::post('/login' ,  [LoginUserController::class , 'store']);
Route::post('/logout' , [LoginUserController::class , 'destory'])->name('logout');
// Route::resource('jobs' , JobController::class);

