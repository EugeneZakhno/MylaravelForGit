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
//    return view('pages.home');
//});
//Route::get('/', function (){ return view ('welcome');});

Route::get('/', 'Frontend@get_all_posts');

Route::resource('admin-panel', 'DashPosts');
// фасад это класс посредник, которвый предоставляет доступ другому классу

// GET и POST - самые расспростроннеые запросы
// PUT DELETE UPDATE
// запрос это то что следует после домена
// когда мы формирум запрос мы формируем запрос


//Route::get('/', function (){ return view ('welcome');});
// это маршрут, который обрабатывает маршрут во
//article/1
//Route::get('article/{id}',   );
//Route::get('page1', function(){
//    return 'HELLO World';
//});
//Route::get('page', 'IndexController@index');
