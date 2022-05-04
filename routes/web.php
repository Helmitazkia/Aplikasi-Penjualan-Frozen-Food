<?php

use Illuminate\Support\Facades\Route;
//Memanggil controller
//use App\Http\Controllers\c_catagories\catagoricontroller;
use App\Http\Controllers\c_admin\admincontroller;
use App\Http\Controllers\Auth_admin\registrationController;
use App\Http\Controllers\Auth_user\logusercontroller;
use App\Http\Controllers\Auth_user\regisusercontroller;
use App\Http\Controllers\Auth_user\Controller_user;
use App\Http\Controllers\c_admin\catagory_controller;
use App\Http\Controllers\customer_controller;


//Untuk Menerapkan Middleware 
use App\Providers\RouteServiceProvider;
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

/*
====================
url Akun Landing Page
===================
*/

Route::get('/', function () {
    return view('Loyout_product/content_product/v_home', [
        'title' => 'Home'
    ]);
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Store', function () {
    return view('Loyout_product/content_product/v_shop', [
        'title' => 'Product'
    ]);
});


Route::get('/Blog', function () {
    return view('Loyout_product/content_product/v_blog', [
        'title' => 'Blog'
    ]);
});

Route::get('/Entry', function () {
    return view('Loyout_product/content_product/v_acount', [
        'title' => 'Acount'
    ]);
});

Route::get('/Detail', function () {
    return view('Loyout_product/content_product/V_detail_Product/v_detail_product', [
        'title' => 'Detail-Product'
    ]);
});

Route::get('/Checkout', function () {
    return view('Loyout_product/content_product/V_checkout_product/v_checkout', [
        'title' => 'Checkout-Product'
    ]);
});

Route::get('/Contact', function () {
    return view('Loyout_product/content_product/v_contact', [
        'title' => 'Contact'
    ]);
});

//url Akun Forget
Route::get('/Forget', function () {
    return view('v_acount_admin/v_forget', [
        'title' => 'Lupa'
    ]);
});

/*
====================
url Akun Customer
===================
*/
//Menampilkan Form Registration pelanggan
Route::get('/Registrasi', [regisusercontroller::class, 'registrationuser'])->name('registration_user');
//untuk Menambahkan Data
Route::post('/Registrasipost', [regisusercontroller::class, 'tambahuserbaru'])->name('tambah_user_baru');
//url Menampilkan  Form Login
Route::get('/Login', [logusercontroller::class, 'loginuser'])->name('login_users');
/*



====================
url Akun Admin
===================
*/
//url Form Login And Register Admin
//middleware('guest') boleh di akses tanpa login

Route::get('/RegistrationAdmin', [regisusercontroller::class, 'FormUserAdmin'])->name('Form_admin')->middleware('guest');
//untuk Menambahkan Data
Route::post('/RegistrationpostAdmin', [regisusercontroller::class, 'CreateUser'])->name('tambah_admin_baru')->middleware('guest');
Route::get('/LoginAdmin', [logusercontroller::class, 'FormlogiAdmin'])->name('login')->middleware('guest');
Route::post('/LoginAdmin', [logusercontroller::class, 'LogwebAdmin'])->name('loginweb')->middleware('guest');
Route::post('/Logout', [logusercontroller::class, 'keluar'])->name('Logout_form')->middleware('auth');

//Email
Route::get('/verify_email', [logusercontroller::class, 'verify_email'])->name('verify_email');
Route::put('/verifikasi_email/{email}', [logusercontroller::class, 'aktifasi_email'])->name('aktifasi_email');
Route::get('/konfirmasi', [logusercontroller::class, 'konfirmasi_email'])->name('konfirmasi_email');
Route::get('/Verif', [logusercontroller::class, 'coba_email'])->name('coba_email');


//middleware('auth') artinya tidak boleh di akses tanpa login
// Data Product
Route::group(['middleware' => 'auth'], function () {
    Route::get('/Dashboardshow', [admincontroller::class, 'Dashboard']);
    Route::get('/Formadd', [admincontroller::class, 'formaddproduct']);
    Route::post('/Formadd', [admincontroller::class, 'tambahproduct']);
    Route::get('/deleteproduct/{id}', [admincontroller::class, 'DeleteDataproduct'])->name('Hapus_product');
    Route::put('/Updateproduct/{id}', [admincontroller::class, 'updateproduct']);
});
// Data User's
Route::group(['middleware' => 'auth'], function () {
    Route::get('/Datauser', [Controller_user::class, 'Showuser']);
    Route::post('/AddDatauser', [Controller_user::class, 'Adduser']);
    Route::get('/deleteuser/{id}', [Controller_user::class, 'DeleteDatauser'])->name('Hapus_product');
    Route::put('/updateuser/{id}', [Controller_user::class, 'updateuser'])->name('Update_user');
});
// Data Catagory
Route::group(['middleware' => 'auth'], function () {
    Route::get('/Catagory', [catagory_controller::class, 'showcategory'])->name('tampil_catagori');
    Route::post('/addcatagory', [catagory_controller::class, 'Adddatacatagory'])->middleware('auth');
    Route::get('/deletecatagory/{id}', [catagory_controller::class, 'DeleteCatagory'])->name('Hapus_catagory');
    Route::put('/UpdateCatagory/{id}', [catagory_controller::class, 'UpdateDataCatagory'])->name('Update_user');
});
//Data Status
Route::group(['middleware' => 'auth'], function () {
    Route::get('/ShowStatus', [catagory_controller::class, 'showstatus'])->name('tampil_status');
    Route::post('/Addstatus', [catagory_controller::class, 'Adddatastatus']);
    Route::put('/UpdateStatus/{id}', [catagory_controller::class, 'UpdateDataStatus']);
    Route::get('/deletestatus/{id}', [catagory_controller::class, 'DeleteStatus']);
});
//Data Customer
Route::group(['middleware' => 'auth'], function () {
    Route::get('/Datacustomer', [customer_controller::class,'Showcustomer']);
    Route::get('/AddCustomerForm', [customer_controller::class,'FormaddCustomer']);
    Route::Post('/Addnewcustomer', [customer_controller::class,'Addcustomer']);
    Route::get('/deletecustomer/{id}', [customer_controller::class, 'DeleteDatacustomer']);
    Route::put('/Updatecustomer/{id}', [customer_controller::class, 'Updatedatacustomer']);
});