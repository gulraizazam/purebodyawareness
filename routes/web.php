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

Route::get('/','FrontendController@index')->name('index');

Route::get('contact','FrontendController@Contact')->name('contact');
Route::post('addcontact','FrontendController@StoreContact')->name('contact.store');
Route::get('veggie90dayplan','FrontendController@VegiePlan')->name('veggieplan');
Route::get('about','FrontendController@About')->name('about');
Route::get('transformations','FrontendController@Transformations')->name('transformations');
Route::get('graduate','FrontendController@Graduate')->name('graduate');
Route::get('checkout/{id}','FrontendController@Checkout')->name('packege.checkout');
Route::post('payment', 'PaymentController@payWithpaypal')->name('payment');
Route::get('cancel', 'PaymentController@cancel')->name('payment.cancel');
Route::get('status', 'PaymentController@getPaymentStatus');
Route::get('getlogout','FrontendController@Logout')->name('logout');
Route::get('thankyou','FrontendController@ThankYou')->name('thankyou');
Route::post('filter','FrontendController@FilterGraduate')->name('filter.graduate');

Route::group(['middleware' => 'admin'], function () {
	Route::get('dashboard','AdminController@index')->name('admin.index');
	Route::get('allpayments','AdminController@GetPayments')->name('allpayments');
	Route::get('createplan','AdminController@CreatePlan')->name('plan.create');
	Route::get('allplans','AdminController@getPlan')->name('allplans');
	Route::post('storeplan','AdminController@StorePlan')->name('plan.store');
	Route::get('deleteplan/{id}','AdminController@DeletePlan')->name('plan.delete');
	Route::get('editeplan/{id}','AdminController@EditPlan')->name('plan.edit');
	Route::post('updateplan/{id}','AdminController@UpdatePlan')->name('plan.update');
	Route::get('allgraduates','AdminController@AllGraduates')->name('graduate.all');
	Route::get('creategraduate','AdminController@CreateGraduate')->name('graduate.create');
	Route::post('storegraduate','AdminController@StoreGraduate')->name('graduate.store');
	Route::get('editgraduate/{id}','AdminController@EditGraduate')->name('graduate.edit');
	Route::post('updategraduate/{id}','AdminController@UpdateGraduate')->name('graduate.update');
	Route::get('deletegradaute/{id}','AdminController@DeleteGraduate')->name('graduate.delete');
	//Bnner
	Route::get('banners','BannersController@Banners')->name('banners.all');
	Route::get('createbanner','BannersController@CreateBannens')->name('banner.create');
	Route::post('storebanner','BannersController@StoreBanner')->name('banner.store');
	Route::get('editbanner/{id}','BannersController@EditBanner')->name('banner.edit');
	Route::post('updatebanner/{id}','BannersController@UpdateBanner')->name('banner.update');
	Route::get('deletebanner/{id}','BannersController@DeleteBanner')->name('banner.delete');
	//content
	Route::get('content','BannersController@Content')->name('content.all');
	Route::get('createcontent','BannersController@CreateContent')->name('content.create');
	Route::post('storecontent','BannersController@StoreContent')->name('content.store');
	Route::get('editcontent/{id}','BannersController@EditContent')->name('content.edit');
	Route::post('updatecontent/{id}','BannersController@UpdateContent')->name('content.update');
	Route::get('deletecontent/{id}','BannersController@DeleteContent')->name('content.delete');

	//Carousel
	Route::get('testimonial','BannersController@Testimonial')->name('testimonial.all');
	Route::get('createtestimonial','BannersController@CreateTestimonial')->name('testimonial.create');
	Route::post('storetestimonial','BannersController@StoreTestimonial')->name('testimonial.store');
	Route::get('edittestimonial/{id}','BannersController@EditTestimonial')->name('testimonial.edit');
	Route::post('updatetestimonial/{id}','BannersController@UpdateTestimonial')->name('testimonial.update');
	Route::get('deletetestimonial/{id}','BannersController@DeleteTestimonial')->name('testimonial.delete');

	//Bottom Content
	Route::get('features/index','BannersController@Feature')->name('features.index');
	Route::post('features/index/save','BannersController@StoreFeature')->name('feature.index.save');

	Route::get('admin/about','AdminController@aboutpage')->name('admin.about');
	Route::post('admin/static/update','AdminController@UpdateStaticPage')->name('static.update');
	Route::get('admin/quotation','AdminController@editquotation')->name('admin.quotation');
	Route::get('admin/contact','AdminController@contactpage')->name('admin.contact');
	Route::get('veggiefeature','BannersController@VeggieFeatures')->name('features.veggie');
	Route::get('admin/transformation','AdminController@transformationsPage')->name('admin.transformation');
	Route::get('admin/loginPage','AdminController@loginPage')->name('admin.loginPage');
	
	Route::get('menus','AdminController@getmenus')->name('admin.menus');
	Route::post('menus','AdminController@updatemenus')->name('admin.menus.update');
	Route::get('socialcontacts','BannersController@SocialContacts')->name('socialcontacts');
	Route::post('storesocial/{id}','BannersController@StoreSocial')->name('social.store');
	//my ACCount
	Route::get('myaccount/{id}','AdminController@MyAccount')->name('admin.account');
	Route::post('updatepassword/{id}','AdminController@UpdatePassword')->name('admin.update');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
