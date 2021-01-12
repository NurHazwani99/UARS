<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentReportController;
use App\Http\Controllers\StaffReportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('notices','App\Http\Controllers\NoticeController');

Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('loginstudent', [HomeController::class, 'loginstudent']);
Route::get('loginstaff', [HomeController::class, 'loginstaff']);

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


Route::get("studentreport/murni",[NoticeController::class,'murni']);
Route::get("studentreport/cendi",[NoticeController::class,'cendi']);
Route::get("studentreport/amanah",[NoticeController::class,'amanah']);
Route::get("studentreport/ilmu",[NoticeController::class,'ilmu']);
Route::get("studentreport/index",[StudentReportController::class,'index']);
Route::get("studentreport/search",[StudentReportController::class,'search']);
Route::get("staffreport/index",[StudentReportController::class,'staffindex']);

Route::get("studentreport/create",[StudentReportController::class,'create']);
Route::post("studentreport/create",[StudentReportController::class,'store']);

Route::get("staffreport/edit/{report_id}",[StudentReportController::class,'edit']);
Route::post("staffreport/edit/acknowledge",[StudentReportController::class,'ackreport']);

Route::get("staffreport/update",[StudentReportController::class,'update']);
Route::get("staffreport/update/{report_id}",[StudentReportController::class,'updatestatus']);
Route::post("staffreport/update/statusupdated",[StudentReportController::class,'updaterep']);

Route::get("studentreport/history",[StudentReportController::class,'studhistory']);
Route::get("staffreport/history",[StudentReportController::class,'staffhistory']);
Route::get("staffreport/search",[StudentReportController::class,'search']);

Route::get("staffreport/addnotice",[NoticeController::class,'addnotice']);
Route::post("staffreport/addnotice",[NoticeController::class,'storenotice']);

Route::get("staffreport/notice",[NoticeController::class,'index']);





//Route::resource('studentreport', 'App\Http\Controllers\StudentReportController');
//Route::resource('staffreport', 'App\Http\Controllers\StaffReportController');


//Route::view("create",[App\Http\Controllers\StudentReportController::class, 'create']);


//Route::get('/staffreport/details', 'App\Http\Controllers\StudentReportController@details');
//Route::post('/staffreport/details', 'App\Http\Controllers\StudentReportController@ackreport');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
