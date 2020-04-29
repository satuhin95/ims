<?php

use Illuminate\Support\Facades\Route;

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
    return Redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// employee
Route::get('/add-employee','EmployeeController@create');
Route::get('/all-employee','EmployeeController@show');
Route::post('/save-employee','EmployeeController@save');
Route::get('/edit-employee/{id}','EmployeeController@edit');
Route::post('/update-employee/{id}','EmployeeController@update');
Route::get('/delete-employee/{id}','EmployeeController@delete');
Route::get('/view-employee/{id}','EmployeeController@view');

// Customer
Route::get('/add-customer','CustomerController@create');
Route::post('/save-customer','CustomerController@save');
Route::get('/all-customer','CustomerController@all');

// Supplier
Route::get('/add-supplier','SupplierController@index');
Route::post('/save-supplier','SupplierController@save');
Route::get('/all-supplier','SupplierController@all');
Route::get('/edit-supplier/{id}','SupplierController@edit');
Route::post('/update-supplier/{id}','SupplierController@update');

// Salary
Route::get('/pay-salary','SalaryController@index');
Route::post('/store-salary','SalaryController@store');
Route::get('/all-salary','SalaryController@all');
Route::get('/advanced-salary','SalaryController@advanced');
Route::post('/save-advanced','SalaryController@SaveAdvanced');
Route::get('/all-advanced-salary','SalaryController@AllAdvanced');

// Category
Route::get('/add-category','CategoryController@index');
Route::post('/save-category','CategoryController@save');
Route::get('/all-category','CategoryController@All');

// product
Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save');
Route::get('/all-product','ProductController@All');
// Excel import and Import
Route::get('/import-product','ProductController@ImportProduct')->name('import.product');
Route::post('/import','ProductController@Import')->name('import');
Route::get('/export','ProductController@Export')->name('export');
// Expense
Route::get('/add-expense','ExpenseController@index');
Route::post('/save-expense','ExpenseController@Save');
Route::get('/day-expense','ExpenseController@Day');
Route::get('/month-expense','ExpenseController@Month');
Route::get('/yearly-expense','ExpenseController@Year');
Route::get('/expense-January','ExpenseController@January');
Route::get('/expense-February','ExpenseController@February');
// Attendence
Route::get('/add-attendence','AttendenceController@index');
Route::post('/insert-attendence','AttendenceController@Save');
Route::get('/all-attendence','AttendenceController@All');
Route::get('/edit-attendence/{edit_date}','AttendenceController@Edit');
Route::post('/update-attendence','AttendenceController@Update');
Route::get('/view-attendence/{edit_date}','AttendenceController@View');

// Pos
Route::get('/pos','PosController@index')->name('pos');
Route::get('/panding-orders',"PosController@Pending")->name('pening.order');
Route::get('/view-orders-status/{id}',"PosController@View");
Route::get('/pos-done/{id}',"PosController@Done");

// Cart
Route::post('/add-cart',"CartController@Index");
Route::post('/update-cart/{rowId}',"CartController@Update");
Route::get('/remove-cart/{rowId}',"CartController@Remove");
Route::post('/create-invoice',"CartController@Invoice");
Route::post('/final-invoice',"CartController@FinalInvoice");
