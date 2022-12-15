<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'show']);
    Route::get('admin', [App\Http\Controllers\DashboardController::class, 'show']);
    
    Route::get('admin/user/list',[App\Http\Controllers\AdminUserController::class, 'list']);
    Route::get('admin/user/add',[App\Http\Controllers\AdminUserController::class, 'add']);
    Route::post('admin/user/store',[App\Http\Controllers\AdminUserController::class, 'store']);

    Route::get('admin/user/delete/{id}',[App\Http\Controllers\AdminUserController::class, 'delete'])->name('delete_user');

    Route::post('admin/user/action',[App\Http\Controllers\AdminUserController::class, 'action']);

    Route::get('admin/user/edit/{id}',[App\Http\Controllers\AdminUserController::class, 'edit'])->name('user.edit');
    Route::post('admin/user/update/{id}',[App\Http\Controllers\AdminUserController::class, 'update'])->name('user.update');

    //Product
    Route::get('admin/product/list',[App\Http\Controllers\AdminProductController::class, 'list']);
    Route::get('admin/product/delete/{id}',[App\Http\Controllers\AdminProductController::class, 'delete'])->name('delete_product');

    Route::get('admin/product/edit/{id}',[App\Http\Controllers\AdminProductController::class, 'edit'])->name('product_edit');
    Route::post('admin/product/update/{id}',[App\Http\Controllers\AdminProductController::class, 'update'])->name('product_update');

    Route::get('admin/product/add',[App\Http\Controllers\AdminProductController::class, 'add']);
    Route::post('admin/product/store',[App\Http\Controllers\AdminProductController::class, 'store']);

    //product-cat
    Route::get('admin/product/cat/add',[App\Http\Controllers\AdminProductController::class, 'add_cat']);
    Route::post('admin/product/cat/store',[App\Http\Controllers\AdminProductController::class, 'store_cat']);
    Route::get('admin/product/cat/delete/{id}',[App\Http\Controllers\AdminProductController::class, 'delete_cat'])->name('delete_cat');
    Route::get('admin/product/cat/edit/{id}',[App\Http\Controllers\AdminProductController::class, 'edit_cat'])->name('edit_cat');
    Route::post('admin/product/cat/update/{id}',[App\Http\Controllers\AdminProductController::class, 'update_cat'])->name('update_cat');


    //Post
    Route::get('admin/post/list',[App\Http\Controllers\AdminPostController::class, 'list']);
    Route::get('admin/post/delete/{id}',[App\Http\Controllers\AdminPostController::class, 'delete'])->name('delete_post');

    Route::get('admin/post/edit/{id}',[App\Http\Controllers\AdminPostController::class, 'edit'])->name('edit_post');
    Route::post('admin/post/update/{id}',[App\Http\Controllers\AdminPostController::class, 'update'])->name('update_post');

    Route::get('admin/post/add',[App\Http\Controllers\AdminPostController::class, 'add']);
    Route::post('admin/post/store',[App\Http\Controllers\AdminPostController::class, 'store']);

    //Post-cat
    Route::get('admin/post/cat/add',[App\Http\Controllers\AdminPostController::class, 'add_cat']);
    Route::post('admin/post/cat/store',[App\Http\Controllers\AdminPostController::class, 'store_cat']);
    Route::get('admin/post/cat/delete/{id}',[App\Http\Controllers\AdminPostController::class, 'delete_cat'])->name('delete_cat');
    Route::get('admin/post/cat/edit/{id}',[App\Http\Controllers\AdminPostController::class, 'edit_cat'])->name('edit_cat');
    Route::post('admin/post/cat/update/{id}',[App\Http\Controllers\AdminPostController::class, 'update_cat'])->name('update_cat');

});


//GUESS
Route::get('/',[\App\Http\Controllers\GuessHomeController::class, 'show']);
Route::get('/home',[\App\Http\Controllers\GuessHomeController::class, 'show'])->name('home');

Route::get('/search',[\App\Http\Controllers\GuessHomeController::class, 'search'])->name('search');




Route::get('detail_product/show/{id}',[\App\Http\Controllers\GuessDetailProductController::class, 'show'])->name('detail_product');

Route::get('cart/show',[\App\Http\Controllers\GuessCartController::class, 'show']);
Route::get('cart/add/{id}',[\App\Http\Controllers\GuessCartController::class, 'add'])->name('cart.add');
Route::post('cart/update',[\App\Http\Controllers\GuessCartController::class, 'update'])->name('cart.update');

Route::get('cart/add',[\App\Http\Controllers\GuessCartController::class, 'cart'])->name('cart');
Route::get('cart/checkout',[\App\Http\Controllers\GuessCartController::class, 'checkout'])->name('checkout');
Route::get('cart/order',[\App\Http\Controllers\GuessCartController::class, 'order'])->name('order');

Route::get('cart/remove/{rowId}',[\App\Http\Controllers\GuessCartController::class, 'remove'])->name('cart.remove');
Route::get('cart/destroy',[\App\Http\Controllers\GuessCartController::class, 'destroy'])->name('cart.destroy');

Route::get('checkout/show',[\App\Http\Controllers\GuessCheckOutController::class, 'show']);

Route::get('blog/show',[\App\Http\Controllers\GuessBlogController::class, 'show']);
Route::get('detail-blog/show/{id}',[\App\Http\Controllers\GuessDetailBlogController::class, 'show'])->name('detail-blog');

Route::get('category/show/{id}',[\App\Http\Controllers\GuessCategoryController::class, 'show'])->name('category');
Route::get('product/show',[\App\Http\Controllers\GuessProductController::class, 'show']);

Route::get('introduce/show',[\App\Http\Controllers\GuessIntroduceController::class, 'show']);
Route::get('contact/show',[\App\Http\Controllers\GuessContactController::class, 'show']);















