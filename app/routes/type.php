<?php


Route::post('company/type/add',  ['as'=>'type_save', 'uses'=>'TypeController@save' ]);
//So routes
Route::post('company/type/search/',  ['as'=>'type_search', 'uses'=>'TypeController@search' ]);
Route::get('company/type/search/',  ['as'=>'type_search', 'uses'=>'TypeController@search' ]);
