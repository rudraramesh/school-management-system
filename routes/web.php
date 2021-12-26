<?php

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

Auth::routes(['verify'=>true]);


// user
Route::get('/homes','UserController@homepage')->name('homepages');
Route::get('/about','UserController@about')->name('about');
Route::get('/course','UserController@course')->name('course');
Route::get('/blog','UserController@blog')->name('blog');
Route::get('/elements','UserController@elements')->name('elements');
Route::get('/singleblog','UserController@singleblog')->name('singleblog');
Route::get('/contact','UserController@contact')->name('contact');
Route::get('/coursedetails/{id}','UserController@coursedetails')->name('coursedetails');
Route::get('/courseodr/{id}','UserController@courseodr')->name('courseodr');
Route::post('/courseorder','UserController@courseorder')->name('courseorder');



// admin page 

Route::get('/admin/home','AdminController@home')->name('admin.home');
Route::get('/courseedit','AdminController@courseedit')->name('courseedit');
Route::get('/home2','AdminController@home2')->name('home2');
Route::get('/home3','AdminController@home3')->name('home3');
Route::get('/events','AdminController@events')->name('events');
Route::get('/all-professor','AdminController@allprofessor')->name('allprofessor');
Route::get('/userprofile','AdminController@userprofile')->name('userprofile');
Route::get('/lockscreen','AdminController@lockscreen')->name('lockscreen');
Route::get('/register','AdminController@registerform')->name('register');
Route::post('/userregister','AdminController@register')->name('userregister');
Route::get('/adminlogin','Auth\LoginController@showloginform')->name('adminlogin');
Route::post('/logincheck','Auth\LoginController@login')->name('logincheck');
Route::get('/adminlogout','Auth\LoginController@logout')->name('adminlogout');
Route::post('/addcourseform','AdminController@addcourseform')->name('addcourseform');
Route::get('/addcourse','AdminController@addcourse')->name('addcourse');
Route::get('/addprofessor','AdminController@addprofessor')->name('addprofessor');
Route::post('/addprofessorform','AdminController@addprofessorform')->name('addprofessorform');
Route::get('/allcourse','AdminController@allcourse')->name('allcourse');
Route::get('/readmorecourse/{id}','AdminController@readmorecourse')->name('readmorecourse');
Route::get('/order','AdminController@order')->name('order');





// admin 2 page

Route::get('/adminhome2','AdminControllerTwo@adminhome2')->name('adminhome2');
Route::get('/home2','AdminControllerTwo@home2')->name('home2');
Route::get('/parentshome','AdminControllerTwo@parentshome')->name('parents.home');
Route::get('/teacherhome','AdminControllerTwo@teacherhome')->name('teacher.home');
Route::get('/allstudent','AdminControllerTwo@allstudent')->name('allstudent');
Route::get('/studentdetails','AdminControllerTwo@studentdetails')->name('studentdetails');
Route::get('/admissionform','AdminControllerTwo@admissionform')->name('admissionform');


