<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('form-maker-asset/{path}', 'AssetController@asPublic');
});
