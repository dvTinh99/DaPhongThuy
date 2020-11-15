<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::pattern('slug', '(.*)');
Route::pattern('id', '([0-9].*)');
Route::pattern('rowid', '(.*)');
Route::pattern('qty', '([0-9]*)');
// REGISTER / LOGIN

Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function(){
    Route::get('register', ['as' => 'showformRegister', 'uses' => 'RegisterController@showformRegister']);
    Route::post('register', ['as' => 'Register', 'uses' => 'RegisterController@Register']);

    Route::get('login', ['as' => 'showformLogin', 'uses' => 'LoginController@showformLogin']);
    Route::post('login', ['as' => 'Login', 'uses' => 'LoginController@Login']);

    Route::get('logout', ['as' => 'Logout', 'uses' => 'LoginController@Logout']);
});

// ROUTE CATEGORY
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'cate'],function(){

        Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@Catelist']);


        Route::get('add',['as'=>'admin.cate.getadd','uses'=>'CateController@getAdd']);
        Route::post('add',['as'=>'admin.cate.postadd','uses'=>'CateController@postAdd']);


        Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);


        Route::get('delete/{id}',['as'=>'admin.cate.delete','uses'=>'CateController@Catedelete']);
    });

    Route::group(['prefix'=>'product'],function(){

        Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@ProductList']);


        Route::get('add',['as'=>'admin.product.getadd','uses'=>'ProductController@getAdd']);
        Route::post('add',['as'=>'admin.product.postadd','uses'=>'ProductController@postAdd']);


        Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);


        Route::get('delete/{id}',['as'=>'admin.product.delete','uses'=>'ProductController@ProductDelete']);
    });

    Route::group(['prefix'=>'user'],function(){


        Route::get('add',['as'=>'admin.user.getadd','uses'=>'RegisterController@getAdd']);
        Route::post('add',['as'=>'admin.user.postadd','uses'=>'RegisterController@postAdd']);




        Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@UserList']);

        Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);


        Route::get('delete/{id}',['as'=>'admin.user.delete','uses'=>'UserController@UserDelete']);
    });

    Route::group(['prefix'=>'new'],function(){

        Route::get('list',['as'=>'admin.new.list','uses'=>'NewController@Newlist']);


        Route::get('add',['as'=>'admin.new.getadd','uses'=>'NewController@getAdd']);
        Route::post('add',['as'=>'admin.new.postadd','uses'=>'NewController@postAdd']);


        Route::get('edit/{id}',['as'=>'admin.new.getEdit','uses'=>'NewController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.new.postEdit','uses'=>'NewController@postEdit']);


        Route::get('delete/{id}',['as'=>'admin.new.delete','uses'=>'NewController@Newdelete']);
    });

    Route::group(['prefix'=>'bill'],function(){

        Route::get('list',['as'=>'admin.bill.list','uses'=>'BillController@billlist']);

        Route::get('viewbill/{id}'
            ,['as'=>'admin.bill.getView','uses'=>'BillController@getView']);


        Route::get('delete/{id}',['as'=>'admin.bill.delete','uses'=>'BillController@delete']);
    });

    Route::group(['prefix'=>'customer'],function(){
        Route::get('list',['as'=>'admin.customer.list','uses'=>'CustomerController@list']);
    });
    Route::group(['prefix'=>'contact'],function(){
        Route::get('list',['as'=>'admin.contact.list','uses'=>'ContactController@list']);
    });
    Route::group(['prefix'=>'review'],function(){
        Route::get('list',['as'=>'admin.review.list','uses'=>'ReviewController@list']);
    });
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashBoardController@dashboard']);
});
// END


// VIEW
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('gioi-thieu', ['as' => 'gioithieu', 'uses' => 'HomeController@gioithieu']);

Route::get('bai-viet', ['as' => 'news','uses' => 'HomeController@news']);
Route::get('bai-viet/{id}/{name}', ['as' => 'news-single','uses' => 'HomeController@newssingle']);
Route::get('chi-tiet-san-pham/{id}/{type}', ['as' => 'chi-tiet-san-pham','uses' => 'HomeController@product']);
Route::get('loai-san-pham/{id}/{type}', ['as' => 'san-pham', 'uses' => 'HomeController@shop']);
// contact
Route::get('lien-he', ['as' => 'lienhe', 'uses' => 'HomeController@lienhe']);
Route::post('lien-he', ['as' => 'postlienhe', 'uses' => 'HomeController@postlienhe']);

// cart
Route::get('mua-hang/{id}/{name}', ['as' => 'muahang', 'uses' => 'CartController@muahang']);
Route::get('gio-hang', ['as' => 'giohang', 'uses' =>'CartController@giohang']);
Route::get('xoa-hang/{id}', ['as' => 'xoahang', 'uses' => 'CartController@xoahang']);
Route::get('cap-nhat', ['as' => 'capnhat','uses' => 'CartController@capnhat']);
// CHeckout
Route::get('mua-hang/oder-acount', ['as' => 'oderacount', 'uses' => 'CartController@logincart']);
// Thêm Đơn Hàng
Route::get('mua-hang/checkout', ['as' => 'checkout', 'uses' => 'CartController@checkout']);
Route::post('mua-hang/checkout', ['as' => 'postcheckout', 'uses' => 'CartController@postcheckout']);


// Tìm kiếm sản phẩm
Route::get('tim-kiem',['as'=>'timkiem','uses'=>'HomeController@timkiem']);
// Đánh giá sản Phẩm
Route::post('danh-gia', ['as' => 'danhgia', 'uses' => 'HomeController@danhgia']);


