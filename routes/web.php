<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route to display a list of pages (index method)
Route::get('/', [PageController::class, 'index']);

// Route to display a page by its slug (show method)
Route::get('/{slug}', [PageController::class, 'show'])->where('slug', '.*');



