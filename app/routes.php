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



//img System route
//Route::post('img/system/loader',    ['as'=>'accesory_save', 'uses'=>'AccesoryController@save' ]);//images

