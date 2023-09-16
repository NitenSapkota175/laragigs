<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
use Symfony\Component\CssSelector\Node\FunctionNode;
Route::get('/', [ListingController::class , 'index']);

// single listing using route model binding
Route::get('listings/{listing}',[ListingController::class , 'show']);
