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
    return view(
      'start',
      [
        'title' => 'Купить натуральный мед в Зеленограде | honeypro.ru',
        'lastdate' => date('Y'),
      ]
    );
});

Route::post('/newsletter',
[
  'uses'=>'NewsletterController@put',
  'as'=>'newsletter',
]);

Route::post('/second-order',
[
  'uses'=>'SecondOrder@sending',
  'as'=>'second-order',
]);

Route::post('/main-order',
[
  'uses'=>'MainOrder@sending',
  'as'=>'main-order',
]);
