<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListallController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Connection;

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
    toastr()->warning('Warning Message');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    // ================employeenew====================================================================
Route::group(['middleware' => 'auth'], function() {

    Route::resource('/listall',  App\Http\Controllers\ListallController::class, ['names' => 'listall']  );
    Route::post('/listdev_name_ar', [ListallController::class, "listdev_name_ar"]);

    // Route::resource('users', 'UserController');Route::resource('faq', 'ProductFaqController', ['names' => 'something']);
    Route::get('employeenew', function () {


        // try {
        //     // DB::connection()->getPdo();
        //     DB::connection() ;
        //     echo "Connected successfully to: " . DB::connection()->getDatabaseName();
        
        // } catch (\Exception $e) {
        //     die("Could not connect to the database. Please check your configuration. error:" . $e );
      
        //     return view('welcome');
        // }
        toastr()->success('Success Message');

        return view('employeeadmin.employeenew.employeenew');
    });
    // ================employeenew====================================================================
                // ________________________________________________________________________
                //class_sys
                Route::view('class_sys', 'admin.class_sys.class_sys');
            





                // ================search====================================================================
            //     Route::get('search', function (Request $request) {
            //         $query = $request->get('query');
            //         $filterResult = User::where('name', 'LIKE', '%'. $query. '%')->get();
            //         return response()->json($filterResult);
            // });




            });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::view('selfattendee', 'admin.class_sys.selfattendee.selfattendee');


    
Route::get('file-upload', [HomeController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [HomeController::class, 'fileUploadPost'])->name('file.upload.post');