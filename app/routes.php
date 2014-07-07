<?php



require (__DIR__ . '/routes/company.php');



//Home
Route::get('/',  ['as'=>'home', 'uses'=>'HomeController@index' ]);

//authController
Route::post('login',  ['as'=>'login', 'uses'=>'AuthController@login' ]);
Route::get('logout',  ['as'=>'signout', 'uses'=>'AuthController@logout' ]);


//suppor routes
Route::get('technical/',  ['as'=>'technical', 'uses'=>'SuportController@technical' ]);
Route::get('technical/list',  ['as'=>'technical_list', 'uses'=>'SuportController@technical' ]);
Route::post('technical/maintenances/do/',    ['as'=>'do_order', 'uses'=>'MaintenanceController@do_orders' ]);
//Report route
Route::post('technical/report/save',    ['as'=>'save_order_do', 'uses'=>'ReportController@save_report' ]);





Route::post('trademark/save',    ['as'=>'trademark_save', 'uses'=>'TrademarkController@save' ]);

Route::post('so/save',    ['as'=>'so_save', 'uses'=>'SoController@save' ]);

Route::post('accesory/save',    ['as'=>'accesory_save', 'uses'=>'AccesoryController@save' ]);



//Software

Route::post('software/save',    ['as'=>'software_save', 'uses'=>'SoftwareController@save' ]);
Route::post('company/software/search/',  ['as'=>'software_search', 'uses'=>'SoftwareController@search' ]);
Route::post('company/software/pc/add/',  ['as'=>'add_pc_software', 'uses'=>'SoftwarePcController@add_pc' ]);
Route::get('company/software/pc/show_all/',  ['as'=>'show_pc_software', 'uses'=>'SoftwarePcController@searh_all' ]);
Route::post('company/software/pc/delete/',  ['as'=>'delete_pc_software', 'uses'=>'SoftwarePcController@delete_ac' ]);



//Device

Route::post('device/save',    ['as'=>'device_save', 'uses'=>'DeviceController@save' ]);
Route::post('company/device/search/',  ['as'=>'device_search', 'uses'=>'DeviceController@search' ]);
Route::post('company/device/pc/add/',  ['as'=>'add_pc_device', 'uses'=>'DevicePcController@add_pc' ]);
Route::get('company/device/pc/show_all/',  ['as'=>'show_pc_device', 'uses'=>'DevicePcController@searh_all' ]);
Route::post('company/device/pc/delete/',  ['as'=>'delete_pc_device', 'uses'=>'DevicePcController@delete_ac' ]);

//Route::get('company/software/search/',  ['as'=>'software_search', 'uses'=>'SoftwareController@search' ]);
//img System route
//Route::post('img/system/loader',    ['as'=>'accesory_save', 'uses'=>'AccesoryController@save' ]);//images


