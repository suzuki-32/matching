<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Danger;
use App\Post;
use App\User;
use App\Application;

class RegistrationController extends Controller
{
    //違反報告画面からホーム画面（DB登録）
    public function dangerpost2(Request $request)
    {
        $danger = new Danger;
        $danger->user_id = $request->user_id;
        $danger->post_id = $request->post_id;
        $danger->detail = $request->detail;
        $danger->save();
        return redirect('/');
    }

    public function requestcheck(Request $request)
    {
        // 入力内容を確認画面に渡す
        return view('request', [
            'detail' => $request->input('detail'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'DueDate' => $request->input('DueDate'),
        ]);
    }

    public function request(Request $request)
    {
        $application = new Application;
        //設定をNULLにしているからログイン実装後戻す
        $application->user_id = $request->user_id;
        $application->detail = $request->detail;
        $application->phone = $request->phone;
        $application->email = $request->email;
        $application->DueDate = $request->DueDate;
        $application->save();
        return redirect('/');
    }

    public function signcheck(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'name' => 'required|string|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // 確認画面に必要なデータを渡す
        return view('signup', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'image' => $validated['image'], // 画像パスを渡す
        ]);
    }

    public function sign(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->image = $request->image;
        $user->save();

        return redirect('/'); // 登録完了後のリダイレクト
    }













    public function userupdate()
    {
        // $user = Auth::user();

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->save();

        return redirect("/");
    }
    public function userdelete()
    {
        // $user = Auth::user();
        // $user->delete();

        return view("userdelete");
    }
    public function deletemypage()
    {
        // $user = Auth::user();
        // $user->delete();

        return redirect("/");
    }
}
