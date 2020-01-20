<?php
// use App\Models\Admin\Home;
// use App\Models\Admin\ProductAndServicesModel;
// use App\Models\Admin\PlatformAndFrameworkModel;
// use App\Models\Admin\HeaderLogosModel;

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

// Route::get('/', function () {
// 	$slideData = Home::all();
// 	$productAndServices = ProductAndServicesModel::all();
// 	$platformAndFramework = PlatformAndFrameworkModel::all();
// 	$footer = FooterContent::all();
//     return view('home',compact('slideData','productAndServices','platformAndFramework','footer'));
// });

Route::get('/', 'HomeController@home');

Route::get('/view/{id}', 'HomeController@viewProduct')->name('view');
Route::get('/service/{id}', 'HomeController@viewService')->name('service');

Route::get('/product/view/{id}', 'HomeController@viewProduct1')->name('product-view');
Route::get('/service/view/{id}', 'HomeController@viewService1')->name('service-view');

Route::get('/aboutus', 'HomeController@aboutus');
Route::get('/contactus', 'HomeController@contactus');
Route::get('/career', 'HomeController@career');
Route::get('/products', 'HomeController@products');
Route::get('/services', 'HomeController@services');

// Route::get('/', 'FooterController@home');



Route::resource('/contact','ContactFormController');
Route::resource('/career', 'AdminSection\CareerController');


Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	
Route::get('/admin', 'HomeController@index')->name('admin');

Route::resource('/admin/home', 'AdminSection\Home\SlidebarController');
Route::resource('/admin/product-and-services', 'AdminSection\Home\ProductAndServices');
Route::resource('/admin/platform-and-framework', 'AdminSection\Home\PlatformAndFramework');
Route::resource('/admin/aboutus', 'AdminSection\About\AboutUsController');
Route::resource('/admin/our-products', 'AdminSection\OurProductsController');
Route::resource('/admin/our-services', 'AdminSection\OurServicesController');

Route::resource('/admin/footer-contents', 'AdminSection\FooterController');

Route::resource('/admin/footer/contact-us', 'AdminSection\Footer\FooterForContactus');

Route::get('/terms', 'AdminSection\FooterController@terms')->name('terms');
// Route::get('/services', 'AdminSection\FooterController@services')->name('services');



Route::resource('/admin/contactus', 'AdminSection\Contactus\ContactusController');
Route::get('/admin/career', 'AdminSection\CareerController@careerAdmin');


Route::get('/admin/contact-data','ContactFormController@viewContactForm');
Route::get('/admin/career/{id}', 'AdminSection\CareerController@downloadDocs')->name('career.download');

Route::resource('/admin/logo', 'AdminSection\Logos\HeaderLogoController');


});
// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('/admin/logout', 'HomeController@logout')->name('logout');
