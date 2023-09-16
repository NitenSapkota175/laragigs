<?php

use App\Http\Controllers\ListingController;
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


// single listing using route model binding
Route::get('/listings/{listing}',[ListingController::class , 'show']);