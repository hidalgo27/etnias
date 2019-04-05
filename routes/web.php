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
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', [
    'uses' => 'HomepageController@index',
    'as' => 'home_path',
]);
Route::get('/detail/{titulo}', [
    'uses' => 'DetailController@index',
    'as' => 'detail_path',
]);
Route::post('/book/', [
    'uses' => 'BookController@index',
    'as' => 'book_path',
]);
Route::get('/payment', [
    'uses' => 'PaymentController@index',
    'as' => 'payment_path',
]);
Route::get('/comunidades', [
    'uses' => 'ComunidadController@index',
    'as' => 'comunidad_path',
]);
Route::get('/comunidades/show', [
    'uses' => 'ComunidadController@show',
    'as' => 'comunidad_show_path',
]);

Route::get('/actividades', [
    'uses' => 'ActividadesController@index',
    'as' => 'actividades_path',
]);
Route::get('/actividades/categorias/{category}', [
    'uses' => 'ActividadesController@show',
    'as' => 'actividades_category_show_path',
]);

Route::get('/paquetes', [
    'uses' => 'PackageController@index',
    'as' => 'packages_path',
]);
Route::get('/trabaja-con-nosotros', [
    'uses' => 'JoinController@index',
    'as' => 'join_path',
]);
Route::get('/trabaja-con-nosotros/comunidad', [
    'uses' => 'JoinController@comunidad',
    'as' => 'join_comunidad_path',
]);
Route::get('/trabaja-con-nosotros/transportista', [
    'uses' => 'JoinController@transportista',
    'as' => 'join_transportista_path',
]);
Route::get('/trabaja-con-nosotros/guia', [
    'uses' => 'JoinController@guia',
    'as' => 'join_guia_path',
]);

Route::get('/nosotros', [
    'uses' => 'AboutController@index',
    'as' => 'about_path',
]);
Route::get('/blog', [
    'uses' => 'BlogController@index',
    'as' => 'blog_path',
]);

Route::get('/contacto', [
    'uses' => 'ContactController@index',
    'as' => 'contact_path',
]);


//client
Route::get('/client/home', [
    'uses' => 'client\HomeController@index',
    'as' => 'client_home_path',
]);
Route::get('/client/order/detail/{id}', [
    'uses' => 'client\ReservaController@order',
    'as' => 'client_order_path',
]);

Route::get('/client/perfil', [
    'uses' => 'client\ClientController@index',
    'as' => 'client_perfil_path',
]);
