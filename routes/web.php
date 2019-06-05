<?php

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', 'MyController@index')->name('main.index');
        Route::get('/about', 'MyController@about')->name('main.about');
        Route::get('/services', 'MyController@services')->name('main.services');
        Route::get('/portfolio', 'MyController@portfolio')->name('main.portfolio');
        Route::get('/gallery', 'MyController@gallery')->name('main.gallery');
        Route::post('/email', 'MailController@mail')->name('email');
    });



Auth::routes();
Route::post('/login/custom', 'LoginController@login')->name('login.custom');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=> 'admin', 'middleware' => 'auth'],  function(){

    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/about', 'AdminController@about')->name('about');
    Route::get('/services', 'AdminController@services')->name('services');
    Route::get('/portfolio', 'AdminController@portfolio')->name('portfolio');
    Route::get('/gallery', 'AdminController@gallery')->name('gallery');


    Route::get('/main_slide_add', 'AdminController@main_slide_add')->name('main_slide_add');
    Route::get('/main_slide_preview/{id?}', 'AdminController@main_slide_preview')->name('main_slide_preview');
    Route::post('/main_slide_store', 'IndexController@main_slide_store')->name('main_slide_store');
    Route::post('/main_slide_update', 'IndexController@main_slide_update')->name('main_slide_update');
    Route::post('/main_slide_destroy', 'IndexController@main_slide_destroy')->name('main_slide_destroy');

    Route::post('/year_update', 'IndexController@year_update')->name('year_update');

    Route::get('/team_add', 'AdminController@team_add')->name('team_add');
    Route::get('/team_preview/{id?}', 'AdminController@team_preview')->name('team_preview');
    Route::post('/team_store', 'IndexController@team_store')->name('team_store');
    Route::post('/team_update', 'IndexController@team_update')->name('team_update');
    Route::post('/team_destroy', 'IndexController@team_destroy')->name('team_destroy');

    Route::get('/our_partners_add', 'AdminController@our_partners_add')->name('our_partners_add');
    Route::post('/our_partners_store', 'IndexController@our_partners_store')->name('our_partners_store');
    Route::post('/our_partners_update', 'IndexController@our_partners_update')->name('our_partners_update');
    Route::get('/our_partners_destroy/{id?}', 'IndexController@our_partners_destroy')->name('our_partners_destroy');

    Route::get('/why_choose_use_preview/{id?}', 'AdminController@why_choose_use_preview')->name('why_choose_use_preview');
    Route::post('/why_choose_use_update', 'AboutController@why_choose_use_update')->name('why_choose_use_update');
    Route::post('/wcu_update', 'AboutController@wcu_update')->name('wcu_update');

    Route::get('/our_clients_add', 'AdminController@our_clients_add')->name('our_clients_add');
    Route::post('/our_clients_store', 'AboutController@our_clients_store')->name('our_clients_store');
    Route::post('/our_clients_update', 'AboutController@our_clients_update')->name('our_clients_update');
    Route::get('/our_clients_destroy/{id?}', 'AboutController@our_clients_destroy')->name('our_clients_destroy');

    Route::get('/timeline_add', 'AdminController@timeline_add')->name('timeline_add');
    Route::get('/timeline_preview/{id?}', 'AdminController@timeline_preview')->name('timeline_preview');
    Route::post('/timeline_store', 'AboutController@timeline_store')->name('timeline_store');
    Route::post('/timeline_update', 'AboutController@timeline_update')->name('timeline_update');
    Route::post('/timeline_destroy', 'AboutController@timeline_destroy')->name('timeline_destroy');

    Route::post('/result_update', 'AboutController@result_update')->name('result_update');

    Route::get('/wps_add', 'AdminController@add_wps')->name('wps_add');
    Route::get('/wps_preview/{id?}', 'AdminController@wps_preview')->name('wps_preview');
    Route::post('/wps_store', 'AboutController@wps_store')->name('wps_store');
    Route::post('/wps_update', 'AboutController@wps_update')->name('wps_update');
    Route::post('/wps_destroy', 'AboutController@wps_destroy')->name('wps_destroy');

    Route::get('/services_add', 'AdminController@services_add')->name('services_add');
    Route::get('/services_preview/{id?}', 'AdminController@services_preview')->name('services_preview');
    Route::post('/services_store', 'ServicesController@services_store')->name('services_store');
    Route::post('/services_update', 'ServicesController@services_update')->name('services_update');
    Route::post('/services_destroy', 'ServicesController@services_destroy')->name('services_destroy');

    Route::get('/add_work', 'AdminController@add_work')->name('add_work');
    Route::get('/add_category', 'AdminController@add_category')->name('add_category');
    Route::get('/work_preview/{id?}', 'AdminController@work_preview')->name('work_preview');
    Route::post('/work_store', 'PortfolioController@work_store')->name('work_store');
    Route::post('/work_update', 'PortfolioController@work_update')->name('work_update');
    Route::post('/work_destroy', 'PortfolioController@work_destroy')->name('work_destroy');
    Route::get('/wc_destroy/{id1}/{id2}', 'PortfolioController@wc_destroy')->name('wc_destroy');
    Route::post('/category_store', 'PortfolioController@category_store')->name('category_store');
    Route::post('/category_update', 'PortfolioController@category_update')->name('category_update');
    Route::post('/category_destroy', 'PortfolioController@category_destroy')->name('category_destroy');


    Route::get('/add_image', 'AdminController@add_image')->name('add_image');
    Route::get('/add_cat', 'AdminController@add_cat')->name('add_cat');
    Route::get('/image_preview/{id?}', 'AdminController@image_preview')->name('image_preview');
    Route::post('/image_store', 'GalleryController@image_store')->name('image_store');
    Route::post('/image_update', 'GalleryController@image_update')->name('image_update');
    Route::post('/image_destroy', 'GalleryController@image_destroy')->name('image_destroy');
    Route::get('/ic_destroy/{id1}/{id2}', 'GalleryController@ic_destroy')->name('ic_destroy');
    Route::post('/cat_store', 'GalleryController@cat_store')->name('cat_store');
    Route::post('/cat_update', 'GalleryController@cat_update')->name('cat_update');
    Route::post('/cat_destroy', 'GalleryController@cat_destroy')->name('cat_destroy');


    Route::post('/picture_store', 'PictureController@picture_store')->name('picture_store');
    Route::post('/picture_update', 'PictureController@picture_update')->name('picture_update');

    Route::post('/text_store', 'PictureController@text_store')->name('text_store');
    Route::post('/text_update', 'PictureController@text_update')->name('text_update');
});
