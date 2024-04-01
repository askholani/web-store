<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home\HomeUserComponent;
use App\Livewire\Products\ProductsComponent;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeUserComponent::class);
Route::get('/catalog', ProductsComponent::class);
