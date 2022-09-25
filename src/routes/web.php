<?php



use Illuminate\Support\Facades\Route;
use Moezmissaoui\Quotes\Http\Controllers\QuoteController;

Route::get('quote/{mode?}', QuoteController::class);
