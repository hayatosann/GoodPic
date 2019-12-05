<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{
    //
    public function show($user_id)
    {
        $user = User::Where('id',$user_id)->firstOrFail();

        return view('user/show', ['user'=>$user]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('user/edit', ['user'=> $user]);
    }
}
