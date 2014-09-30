<?php

Route::post('company/copy/search/',  ['as'=>'copy_search', 'uses'=>'SecuritycopyController@search' ]);

Route::post('company/copy/save',  ['as'=>'copy_save', 'uses'=>'SecuritycopyController@save' ]);