<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rules\In;

class DisplayController extends Controller
{
    //ホーム画面
    public function index()
    {
        $post = new Post;
        $all = $post->all();
        return view('home', [
            'posts' => $all,
        ]);
    }
    //ポスト詳細画面
    public function allpost(int $postID)
    {
        $post = Post::findOrFail($postID); // IDが存在しない場合は404を返す
        return view('postdetail', compact('post'));
    }

    //詳細から違反報告
    public function dangerpost(int $postID)
    {
        $post = Post::findOrFail($postID); // IDが存在しない場合は404を返す
        return view('dangerpost', compact('post'));
    }

    public function request(int $postID)
    {
        $post = Post::findOrFail($postID); // IDが存在しない場合は404を返す
        return view('requestpost', compact('post'));
    }

        public function login()
    {
        return view('login');
    }
        public function signnew()
    {
        return view('signnew');
    }
}





    // public function index(){
    //     return view('mypage');
    // }

    // public function useredit()
    // {
    //     return view('useredit');
    // }




    // public function home()
    // {
    //     $user = Auth::user();
    //     $user->save();        
    //     return view('home');
    // }

    // public function password()
    // {
    //     return view('password');
    // }
    // public function signnew()
    // {
    //     return view('signnew');
    // }
    // public function signup(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);
    
    //     return view('signup.confirm', [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //     ]);
    // }
    
    // public function signfin()
    // {
    //     return view('sign');
    // }
