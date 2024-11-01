<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetController;




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
//ホーム画面
Route::get('/', [DisplayController::class, 'index'])-> name('home');
//ポスト詳細画面
Route::get('/post/{id}/detail',[DisplayController::class,'allpost']) -> name('post.all');
//詳細から違反報告
Route::get('/post/{id}/danger',[DisplayController::class,'dangerpost']) -> name('danger.post');
//違反報告画面からホーム画面（DB登録）
Route::post('/post/danger2',[RegistrationController::class,'dangerpost2']) -> name('danger.post2');
//詳細から戻るボタン
Route::get('/request/{id}/post',[DisplayController::class,'request']) -> name('request.post');
//依頼申請から確認画面
Route::post('/request/check', [RegistrationController::class, 'requestcheck'])->name('request.check');
Route::post('/request', [RegistrationController::class, 'request'])->name('request');

//ログイン画面へ遷移
Route::get('/login',[DisplayController::class,'login']) -> name('login');
//新規登録画面へ遷移
Route::get('/signnew',[DisplayController::class,'signnew']) -> name('sign.new');
//新規登録確認画面へ遷移
Route::post('/signcheck', [RegistrationController::class, 'signcheck'])->name('sign.check');
//確認画面から完了画面へ
Route::post('/sign',[RegistrationController::class,'sign']) -> name('sign');

//新規登録
// Route::get('/signnew',[DisplayController::class,'signnew'])->name('sign.new');
// Route::post('/signfin',[DisplayController::class,'signfin'])->name('sign.fin');
// Route::post('/home',[DisplayController::class,'home'])->name('home');

// Route::post('/signup', [DisplayController::class, 'signup'])->name('sign.up');




// // ユーザーの編集遷移・登録
// Route::get('/useredit', [DisplayController::class, 'useredit'])->name('user.edit');
// Route::post('/usere/update', [RegistrationController::class, 'userupdate'])->name('user.update');
// // ユーザーの退会画面遷移・退会機能
// Route::get('/user/delete', [DisplayController::class, 'userdeleteconfirm'])->name('user.delete');
// Route::post('/user/delete', [RegistrationController::class, 'userdelete'])->name('user.delete');
// // Route::resource('users', UserController::class);
// //退会ボタンでマイページへ
// Route::post('/mypage', [RegistrationController::class, 'deletemypage'])->name('delete.mypage');


// //パスワード再設定
// Route::get('/password',[DisplayController::class,'password'])->name('password.reset');
// Route::post('/password/email', [PasswordResetController::class, 'resetmail'])->name('reset.mail');


