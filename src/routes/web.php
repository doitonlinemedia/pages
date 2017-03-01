<?php

Route::group(['prefix' => config('admin.cms_path'), 'middleware' => ['admin.auth', 'admin.web']], function () {

});

Route::get('pages', 'PageController@index');