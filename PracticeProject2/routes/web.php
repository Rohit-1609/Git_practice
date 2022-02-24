<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

//Route::get('/', 'DashboardController');
Route::get("/",[DashboardController::class,'index']);

// Route::get('/system-management/{option}', 'SystemMgmtController@index');

//Route::get('/profile', 'ProfileController@index');
Route::get("/profile",[ProfileController::class,'index']);
Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');


Route::resource('user-management', 'UserManagementController');
Route::get("/employee/index",[EmployeeController::class,'index']);
Route::get("/addEmployee",[EmployeeController::class,'add_Employee']);

Route::get("/addMobile",[MobileController::class,'add_Mobile']);
Route::get("/showEmployeeMobile/{id}",[EmployeeController::class,'show_Mobile']);

Route::get("/addProject",[ProjectController::class,'add_Project']);
Route::get("/showEmployeeProject/{id}",[ProjectController::class,'show_Project']);
Route::get("/showProjectEmployee/{id}",[EmployeeController::class,'show_Employee']);


Route::get("/addAddress/{id}",[AddressController::class,'add_Address']);
Route::get("/showEmployeeAddress/{id}",[AddressController::class,'show_Address']);
//Route::get("/show-Employee/{id}",[EmployeeController::class,'show_Employee']);


Route::get("/addCompany",[CompanyController::class,'add_Company']);
Route::get("/employee/index1",[EmployeeController::class,'index1']);


Route::get("/users/create",[UserManagementController::class,'create']);
Route::group(['middleware' => ['auth']], function() {

   // Route::resource('roles','RoleController');

   // Route::resource('users','UserController');


    Route::get("/products",[ProductController::class,'index'])->name('products.index');
    Route::get("/products/create",[ProductController::class,'create'])->name('products.create');
    Route::get("/products/show/{id}",[ProductController::class,'show'])->name('products.show');
    Route::get("/products/edit/{id}",[ProductController::class,'edit'])->name('products.edit');
    Route::delete("/products/destroy/{id}",[ProductController::class,'destroy'])->name('products.destroy');
    Route::post("/products/store",[ProductController::class,'store'])->name('products.store');
    Route::put("/products/update/{id}",[ProductController::class,'update'])->name('products.update');



    Route::get("/roles",[RoleController::class,'index'])->name('roles.index');
    Route::get("/roles/create",[RoleController::class,'create'])->name('roles.create');
    Route::get("/roles/show/{id}",[RoleController::class,'show'])->name('roles.show');
    Route::get("/roles/edit/{id}",[RoleController::class,'edit'])->name('roles.edit');
    Route::delete("/roles/destroy/{id}",[RoleController::class,'destroy'])->name('roles.destroy');
    Route::post("/roles/store",[RoleController::class,'store'])->name('roles.store');
    Route::put("/roles/update/{id}",[RoleController::class,'update'])->name('roles.update');



    Route::get("/users",[UserManagementController::class,'index'])->name('users.index');
    Route::get("/users/create",[UserManagementController::class,'create'])->name('users.create');
    Route::get("/users/show/{id}",[UserManagementController::class,'show'])->name('users.show');
    Route::get("/users/edit/{id}",[UserManagementController::class,'edit'])->name('users.edit');
    Route::delete("/users/destroy/{id}",[UserManagementController::class,'destroy'])->name('users.destroy');
    Route::post("/users/store",[UserManagementController::class,'store'])->name('users.store');
    Route::put("/users/update/{id}",[UserManagementController::class,'update'])->name('users.update');


});


