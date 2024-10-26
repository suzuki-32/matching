<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DisplayController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function password()
    {
        return view('password');
    }
    public function signnew()
    {
        return view('signnew');
    }
    public function signup()
    {
        return view('signup');
    }
    public function signfin()
    {
        return view('sign');
    }
    public function home()
    {
        return view('home');
    }
    
    // public function index(){
    //     return view('mypage');
    // }

    // public function useredit()
    // {
    //     return view('useredit');
    // }
}
