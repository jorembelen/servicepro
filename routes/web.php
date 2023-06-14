<?php

use App\Http\Controllers\PagesController;
use App\Http\Livewire\PagesComponent;
use Illuminate\Support\Facades\Route;



Auth::routes();


Route::get('/', PagesComponent::class);
Route::get('/projects', [PagesController::class, 'projects'])->name('projects');
Route::get('/single-project', [PagesController::class, 'sProject'])->name('sProject');
Route::get('/add-project', [PagesController::class, 'addProject'])->name('addProject');
Route::get('/jobs', [PagesController::class, 'jobs'])->name('jobs');
Route::get('/job', [PagesController::class, 'job'])->name('job');
Route::get('/add-job', [PagesController::class, 'addJob'])->name('addJob');
Route::get('/companies', [PagesController::class, 'companies'])->name('companies');
Route::get('/company', [PagesController::class, 'company'])->name('company');
Route::get('/profiles', [PagesController::class, 'profiles'])->name('profiles');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');
Route::get('/messages', [PagesController::class, 'messages'])->name('messages');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
