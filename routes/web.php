<?php

use App\Http\Controllers\PrivacyArController;
use App\Http\Controllers\PrivacyEnController;
use App\Http\Controllers\TermsEnController;
use App\Http\Controllers\TermsArController;
use App\Models\PrivacyPage;
use App\Models\TermsPage;
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

Route::get('lang/{lang}', function($lang){
    if(in_array($lang, ['ar','en']))
    {
        session()->put('lang', $lang);
    } else {
        session()->put('lang', 'en');
    }
    return back();
});

Route::group(['middleware'=> 'Lang'], function(){
    Route::get('/', function () {
        return view('frontend.layouts.home');
    });
    
    Route::get('/delete_account', function () {
        return view('frontend.layouts.delete_account');
    });
    
    Route::post('/delete_account', function () {
        return response()->json(['message' => 'Form submitted successfully']);
    });
    
    Route::get('privacy', function(){
        $q = PrivacyPage::get()->first();
        $content = '';
        if(app()->getLocale() == 'en') {
            $content = $q->content_en;
        } else {
            $content = $q->content_ar;
        }
        return view('frontend.layouts.privacy', compact('content'));
    });
    
    Route::get('terms', function(){
        $q = TermsPage::get()->first();
        $content = '';
        if(app()->getLocale() == 'en') {
            $content = $q->content_en;
        } else {
            $content = $q->content_ar;
        }
        return view('frontend.layouts.terms', compact('content'));
    });
});



Route::get('/dashboard', function () {
    return view('backend.layouts.home');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix'=> 'admin'], function(){
    Route::resource('terms', TermsEnController::class);
    Route::resource('terms_ar', TermsArController::class);
    Route::resource('privacy', PrivacyEnController::class);
    Route::resource('privacy_ar', PrivacyArController::class);
});

require __DIR__.'/auth.php';
