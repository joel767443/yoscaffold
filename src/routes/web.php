<?php

Route::group(["namespace" => "Yoweli\YoScaffold\Http\Controllers"], function (){
    Route::get('test', 'YoScaffoldController@index');
});

