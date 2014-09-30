<?php


Route::post('company/activetype/add',  ['as'=>'active_type_save', 'uses'=>'ActivetypeController@save' ]);
//So routes
Route::post('company/activetype/search/',  ['as'=>'active_type_search', 'uses'=>'ActivetypeController@search' ]);
Route::get('company/activetype/search/',  ['as'=>'active_type_search', 'uses'=>'ActivetypeController@search' ]);
