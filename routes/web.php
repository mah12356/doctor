<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::match(array('GET', 'POST'), '/signup', function(Request $request)
{
    if ($request->isMethod('post')){
        return redirect('/verify');
    }
    return view('signup');
});
Route::get('/verify', function () {
    return view('verify');
});
Route::get('/view_article', function () {
    return view('view_article');
});
Route::get('/reserve',function (){
    return view('reserve');
});
