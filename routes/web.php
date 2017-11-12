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

Route::get('/', 'FrontController@index')->name('home');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/news', 'FrontController@news')->name('news');
Route::get('/board_members', 'FrontController@board_members')->name('board_members');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/article', 'FrontController@article')->name('article');

Auth::routes();

// ** admin group
Route::group([
  'prefix' => 'admin',
  'middleware' => 'auth'
  ], function() {

    Route::get('/', 'BackendController@index')->name('admin');

    Route::resources([
      'banners' => 'BannersController',
      'board' => 'BoardMembersController',
      'categories' => 'CategoriesController',
      'pages' => 'PagesController',
      'posts' => 'PostsController',
      'posttag' => 'PosttagController',
      'quotes' => 'QuotesController',
      'settings' => 'SettingsController',
      'tags' => 'TagsController'
    ]);

});
