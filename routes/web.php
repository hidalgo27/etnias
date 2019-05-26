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
Route::get('/detail/{titulo}/{fecha}/{pasajeros}', [
    'uses' => 'DetailController@date',
    'as' => 'detail_date_path',
]);
Route::post('/book/', [
    'uses' => 'BookController@index',
    'as' => 'book_path',
]);
Route::post('/detail/update_price', [
    'uses' => 'DetailController@update_price',
    'as' => 'detail_update_price_path',
]);
Route::post('/payment', [
    'uses' => 'PaymentController@index',
    'as' => 'payment_path',
]);
Route::post('/payment/payment_check/{entorno}/{purchaseNumber}/{amount}/{titulo}/{fecha_viaje}/{personas}', [
    'uses' => 'PaymentController@payment_check',
    'as' => 'payment_check_path',
]);

Route::get('/comunidades', [
    'uses' => 'ComunidadController@index',
    'as' => 'comunidad_path',
]);
Route::get('/comunidades/{titulo}', [
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
//actividades
Route::post('/actividades/buscar/{titulo}', [
    'uses' => 'ActividadesController@buscar',
    'as' => 'client_buscar_path',
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

Route::post('/trabaja-con-nosotros/comunidad/post', [
    'uses' => 'JoinController@comunidad_post',
    'as' => 'join_comunidad_post_path',
]);

Route::post('/trabaja-con-nosotros/guia/post', [
    'uses' => 'JoinController@guia_post',
    'as' => 'join_guia_post_path',
]);
Route::post('/trabaja-con-nosotros/transportista/post', [
    'uses' => 'JoinController@transporte_post',
    'as' => 'join_trasporte_post_path',
]);
Route::post('/trabaja-con-nosotros/mostrar-comunidades', [
    'uses' => 'JoinController@mostrarComunidades',
    'as' => 'comunidad.mostrar.comunidades',
]);
Route::post('/trabaja-con-nosotros/mostrar-provincias', [
    'uses' => 'JoinController@mostrarProvincias',
    'as' => 'comunidad_mostrar_provincias_path',
]);
Route::post('/trabaja-con-nosotros/mostrar-distritos', [
    'uses' => 'JoinController@mostrarDistritos',
    'as' => 'comunidad_mostrar_distritos_path',
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
    'uses' => 'Client\HomeController@index',
    'as' => 'client_home_path',
]);
Route::get('/client/order/detail/{id}', [
    'uses' => 'Client\ReservaController@order',
    'as' => 'client_order_path',
]);
Route::post('/client/order/detail/', [
    'uses' => 'Client\ReservaController@cancelar',
    'as' => 'client_cancel_path',
]);

Route::get('/client/perfil', [
    'uses' => 'Client\ClientController@index',
    'as' => 'client_perfil_path',
]);
