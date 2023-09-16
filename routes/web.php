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
Route::get('/listings/create',[ListingController::class , 'create']);

// Store Listing Data
Route::post('/listings',[ListingController::class , 'store']);

// Show edit form 
Route::get('/listings/{listing}/edit',[ListingController::class ,'edit']);

// update listing
Route::put('/listings/{listing}', [ListingController::class,'update']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class,'destroy']);


// single listing using route model binding
Route::get('/listings/{listing}',[ListingController::class , 'show']);


// Show Register/Create Form

Route::get('/register',[UserController::class,'create']);

// Create New Users
Route::post('/users',[UserController::class,'store']);

// Log User out
Route::post('/logout',[UserController::class,'logout']);