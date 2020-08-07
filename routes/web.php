<?php


/*
 * Public routes
 */

//Login
Route::get('login', [
    'as' => 'login',
    'uses' => 'LoginController@getLogin',
]);
Route::get('logout', [
    'as' => 'logout',
    'uses' => 'LoginController@userLogout',
]);
Route::post('postLogin', [
    'as' => 'postLogin',
    'uses' => 'LoginController@postLogin',
]);

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@getHome',
]);
Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@getHome',
]);
Route::get('register', [
    'as' => 'register',
    'uses' => 'HomeController@getRegistration',
]);
Route::post('postRegister', [
    'as' => 'postRegister',
    'uses' => 'HomeController@postRegistration',
]);
Route::get('allItems', [
    'as' => 'allItems',
    'uses' => 'HomeController@getAllItems',
]);
Route::get('showItem/{id}/{name?}', [
    'as' => 'showItem',
    'uses' => 'HomeController@showItem',
]);

/*
 * Admin Login routes
 */

Route::get('admin/login', [
    'as' => 'adminLogin',
    'uses' => 'LoginController@getAdminLoginPage',
]);
Route::post('admin/login', [
    'as' => 'postAdminLogin',
    'uses' => 'LoginController@postAdminLogin',
]);
Route::get('admin/logout', [
    'as' => 'adminLogout',
    'uses' => 'LoginController@logout',
]);

/*
 * Authenticated user routes
 */
Route::group([
    'prefix' => 'user',
    'middleware' => 'auth'
], function () {

    Route::get('addToCart', [
        'as' => 'addToCart',
        'uses' => 'ShoppingController@addToCart',
    ]);
    Route::get('cart', [
        'as' => 'showCart',
        'uses' => 'ShoppingController@showCart',
    ]);
    Route::get('checkout', [
        'as' => 'checkout',
        'uses' => 'ShoppingController@showCheckout',
    ]);
    Route::get('getPayment', [
        'as' => 'getPayment',
        'uses' => 'ShoppingController@getPayment',
    ]);
    Route::get('placeOrder', [
        'as' => 'placeOrder',
        'uses' => 'ShoppingController@placeOrder',
    ]);
    Route::get('comptelePayment', [
        'as' => 'comptelePayment',
        'uses' => 'ShoppingController@comptelePayment',
    ]);
    Route::post('postCheckout', [
        'as' => 'postCheckout',
        'uses' => 'ShoppingController@postCheckout',
    ]);
    Route::get('myAccount', [
        'as' => 'myAccount',
        'uses' => 'UserAccountController@getMyAccount',
    ]);
    Route::get('orderHistory', [
        'as' => 'orderHistory',
        'uses' => 'UserAccountController@orderHistory',
    ]);
    Route::get('cancelOrder', [
        'as' => 'cancelOrder',
        'uses' => 'ShoppingController@cancelOrder',
    ]);
    Route::post('post-review', [
        'as' => 'postReview',
        'uses' => 'ShoppingController@postReview',
    ]);

});

/*
 * Admin Authenticated routes
 */
Route::group([
    'prefix' => 'admin',
    'middleware' => 'isAdmin'
], function () {

    Route::get('/', [
        'as' => 'adminHome',
        'uses' => 'AdminController@getHome',
    ]);
    Route::get('addFood', [
        'as' => 'addFood',
        'uses' => 'AdminController@addFoodItem',
    ]);
    Route::get('add-food-category', [
        'as' => 'addFoodCategory',
        'uses' => 'AdminController@addFoodCategory',
    ]);
    Route::post('post-food-category', [
        'as' => 'postFoodCategory',
        'uses' => 'AdminController@postFoodCategory',
    ]);
    Route::post('addFood', [
        'as' => 'postAddFood',
        'uses' => 'AdminController@postFoodItem',
    ]);
    Route::get('todaysOrders', [
        'as' => 'todaysOrders',
        'uses' => 'AdminController@todaysOrders',
    ]);
    Route::get('all-orders', [
        'as' => 'allOrders',
        'uses' => 'AdminController@getAllOrders',
    ]);
    Route::get('updateOrderDeliveryStatus', [
        'as' => 'updateOrderDeliveryStatus',
        'uses' => 'AdminController@updateOrderDeliveryStatus',
    ]);
});
