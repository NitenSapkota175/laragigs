<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
use Symfony\Component\CssSelector\Node\FunctionNode;
// All Listings
Route::get('/', [ListingController::class , 'index']);

// Show Cretae Form
Route::get('/listings/create',[ListingController::class , 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings',[ListingController::class , 'store'])->middleware('auth');

// Show edit form 
Route::get('/listings/{listing}/edit',[ListingController::class ,'edit'])->middleware('auth');

// update listing
Route::put('/listings/{listing}', [ListingController::class,'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->middleware('auth');


// Manage Listings
Route::get('/listings/manage',[ListingController::class,'manage'])->middleware('auth');

// single listing using route model binding
Route::get('/listings/{listing}',[ListingController::class , 'show']);

// Show Register/Create Form

Route::get('/register',[UserController::class,'create'])->middleware('guest');

// Create New Users
Route::post('/users',[UserController::class,'store']);

// Log User out
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

// Show Login Form 
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate',[UserController::class,'authenticate']);

// Manage Listings
Route::get('/listings/manage',[ListingController::class,'manage']);