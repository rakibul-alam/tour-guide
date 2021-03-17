<?php

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

//Route::get('/', function () {
//    return view('font-panel.view-pages.index');
//});


Route::get('/','PageLinkingController@index');



//Route::get('/about', function () {
//    return view('font-panel.view-pages.about');
//});


Route::get('/about','PageLinkingController@aboutPage');
Route::get('/packages','PageLinkingController@packagesPage');
Route::get('/hotels','PageLinkingController@hotelsPage');
Route::get('/blogs','PageLinkingController@blogsPage');
Route::get('/contact','PageLinkingController@contactPage');



/*MESSAGE DB OPERATION*/
Route::get('/message',[
    'uses'          => 'MessageController@message',
    'as'            => 'message'
]);


Route::post('/new-message',[
    'uses'          => 'MessageController@saveMessage',
    'as'            => 'new-message'
]);



//
//Route::get('/packages', function () {
//    return view('font-panel.view-pages.packages');
//});
//
//Route::get('/hotels', function () {
//    return view('font-panel.view-pages.hotels');
//});
//
//Route::get('/blogs', function () {
//    return view('font-panel.view-pages.blogs');
//});
//
//Route::get('/contact', function () {
//    return view('font-panel.view-pages.contact');
//});