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

Route::get('/',[
	'as'=>'trangchu',
	'uses'=>'PageController@getHomepage'
]);

Route::get('chi-tiet',[
	'as'=>'chitiet',
	'uses'=>'PageController@getBlogdetails'
]);

Route::get('bai-viet',[
	'as'=>'baiviet',
	'uses'=>'PageController@getBlog'
]);

Route::get('thanh-toan',[
	'as'=>'thanhtoan',
	'uses'=>'PageController@getCheckout'
]);

Route::post('thanh-toan',[
	'as'=>'placeOrder',
	'uses'=>'CheckoutController@placeOrder'
]);

Route::get('hoi-dap',[
	'as'=>'hoidap',
	'uses'=>'PageController@getFaq'
]);

Route::get('dang-nhap',[
	'as'=>'dangnhap',
	'uses'=>'PageController@getLogin'
]);

Route::post('dang-nhap',[
	'as'=>'postLogin',
	'uses'=>'PageController@postLogin'
]);

Route::get('san-pham/{id}',[
	'as'=>'sanpham',
	'uses'=>'PageController@getProduct'
]);

Route::get('dang-ky',[
	'as'=>'dangky',
	'uses'=>'PageController@getRegister'
]);

Route::post('dang-ky',[
	'as'=>'postRegister',
	'uses'=>'PageController@postRegister'
]);

Route::get('cua-hang',[
	'as'=>'cuahang',
	'uses'=>'PageController@getShop'
]);

Route::get('danh-muc/{id}',[
	'as'=>'danhmuc',
	'uses'=>'PageController@getCategory'
]);

Route::get('gio-hang',[
	'as'=>'giohang',
	'uses'=>'PageController@getShoppingcart'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getContact'
]);

Route::get('/producttab/{category_id}', 'ProductTab@RenderTab');

Route::get('/colortab/{product_id}/{size}', 'VariationController@RenderColor');

Route::get('/pricetab/{product_id}/{color}/{size}', 'VariationController@RenderPrice');

Route::get('/Add-Cart/{id}', 'CartController@AddCart');

Route::get('/Add-Cart-Product-Page/{id}/{soluong}', 'CartController@AddCartProductPage');

Route::get('/Remove-Cart/{rowId}', 'CartController@RemoveCart');

Route::post('/Update-All', 'CartController@UpdateAllItemListCart');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
