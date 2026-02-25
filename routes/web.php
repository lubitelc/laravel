<?php

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

/*Route::get('/test', function () {
    return 'Сообщение';
});

Route::get('/dir/test', function () {
    return 'Сообщение';
});
Route::get('/user/{name}', function ($name) {
    return 'Hello '. $name;
});
Route::get('/user/{surname}/{name}', function ($surname,$name) {
    return 'Hello '.$surname.' '. $name;
});
Route::get('/city/{city?}', function ($city='Омск') {
    return 'Ваш город '.$city;
});
Route::get('/user/{id}', function ($id) {
    return $id;
});
Route::get('/user/{id}/{name}', function ($id,$name) {
    return 'пост ' . $id;
})->where('name','[a-z]');
Route::get('/post/{date}', function ($date) {
    return 'дата ' . $date;
})->where('date','[0-9]{4}-[0-9]{2}-[0-9]{2}');

Route::get('/{year}/{month}/{day}', function ($year,$month,$day) {
    return 'Дата: '.$year.'год' . $month . 'месяц'  . $day. 'день';
})->where(['year','[0-9]{4}'])
->where(['month','[0-9]{2}'])
->where(['day','[0-9]{2}']);

Route::get('/users/{order}', function ($order) {
    return 'сорт ' . $order;
})->where('order','[a-z]');

Route::get('/city/{name}', function ($name) {
	return 'hello ' . $name;
})->whereAlpha('name');

Route::get('/users/{order}', function ($order) {
	return 'Сортировка ' . $order;
})->whereIn('order',['name','surname','age']);

13
Route::get('/user/all', function () {
		return 'all';
	});
Route::get('/user/{id}', function ($id) {
		return $id;
	});
14
Route::get('/user/all', function () {
	return 'all';
});
Route::get('/user/', function () {
	return 'user';
});
Route::get('/user/{id?}', function ($id = null) {
	return $id;
});
15
Route::get('/user/{id}', function ($id) {
	return 'id';
})->where('id', '[0-9]+');
Route::get('/user/{id}', function ($id) {
	return 'id';
})->where('slug', '[a-z0-9_-]+');
16
Route::prefix('admins')->group(function () {
Route::get('/admin/users', function ($id) {
		return 'all';
	});
Route::get('/admin/user/{id}', function ($id) {
	return $id;
});
});
17
Route::get('/user/profile', function () {
	return 'profile';
})->name('profile');
*/

