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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/MySave', "MySaveController@index"
);

Route::get('/post', "PostController@index"
);

Route::get('/tags', "PostController@tags"
);

Route::get('/post_create', "PostController@create"
);

Route::get('/post_update', "PostController@update"
);

Route::get('/post_delete', "PostController@delete"
);

Route::get('/post_ofcreate', "PostController@firstOfCreate"
);

Route::get('/ground', "GroundController@index"
);

Route::get('/groundpayment', "GroundController@payment"
);

Route::get('/groundinform', "GroundController@inform"
);

