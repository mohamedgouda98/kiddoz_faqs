<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::redirect('/home', '/admin');
Route::redirect('/', '/login');
Auth::routes(['register' => false]);

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::group(['as' => 'endUser.'], function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('parents', 'HomeController@parent')->name('parent');
        Route::get('staff', 'HomeController@staff')->name('staff');
        Route::get('packages', 'HomeController@packages')->name('packages');
        Route::get('features', 'HomeController@features')->name('features');
        Route::get('contact', 'HomeController@contactUs')->name('contact-us');
        Route::get('about', 'HomeController@aboutUs')->name('about-us');
        Route::get('article', 'HomeController@articles')->name('articles');
        Route::get('categories/check_slug', 'CategoryController@check_slug')->name('categories.check_slug');
        Route::get('categories/{slug}/{category}', 'CategoryController@show')->name('categories.show');
        Route::get('tags/check_slug', 'TagController@check_slug')->name('tags.check_slug');
        Route::get('tags/{slug}/{tag}', 'TagController@show')->name('tags.show');
        Route::get('articles/check_slug', 'ArticleController@check_slug')->name('articles.check_slug');
        Route::get('articles/{slug}/{article}', 'ArticleController@show')->name('articles.show');
        Route::get('articles', 'ArticleController@index')->name('');
        Route::get('single_article/{article:slug}', 'ArticleController@single_article')->name('articles.single_article');
        Route::get('faqs', 'FaqController@index')->name('faqs');
        Route::get('/faq-category/{category}', 'FaqController@getFaqsByCategory')->name('faq.category');

    });

});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');

    // Tags
    Route::delete('tags/destroy', 'TagsController@massDestroy')->name('tags.massDestroy');
    Route::resource('tags', 'TagsController');

    // Articles
    Route::delete('articles/destroy', 'ArticlesController@massDestroy')->name('articles.massDestroy');
    Route::resource('articles', 'ArticlesController');

    // Faq Categories
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');
    Route::post('upload', 'ArticlesController@uploadImage')->name('image-upload');

    // Faq Questions
    Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');
});


