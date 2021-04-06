<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use EvolutionCMS\Main\Controllers\CallbackController;

Route::post('/callback', [CallbackController::class, 'form']);

// If you need to wrap the parser with middleware
// or need grouping, uncomment this line
// Route::fallbackToParser();
