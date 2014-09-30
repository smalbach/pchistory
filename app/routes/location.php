<?php



Route::post('company/location/add',  ['as'=>'location_save', 'uses'=>'LocationController@save' ]);
//So routes
Route::post('company/location/search/',  ['as'=>'location_search', 'uses'=>'LocationController@search' ]);
Route::get('company/location/search/',  ['as'=>'location_search', 'uses'=>'LocationController@search' ]);
