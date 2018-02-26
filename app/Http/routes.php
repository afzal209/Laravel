<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//  	

Route::get('/',function(){


return view('layouts.loginform');


});

// Route::get('welcome', function () {
    // return view('layouts.homee');
// });

 Route::get('ins', 'AdminAuth\AuthController@showlogin');
  Route::post('ins','AdminAuth\AuthController@login');

Route::group(['middleware' => ['admin']],function(){
	Route::get('loginform','Admin\AdminController@index');
	Route::get('log','AdminAuth\AuthController@logout');
});

Route::get('ho', function(){


return view('layouts.forhome');
});

//Route::get('clst', function(){


//return view('layouts.classstudent');
//});

Route::get('mon', function(){

return view('layouts.monthlyfee');

});

Route::get('ad', function(){

return view('layouts.admissionfee');
});

// Route::get('securit', function(){

// return view('layouts.paid_fee');

// });

Route::get('bil', function(){

return view('layouts.bills');

});

Route::get('logss', function(){


return view('layouts.studentlogs');


});

Route::get('clst', 'classcontroller@index');

Route::get('phpform', function(){

return view('layouts.phpform');

});
Route::get('clst',function(){
	return view('layouts.classstudent');
});

Route::get('javaform', function(){

return view('layouts.javaform');

});

Route::get('addclass',function(){
	return view('layouts.addclass');
});

Route::get('add_class', function(){


return view('layouts.classstudent');
});


Route::get('add_class', 'master_controller@store');
Route::get('clst', 'master_controller@index');
// Route::get('updat_fee/{id}', 'master_controller@edit');

Route::get('edit', 'master_controller@edit');;

Route::get('up_fee', 'master_controller@update');


Route::get('addstudent',function(){
	return view('layouts.addstudent');
});

Route::get('addstudent', 'master_controller@show_class');

Route::get('add_clas', 'master_controller@store');
Route::get('add_class', 'master_controller@std_addd');

Route::get('mon', 'master_controller@show_data');


Route::get('Add-Admission-Fee', function(){

return view('layouts.Add_class_admisn');

});

Route::get('add_admisn', 'master_controller@admi');

Route::get('ad', 'master_controller@show_ad');

Route::get('u', 'master_controller@ed');

Route::get('update_stude', 'master_controller@st_up');
Route::get('up', 'master_controller@ed_fee');

Route::get('up_fee', 'master_controller@upd_fee');
Route::get('paid_form', function(){


			                        	
	return view('layouts.fee_paid');
});



Route::get('paid_form', 'master_controller@showname');
Route::get('view_s', 'master_controller@view_class');


Route::get('view_s', function(){

return view('layouts.view_form');


});

Route::get('view_s', 'master_controller@view_class');

Route::get('vieww', 'master_controller@jooin');
Route::get('logss', 'master_controller@studlogs');

Route::get('ho', 'master_controller@coount');


// Route::get('security', 'master_controller@indexx');


Route::get('security_fee', 'master_controller@insertt');

	
 Route::get('security', 'master_controller@sh');


 Route::get('printstudent','master_controller@print_s');



 Route::get('fees','master_controller@fee');
 

 