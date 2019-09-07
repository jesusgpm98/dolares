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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//categorias
Route::get('/categoria', 'HomeController@categorias')->name('categorias');
Route::get('/categorias/{moneda}', 'HomeController@moneda')->name('moneda');


//compradores
Route::get('/compradores', 'HomeController@compradores')->name('compradores');


//vendedores
Route::get('/home/comprador', 'CompradorController@index')->name('compradores.index');
Route::get('/home/comprador/ticket', 'CompradorController@tickets')->name('compradores.tickets');
Route::get('/home/post', 'CompradorController@postIndex')->name('compradores.post');
Route::get('/home/post/create', 'CompradorController@postCreate')->name('compradores.post.create');
Route::get('/home/post/solicitud', 'CompradorController@postSolicitud')->name('compradores.post.create');

//Route::get()->name();

//Route::get()->name('');

//noticias
Route::get('/noticias', 'HomeController@noticias')->name('noticias');
Route::get('/noticias/{id}', 'HomeController@noticiasShow')->name('noticias.show');

//chat
Route::get('/chats', 'ChatController@chat')->name('chat');
Route::get('/chats/{id}', 'ChatController@get')->name('chat.get');

//tickets
Route::get('/tickets', 'TicketController@index')->name('tickets');
Route::get('/tickets/{id}', 'TicketController@show')->name('tickets.show');
Route::post('/tickets/create', 'TicketController@store')->name('tickets.store');
Route::get('/tickets/create', 'TicketController@create')->name('tickets.create');

//configuracion
Route::get('/configuracion', 'HomeController@settings')->name('settings');
Route::post('/configuracion/password', 'UserController@updatePassword')->name('settings.password');
//Route::post('/');

//usuarios
Route::get('/user/{id}', 'UserController@info')->name('user.info');


//admin
Route::get('/admin', 'AdminUserController@index')->name('admin');

// admin User
Route::get('/admin/usuario', 'AdminUserController@indexUser')->name('admin.user');
Route::get('/admin/usuario/{id}', 'AdminUserController@edit')->name('admin.user.edit');
Route::post('/admin/usuario', 'AdminUserController@store')->name('admin.user.store');
Route::post('/admin/usuario/{id}', 'AdminUserController@update')->name('admin.user.update');

// admin Categoria
Route::get('/admin/categoria', 'AdminCategoriaController@index')->name('admin.categoria');
Route::get('/admin/categoria/create', 'AdminCategoriaController@create')->name('admin.categoria.create');
Route::get('/admin/categoria/{id}', 'AdminCategoriaController@edit')->name('admin.categoria.edit');
Route::post('/admin/categoria', 'AdminCategoriaController@store')->name('admin.categoria.store');
Route::post('/admin/categoria/{id}', 'AdminCategoriaController@update')->name('admin.categoria.update');

// admin noticia
Route::get('/admin/noticia', 'AdminNoticiaController@index')->name('admin.noticia');
Route::get('/admin/noticia/{id}', 'AdminNoticiaController@edit')->name('admin.noticia.edit');
Route::post('/admin/noticia', 'AdminNoticiaController@store')->name('admin.noticia.store');
Route::post('/admin/noticia/{id}', 'AdminNoticiaController@update')->name('admin.noticia.update');

// admin post
Route::get('/admin/post', 'AdminNoticiaController@index')->name('admin.noticia');
Route::get('/admin/post/{id}', 'AdminNoticiaController@edit')->name('admin.noticia.edit');
Route::post('/admin/post', 'AdminNoticiaController@store')->name('admin.noticia.store');
Route::post('/admin/post/{id}', 'AdminNoticiaController@update')->name('admin.noticia.update');
