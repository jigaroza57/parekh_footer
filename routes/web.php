<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home_sliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GetTouchController;
use App\Http\Controllers\InquiryController;


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
//     return view('welcome');
// });


Route::get('/', [BaseController::class, 'index'])->name('index');

Route::get('product', [BaseController::class, 'product'])->name('frontend.product');
Route::get('product/{id}', [BaseController::class, 'product_by_category'])->name('frontend.product_by_category');
Route::get('product_detail/{id}', [BaseController::class, 'product_detail'])->name('frontend.product_detail');
Route::post('inquiry/{id}', [InquiryController::class, 'inquiry'])->name('frontend.inquiry');

Route::get('about_us', [BaseController::class, 'about_us'])->name('frontend.about_us');

Route::get('contact_us', [BaseController::class, 'contact_us'])->name('frontend.contact_us');

Route::post('contact_form_process', [BaseController::class, 'contact_form_process'])->name('contact_form_process');


Route::get('update', [BaseController::class, 'update'])->name('frontend.update');
Route::get('blog', [BaseController::class, 'blog'])->name('frontend.blog');
Route::get('blog_detail/{id}', [BaseController::class, 'blog_detail'])->name('frontend.blog_detail');

Route::get('getTouch', [BaseController::class, 'getTouch'])->name('frontend.getTouch');

Route::get('/search', [BaseController::class, 'search'])->name('search');


Route::get('login', [AdminController::class, 'index']);
Route::post('admin_auth', [AdminController::class, 'login'])->name('adminlogin');

Route::group(['middleware' => 'admin_auth'], function () {

    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('admin/contact_details', [AdminController::class, 'contact_details'])->name('admin.contact_details');
    Route::post('admin/contact_details/{id}', [AdminController::class, 'contact_details_update'])->name('admin.contact_details_update');

    Route::get('admin/home_setting', [AdminController::class, 'home_setting'])->name('admin.home_setting');
    Route::post('admin/home_setting/{id}', [AdminController::class, 'home_setting_update_logo'])->name('admin.home_setting_update_logo');
    Route::post('admin/home_setting_update_product_d/{id}', [AdminController::class, 'home_setting_update_product_d'])->name('admin.home_setting_update_product_d');

    Route::get('admin/about_us', [AdminController::class, 'about_us'])->name('admin.about_us');
    Route::post('admin/about_us/{id}', [AdminController::class, 'about_us_update'])->name('admin.about_us_update');
    Route::get('admin/add_about_slider', [AdminController::class, 'add_about_slider'])->name('admin.add_about_slider');
    Route::post('admin/add_about_slider', [AdminController::class, 'create_about_slider'])->name('admin.add_about_slider');
    Route::get('admin/update_about_slider/{id}', [AdminController::class, 'edit_about_slider'])->name('admin.update_about_slider');
    Route::post('admin/update_about_slider/{id}', [AdminController::class, 'update_about_slider'])->name('admin.update_about_slider');
    Route::get('admin/delete_about_slider/{id}', [AdminController::class, 'delete_about_slider'])->name('admin.delete_about_slider');

    Route::get('admin/updates', [AdminController::class, 'updates'])->name('admin.updates');
    Route::post('admin/edit_update/{id}', [AdminController::class, 'editstore_update'])->name('admin.editstore_update');
    Route::get('admin/delete_update/{id}', [AdminController::class, 'delete_update'])->name('admin.delete_update');

    Route::get('admin/blog', [BlogController::class, 'blog'])->name('admin.blog');
    Route::get('admin/add_blog', [BlogController::class, 'add_blog'])->name('admin.add_blog');
    Route::post('admin/add_blog', [BlogController::class, 'store_blog'])->name('admin.store_blog');
    Route::get('admin/edit_blog/{id}', [BlogController::class, 'edit_blog'])->name('admin.edit_blog');
    Route::post('admin/update_blog/{id}', [BlogController::class, 'update_blog'])->name('admin.update_blog');
    Route::get('admin/delete_blog/{id}', [BlogController::class, 'delete_blog'])->name('admin.delete_blog');

    Route::get('admin/getTouch', [GetTouchController::class, 'getTouch'])->name('admin.getTouch');
    Route::get('admin/add_getTouch', [GetTouchController::class, 'add_getTouch'])->name('admin.add_getTouch');
    Route::post('admin/store_getTouch', [GetTouchController::class, 'store_getTouch'])->name('admin.store_getTouch');
    Route::get('admin/delete_getTouch/{id}', [GetTouchController::class, 'delete_getTouch'])->name('admin.delete_getTouch');


    Route::get('admin/contact_us_data', [AdminController::class, 'contact_us_data'])->name('admin.contact_us_data');
    Route::get('admin/inquiry', [AdminController::class, 'inquiry'])->name('admin.inquiry');


    Route::get('admin/home_slider', [Home_sliderController::class, 'index'])->name('admin.home_slider');
    Route::get('admin/add_home_slider', [Home_sliderController::class, 'create'])->name('admin.add_home_slider');
    Route::post('admin/add_home_slider', [Home_sliderController::class, 'store'])->name('admin.add_home_slider');
    Route::get('admin/update_home_slider/{id}', [Home_sliderController::class, 'edit'])->name('admin.update_home_slider');
    Route::post('admin/update_home_slider/{id}', [Home_sliderController::class, 'update'])->name('admin.update_home_slider');
    Route::get('admin/delete_home_slider/{id}', [Home_sliderController::class, 'delete'])->name('admin.delete_home_slider');

    Route::get('admin/jewellery_section', [AdminController::class, 'jewellery_section'])->name('admin.jewellery_section');
    Route::post('admin/jewellery_section_detail/{id}', [AdminController::class, 'jewellery_section_detail'])->name('admin.jewellery_section_detail');
    Route::post('admin/jewellery_section_image1/{id}', [AdminController::class, 'jewellery_section_image1'])->name('admin.jewellery_section_image1');
    Route::post('admin/jewellery_section_image2/{id}', [AdminController::class, 'jewellery_section_image2'])->name('admin.jewellery_section_image2');
    Route::post('admin/jewellery_section_image3/{id}', [AdminController::class, 'jewellery_section_image3'])->name('admin.jewellery_section_image3');
    Route::post('admin/jewellery_section_image4/{id}', [AdminController::class, 'jewellery_section_image4'])->name('admin.jewellery_section_image4');
    Route::post('admin/jewellery_section_image5/{id}', [AdminController::class, 'jewellery_section_image5'])->name('admin.jewellery_section_image5');
    Route::post('admin/jewellery_section_image6/{id}', [AdminController::class, 'jewellery_section_image6'])->name('admin.jewellery_section_image6');

    Route::get('admin/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('admin/add_category', [CategoryController::class, 'add_category'])->name('admin.add_category');
    Route::post('admin/add_category', [CategoryController::class, 'store'])->name('admin.add_category');
    Route::get('admin/update_category/{id}', [CategoryController::class, 'edit'])->name('admin.update_category');
    Route::post('admin/update_category/{id}', [CategoryController::class, 'update'])->name('admin.update_category');
    Route::get('admin/delete_category/{id}', [CategoryController::class, 'delete'])->name('admin.delete_category');

    Route::get('admin/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('admin/add_product', [ProductController::class, 'add_product'])->name('admin.add_product');
    Route::post('admin/add_product', [ProductController::class, 'store'])->name('admin.add_product');
    Route::get('admin/update_product/{id}', [ProductController::class, 'edit'])->name('admin.update_product');
    Route::post('admin/update_product/{id}', [ProductController::class, 'update'])->name('admin.update_product');
    Route::get('admin/delete_product/{id}', [ProductController::class, 'delete'])->name('admin.delete_product');



    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error', 'Logout Successfully');
        return redirect('login');
    });
});
