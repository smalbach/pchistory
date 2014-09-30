<?php




Route::post('company/owner/add',  ['as'=>'owner_save', 'uses'=>'UserController@save_user_company' ]);
//So routes
Route::post('company/owner/search/',  ['as'=>'owner_search', 'uses'=>'UserController@search' ]);
Route::get('company/owner/search/',  ['as'=>'owner_search', 'uses'=>'UserController@search' ]);
