<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('viewua', 'UserAccountController@getUserAccount');
Route::post('insertua', 'UserAccountController@insertUserAccount');
Route::delete('deleteua', 'UserAccountController@deleteUserAccount');
Route::put('updateua', 'UserAccountController@updateUserAccount');

Route::get('viewupm', 'UserPaymentMethodController@getUserPaymentMethod');
Route::post('insertupm', 'UserPaymentMethodController@insertUserPaymentMethod');
Route::delete('deleteupm', 'UserPaymentMethodController@deleteUserPaymentMethod');
Route::put('updateupm', 'UserPaymentMethodController@updateUserPaymentMethod');

Route::get('viewpm', 'PaymentMethodController@getPaymentMethod');
Route::post('insertpm', 'PaymentMethodController@insertPaymentMethod');
Route::delete('deletepm', 'PaymentMethodController@deletePaymentMethod');
Route::put('updatepm', 'PaymentMethodController@updatePaymentMethod');

Route::get('viewuadd', 'UserAddressController@getUserAddress');
Route::post('insertuadd', 'UserAddressController@insertUserAddress');
Route::delete('deleteuadd', 'UserAddressController@deleteUserAddress');
Route::put('updateuadd', 'UserAddressController@updateUserAddress');

Route::get('viewc', 'CartController@getCart');
Route::post('insertc', 'CartController@insertCart');
Route::delete('deletec', 'CartController@deleteCart');
Route::put('updatec', 'CartController@updateCart');

Route::get('viewci', 'CartItemController@getCartItem');
Route::post('insertci', 'CartItemController@insertCartItem');
Route::delete('deleteci', 'CartItemController@deleteCartItem');
Route::put('updateci', 'CartItemController@updateCartItem');

Route::get('viewo', 'OrderController@getOrder');
Route::post('inserto', 'OrderController@insertOrder');
Route::delete('deleteo', 'OrderController@deleteOrder');
Route::put('updateo', 'OrderController@updateOrder');

Route::get('views', 'ShipmentController@getShipment');
Route::post('inserts', 'ShipmentController@insertShipment');
Route::delete('deletes', 'ShipmentController@deleteShipment');
Route::put('updates', 'ShipmentController@updateShipment');

Route::get('viewp', 'ProductController@getProduct');
Route::post('insertp', 'ProductController@insertProduct');
Route::delete('deletep', 'ProductController@deleteProduct');
Route::put('updatep', 'ProductController@updateProduct');

Route::get('viewoi', 'OrderItemController@getOrderItem');
Route::post('insertoi', 'OrderItemController@insertOrderItem');
Route::delete('deleteoi', 'OrderItemController@deleteOrderItem');
Route::put('updateoi', 'OrderItemController@updateOrderItem');

Route::get('viewpd', 'ProductDetailController@getProductDetail');
Route::post('insertpd', 'ProductDetailController@insertProductDetail');
Route::delete('deletepd', 'ProductDetailController@deleteProductDetail');
Route::put('updatepd', 'ProductDetailController@updateProductDetail');

Route::get('viewcat', 'CategoryController@getCategory');
Route::post('insertcat', 'CategoryController@insertCategory');
Route::delete('deletecat', 'CategoryController@deleteCategory');
Route::put('updatecat', 'CategoryController@updateCategory');

Route::get('viewcd', 'CategoryDetailController@getCategoryDetail');
Route::post('insertcd', 'CategoryDetailController@insertCategoryDetail');
Route::delete('deletecd', 'CategoryDetailController@deleteCategoryDetail');
Route::put('updatecd', 'CategoryDetailController@updateCategoryDetail');

Route::get('viewsi', 'ShipmentItemController@getShipmentItem');
Route::post('insertsi', 'ShipmentItemController@insertShipmentItem');
Route::delete('deletesi', 'ShipmentItemController@deleteShipmentItem');
Route::put('updatesi', 'ShipmentItemController@updateShipmentItem');
