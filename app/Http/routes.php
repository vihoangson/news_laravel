<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', "HomepageController@index" );

Route::get( '/import_vnexpress', "ArticlesController@import_vnexpress" );


Route::group( [ 'middleware' => [ 'auth' ] ], function () {

} );

Route::get( "/logout", function () {
    Auth::logout();

    return redirect( '/news' );
} );


Route::get( '/resume', function () {
    return view( "widgets.ele_resume" );
} );
Route::get( 'blog-single-{id}.html', "HomepageController@show" );
Route::get( '/article_detail/{id}', 'HomepageController@article_detail' );

Route::post( '/ajax/save', "ajax\CommentController@save" );
Route::get( '/ajax/save', "ajax\CommentController@save" );

Route::post( 'contact', "HomepageController@send_mail" );
Route::get( '/change_lang/{lang}', "admin\BlogsManagerController@change_lang" );

Route::get( '/admin', "admin\DashboardController@index" );
Route::get( '/admin/blogs/', "admin\BlogsManagerController@index" );
Route::get( '/admin/blogs/create', "admin\BlogsManagerController@create" );
Route::post( '/admin/blogs/create', "admin\BlogsManagerController@create" );

Route::get( '/admin/blogs/{id}/edit', 'admin\BlogsManagerController@edit' );
Route::put( '/admin/blogs/{id}/edit', 'admin\BlogsManagerController@update' );
Route::get( '/admin/blogs/{id}/view', 'admin\BlogsManagerController@show' );
Route::get( '/admin/blogs/delete/{id}', 'admin\BlogsManagerController@destroy' );
Route::post( '/admin/blogs/post_newblog', "admin\BlogsManagerController@store" );
Route::post( '/admin/blogs/post_popup_img', 'admin\BlogsManagerController@post_popup_img' );
Route::get( '/admin/blogs/popup_img', 'admin\BlogsManagerController@popup_img' );

Route::get( '/article/list', 'ArticlesController@index' );
Route::get( '/article/', 'ArticlesController@homepage' );
Route::get( '/article/page/detail/{id}', 'ArticlesController@detail' );
Route::get( '/article/detail/{id}', 'ArticlesController@detail_ajax' );
Route::get( '/article/article-endless', 'ArticlesController@article_endless' );
Route::get( '/article/category/{cid}', 'ArticlesController@category_article' );

Route::get( '/article/admin', 'admin\ArticlesController@index' );


Route::get( 'edit_db', "ArticlesController@edit_db" );
Route::get( 'update_main_img', "ArticlesController@update_main_img" );

Route::get( 'test_case', "HomepageController@test_case" );

Route::get( '/bootstrapcdn', function () {
    return view( "bootstrapcdn" );
} );


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group( [ 'middleware' => [ 'web' ] ], function () {
    Route::controllers( [
        'auth'     => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ] );
} );

Route::controller( "news", "NewsController" );
Route::controller( "doajax", "ajax\DoajaxController" );

