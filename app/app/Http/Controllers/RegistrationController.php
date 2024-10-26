<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function userupdate()
    {
        // $user = Auth::user();

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->save();

        return redirect ("/");
    }
    public function userdelete()
    {
        // $user = Auth::user();
        // $user->delete();

        return view ("userdelete");
    }
    public function deletemypage()
    {
        // $user = Auth::user();
        // $user->delete();

        return redirect ("/");
    }
}
