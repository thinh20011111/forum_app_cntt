<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Front\AccountController;

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

//Login
Route::prefix('account')->group(function () {
    Route::get('login', [\App\Http\Controllers\Front\AccountController::class, 'login']);
    Route::post('login', [\App\Http\Controllers\Front\AccountController::class, 'checkLogin']);
    Route::get('logout', [\App\Http\Controllers\Front\AccountController::class, 'logout']);
    Route::get('register', [\App\Http\Controllers\Front\AccountController::class, 'register']);
    Route::post('register', [\App\Http\Controllers\Front\AccountController::class, 'postRegister']);
});



//Trang chủ
Route::prefix('/')->group(function () {
    Route::get('',  [\App\Http\Controllers\Front\HomeController::class, 'index']);
    Route::get('/what_news',  [\App\Http\Controllers\Front\HomeController::class, 'what_news']);
    Route::get('/new_images',  [\App\Http\Controllers\Front\HomeController::class, 'new_images']);
    Route::get('/new_documents',  [\App\Http\Controllers\Front\HomeController::class, 'new_documents']);
    Route::get('/new_posts',  [\App\Http\Controllers\Front\HomeController::class, 'new_posts']);
    Route::get('/new_posts/post_{id}',  [\App\Http\Controllers\Front\PostController::class, 'show']);
    Route::get('/new_status',  [\App\Http\Controllers\Front\HomeController::class, 'new_status']);
    Route::post('/new_posts/post_{id}/like',  [\App\Http\Controllers\Front\LikeController::class, 'like']);
    Route::post('/new_posts/post_{id}/comment', [\App\Http\Controllers\Front\CommentController::class, 'comment']);
    Route::post('/new_posts/post_{id}/report_post', [\App\Http\Controllers\Front\ReportController::class, 'report_post']);
    Route::delete('/new_posts/post_{post_id}/delete_comment_{comment_id}', [\App\Http\Controllers\Front\CommentController::class, 'destroy']);
    Route::get('/new_posts/post_{postId}/comment_count', [\App\Http\Controllers\Front\CommentController::class, 'getCommentCount']);
    Route::post('/new_posts/post_{postId}/update_comment',[\App\Http\Controllers\Front\CommentController::class, 'update']);
});

Route::prefix('create_post')->middleware('CheckMemberLogin')->group(function () {
    Route::redirect('', 'front/index');
    Route::resource('', App\Http\Controllers\Front\PostController::class); //xử lý thêm bài đăng
});

Route::get('/post/findSubjectName', [\App\Http\Controllers\Front\PostController::class, 'findSubjectName']);
Route::get('/new_posts/findSubjectName', [\App\Http\Controllers\Front\HomeController::class, 'findSubjectName']);
