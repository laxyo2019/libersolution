<?php
use App\Models\Admin\Home;
use App\Models\Admin\ProductAndServicesModel;
use App\Models\Admin\PlatformAndFrameworkModel;
use App\Models\Admin\Aboutus;
use App\Models\Admin\ProductmastModel;
use App\Models\Admin\ServicemastModel;
use App\Models\Admin\FooterContent;



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
	$slideData = Home::all();
	$productAndServices = ProductAndServicesModel::all();
	$platformAndFramework = PlatformAndFrameworkModel::all();
	$footer = FooterContent::all();
    return view('home',compact('slideData','productAndServices','platformAndFramework','footer'));
});
Route::get('/aboutus', function () {
	$slideData = Home::all();
	$aboutData = Aboutus::all();
    return view('aboutus',compact('slideData','aboutData'));
});
Route::get('/contactus', function () {
	$slideData = Home::all();
    return view('contactus',compact('slideData'));
});
Route::get('/career', function () {
	$slideData = Home::all();
    return view('career',compact('slideData'));
});
Route::get('/products', function () {
	$slideData = Home::all();
	$productsData = ProductmastModel::all();
    return view('products',compact('slideData','productsData'));

});
Route::get('/services', function () {
	$slideData = Home::all();
    $servicesData = ServicemastModel::all();
    return view('services',compact('slideData','servicesData'));
});

//Auth::routes();


Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin-dashboard');

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/home', 'AdminSection\Home\SlidebarController');
// Route::resource('/admin/main', 'AdminSection\Home\MainController');
Route::resource('/admin/product-and-services', 'AdminSection\Home\ProductAndServices');
Route::resource('/admin/platform-and-framework', 'AdminSection\Home\PlatformAndFramework');
Route::resource('/admin/aboutus', 'AdminSection\About\AboutUsController');
Route::resource('/admin/our-products', 'AdminSection\OurProductsController');
Route::resource('/admin/our-services', 'AdminSection\OurServicesController');

Route::resource('/admin/footer-contents', 'AdminSection\FooterController');
Route::resource('/career', 'AdminSection\CareerController');
Route::get('/admin/career', 'AdminSection\CareerController@careerAdmin');

Route::resource('/admin/contactus', 'AdminSection\Contactus\ContactusController');



Route::resource('/contact','ContactController');

// Route::get('/home','CommanHomeontroller');


