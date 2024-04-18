<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendEmailTest', function () {
    // sent a sample email to ahmedmunib@gmail.com
    //subject test laravel11 and body 'hello ahmed'

    $details = [
        'title' => 'Mail from Ahmed Munib',
        'body' => 'This is for testing email using smtp'
    ];

    Mail::to('ahmedmunib85@gmail.com')->send(new \App\Mail\TestMail($details));
});
