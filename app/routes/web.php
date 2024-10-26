<?php

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

Route::get('/', [DisplayController::class, 'index'])->name('login');
//パスワード再設定
Route::get('/password',[DisplayController::class,'password'])->name('password.reset');
Route::post('/password/email', [PasswordResetController::class, 'resetmail'])->name('reset.mail');

//新規登録
Route::get('/signnew',[DisplayController::class,'signnew'])->name('sign.new');
Route::post('/signup',[DisplayController::class,'signup'])->name('sign.up');
Route::post('/signfin',[DisplayController::class,'signfin'])->name('sign.fin');
Route::get('/home',[DisplayController::class,'home'])->name('home');




// // ユーザーの編集遷移・登録
// Route::get('/useredit', [DisplayController::class, 'useredit'])->name('user.edit');
// Route::post('/usere/update', [RegistrationController::class, 'userupdate'])->name('user.update');
// // ユーザーの退会画面遷移・退会機能
// Route::get('/user/delete', [DisplayController::class, 'userdeleteconfirm'])->name('user.delete');
// Route::post('/user/delete', [RegistrationController::class, 'userdelete'])->name('user.delete');
// // Route::resource('users', UserController::class);
// //退会ボタンでマイページへ
// Route::post('/mypage', [RegistrationController::class, 'deletemypage'])->name('delete.mypage');

