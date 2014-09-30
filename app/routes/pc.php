<?php



//companies PC
Route::get('company/pc/list',  ['as'=>'pc_list', 'uses'=>'PcController@pc_list' ]);
Route::post('company/pc/edit',  ['as'=>'pc_edit', 'uses'=>'PcController@pc_edit' ]);
Route::get('company/pc/add',  ['as'=>'pc_add', 'uses'=>'PcController@add' ]);
Route::post('company/pc/save',  ['as'=>'pc_save', 'uses'=>'PcController@pc_save' ]);
Route::get('company/pc/hist',  ['as'=>'pc_hist', 'uses'=>'PcController@pc_list' ]);
Route::get('company/pc/detail/',  ['as'=>'pc_detail', 'uses'=>'PcController@pc_detail' ]);
Route::post('company/pc/update',  ['as'=>'pc_update', 'uses'=>'PcController@pc_update' ]);
Route::get('company/pc/list_maintenances',  ['as'=>'pc_maintenances', 'uses'=>'PcController@pc_list_maintenences' ]);

Route::get('company/pc/formato_pc',  ['as'=>'formato_pc', 'uses'=>'PcController@formato_pc' ]);
Route::get('company/pc/formato_pc2',  ['as'=>'formato_pc2', 'uses'=>'PcController@formato_pc2' ]);

Route::post('company/pc/list_ajax',  ['as'=>'list_pc_ajax', 'uses'=>'PcController@pc_list_ajax' ]);
