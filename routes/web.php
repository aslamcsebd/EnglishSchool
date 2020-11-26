<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');




            
Route::get('/','HomeController@index')->name('homes');
Route::get('/about','HomeController@aboutUs')->name('aboutus');
Route::get('/curricular','HomeController@curricular')->name('curricular');
Route::get('/gallery','HomeController@gallery')->name('gallery');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('dashboard','Admin\DashboardController@index')->name('category.home')->middleware('auth');
// Route::get('admin/cat/up/{id}','Admin\CategoryController@catup')->name('cat.up');
Route::get('admission','frontend\AdmissionContoller@index')->name('admission.index');
Route::post('admission','frontend\AdmissionContoller@store')->name('admission.store');
Route::get('admin/admission','frontend\AdmissionContoller@all')->name('admission.all')->middleware('auth');
Route::get('admin/admission-pdf/{id}','frontend\AdmissionContoller@pdf')->name('admisson.pdf')->middleware('auth');
Route::get('admin/admission/{id}','frontend\AdmissionContoller@delete')->name('admisson.destroy')->middleware('auth');
Route::resource('schoolnotice','frontend\NoticeController');
Route::resource('schoolteacher','frontend\TeacherController');

Route::prefix('admin')->group(function(){
    Route::group(['middleware' => 'auth'],function () {
        Route::resource('teacher-category', 'Admin\categoryController');
        Route::resource('curricular', 'Admin\CurricularController');
        Route::resource('appointment', 'Admin\AppointmentController');
        Route::resource('teacher', 'Admin\DoctorController');
        Route::resource('shedule', 'Admin\SheduleController');
        Route::resource('about/mission', 'Admin\aboutus\MissionController');
        Route::resource('about/administration', 'Admin\aboutus\AdministrationController');
        Route::resource('about', 'Admin\aboutus\AboutController');
        Route::resource('facilities', 'Admin\facilityController');
        Route::resource('dental-college/category', 'Admin\Dental_college\DentalCategoryController');
        Route::resource('dental-college/post', 'Admin\Dental_college\DentalPostController');
        Route::resource('notice', 'Admin\NoticeController');
        Route::resource('gallery', 'Admin\GalleryController');
    });
});




Route::get('/developer',function(){
    return "Developer name: forkanalam . contact:01861238123 , mail:forkanalam295@gmail.com";
});
Route::get('/pdfform',function(){
    $pdf = PDF::loadView('frontend.pages.pdfdownload');
        // return view('frontend.pages.admissionpdf',$data);
        return $pdf->setPaper('a4','potrait')->stream('invoice.pdf');
})->name('downloadform');


//News
Route::get('news','admin\NewsController@news')->name('news');
Route::post('editNews', 'admin\NewsController@editNews')->name('editNews');


