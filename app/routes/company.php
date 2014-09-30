<?php



//companys
Route::get('company',  ['as'=>'company', 'uses'=>'CompanyController@index' ]);

Route::post('company',  ['as'=>'admin_company', 'uses'=>'CompanyController@search_company' ]);
Route::get('company/dashboard',  ['as'=>'dashboard', 'uses'=>'CompanyController@dashboard' ]);




//trademark routes
Route::post('company/trademark/search/',  ['as'=>'trademark_search', 'uses'=>'TrademarkController@search' ]);



//So routes
Route::post('company/so/search/',  ['as'=>'so_search', 'uses'=>'SoController@search' ]);



//Accesory routes
Route::post('company/accesory/search/',  ['as'=>'accesory_search', 'uses'=>'AccesoryController@search' ]);

//Accesories x pc routes
//Route::get('company/accesory/pc/add/',  ['as'=>'add_pc_accesory', 'uses'=>'AccesoryPcController@add_pc' ]);
Route::post('company/accesory/pc/add/',  ['as'=>'add_pc_accesory', 'uses'=>'AccesoryPcController@add_pc' ]);
Route::get('company/accesory/pc/show_all/',  ['as'=>'show_pc_accesory', 'uses'=>'AccesoryPcController@searh_all' ]);
Route::post('company/accesory/pc/delete/',  ['as'=>'delete_pc_accesory', 'uses'=>'AccesoryPcController@delete_ac' ]);
Route::post('company/accesory/pc/show_all/',  ['as'=>'show_pc_history', 'uses'=>'PcHistoryController@show_history' ]);
//Route::get('company/accesory/pc/show_all/',  ['as'=>'show_pc_history_all', 'uses'=>'PcHistoryController@show_history' ]);



//Maintenences Routes
Route::get('company/maintenances/new/',   ['as'=>'new_order', 'uses'=>'MaintenanceController@new_order' ]);
Route::post('company/maintenances/new/',  ['as'=>'new_order', 'uses'=>'MaintenanceController@save_order' ]);
Route::get('company/maintenances/list/',  ['as'=>'list_order', 'uses'=>'MaintenanceController@list_orders' ]);

Route::get('company/maintenances/pdf/',  ['as'=>'orden_pc', 'uses'=>'MaintenanceController@pdf_order' ]);
Route::get('company/maintenances/pdf_report/',  ['as'=>'reporte_pc', 'uses'=>'MaintenanceController@pdf_report' ]);



Route::get('company',  ['as'=>'admin', 'uses'=>'CompanyController@index' ]);


//Support route
Route::post('company/technical/search/',  ['as'=>'support_search', 'uses'=>'SuportController@search' ]);


//user company
Route::get('user',  ['as'=>'user_company', 'uses'=>'CompanyController@user' ]);



Route::get('company/users',  ['as'=>'user_list', 'uses'=>'CompanyController@user_list' ]);
Route::get('users/show',  ['as'=>'show_users', 'uses'=>'UserController@user_show' ]);
Route::post('users/save',  ['as'=>'save_user_company', 'uses'=>'UserController@save_user_company' ]);



