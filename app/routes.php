<?php





//companys
Route::get('company',  ['as'=>'company', 'uses'=>'CompanyController@index' ]);
Route::get('/',  ['as'=>'home', 'uses'=>'CompanyController@index' ]);
Route::post('company',  ['as'=>'admin_company', 'uses'=>'CompanyController@search_company' ]);
Route::get('company/dashboard',  ['as'=>'dashboard', 'uses'=>'CompanyController@dashboard' ]);



//companies PC
Route::get('company/pc/list',  ['as'=>'pc_list', 'uses'=>'PcController@pc_list' ]);
Route::get('company/pc/add',  ['as'=>'pc_add', 'uses'=>'PcController@add' ]);
Route::post('company/pc/add',  ['as'=>'pc_save', 'uses'=>'PcController@pc_save' ]);
Route::get('company/pc/hist',  ['as'=>'pc_hist', 'uses'=>'PcController@pc_list' ]);
Route::get('company/pc/detail/',  ['as'=>'pc_detail', 'uses'=>'PcController@pc_detail' ]);




//trademark routes
Route::post('company/trademark/search/',  ['as'=>'trademark_search', 'uses'=>'TrademarkController@search' ]);



//So routes
Route::post('company/so/search/',  ['as'=>'so_search', 'uses'=>'SoController@search' ]);



//Accesory routes
Route::post('company/accesory/search/',  ['as'=>'accesory_search', 'uses'=>'AccesoryController@search' ]);

//Accesories x pc routes
//Route::get('company/accesory/pc/add/',  ['as'=>'add_pc_accesory', 'uses'=>'AccesoryPcController@add_pc' ]);
Route::post('company/accesory/pc/add/',  ['as'=>'add_pc_accesory', 'uses'=>'AccesoryPcController@add_pc' ]);
Route::post('company/accesory/pc/show_all/',  ['as'=>'show_pc_accesory', 'uses'=>'AccesoryPcController@searh_all' ]);
Route::post('company/accesory/pc/delete/',  ['as'=>'delete_pc_accesory', 'uses'=>'AccesoryPcController@delete_ac' ]);



//Maintenences Routes
Route::get('company/maintenances/new/',   ['as'=>'new_order', 'uses'=>'MaintenanceController@new_order' ]);
Route::post('company/maintenances/new/',  ['as'=>'new_order', 'uses'=>'MaintenanceController@save_order' ]);
Route::get('company/maintenances/list/',  ['as'=>'list_order', 'uses'=>'MaintenanceController@list_orders' ]);
Route::post('company/maintenances/do/',    ['as'=>'do_order', 'uses'=>'MaintenanceController@do_orders' ]);





//Support route
Route::post('company/support/search/',  ['as'=>'support_search', 'uses'=>'SuportController@search' ]);



//Report route
Route::post('company/report/save',    ['as'=>'save_order_do', 'uses'=>'ReportController@save_report' ]);