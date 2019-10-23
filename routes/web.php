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
Route::get('/prueba',function(){  //Esta funcion sirve para hacer una ruta, en este caso retornar un mensaje
	return view('child', ['name' => 'Larry catula']); 
});

Route::get('/blog',function(){
	return view('blog', ['name' => 'carlos', 'surname' => 'Fernandez']);
});

Route::get('/hijo2',function(){
	return view('hijo2', ['name' => 'carlos', 'surname' => 'Fernandez']);
});

Route::get('/posts/{id}',function($id){ //aqui se indica que la direccion se agregara el id de un registro
	return App\Post::find($id); //en find se puede cambiar a all para traer todos los registros
});

Route::get('/posts', 'PostController@index'); //

Route::get('/home','HomeController@index')->name('home');
Auth::routes();

/*
*** En el return de '/prueba' se puede poner un msj entre '' (comillas) o puede ponerse un view para poner una vista.
la variable llamada surname se uso para poner otro nombre
*/