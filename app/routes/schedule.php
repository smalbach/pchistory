<?php

Route::post('company/schedule/search/',  ['as'=>'schedule_search', 'uses'=>'ScheduleController@search' ]);

Route::post('company/schedule/save',  ['as'=>'schedule_save', 'uses'=>'ScheduleController@save' ]);