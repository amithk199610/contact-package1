<?php

use Illuminate\Http\Request;
use Amithk199610\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::post('contact',[ContactController::class,'save'])->name('contact-post');
