<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');

Route::resource('quotes', 'QuoteController')->only([
  'store'
]);

Route::post('contact', function(){
    Mail::to("info@motoenvia.com")
        ->bcc(['al@rocketlaunchingideas.com'])
        ->send(new \App\Mail\NewContactEmail(request()->all()));

    return redirect()->route('home')->with([
        'contact' => 'success'
    ]);
})->name('contact');
