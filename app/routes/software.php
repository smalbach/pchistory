<?php


Route::get('software/add',  ['as'=>'software_add', 'uses'=>'SoftwareController@add' ]);
Route::post('software/add',  ['as'=>'software_save', 'uses'=>'SoftwareController@save' ]);


Route::get('software/list',  ['as'=>'software_list', 'uses'=>'SoftwareController@soft_list' ]);
Route::post('software/list',  ['as'=>'list_ajax', 'uses'=>'SoftwareController@soft_list_ajax' ]);

