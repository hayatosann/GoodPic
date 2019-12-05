<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    public function show($user_id)
    {
        $user = User::Where('id',$user_id)->firstOrFail();

        return view('user/show', ['user'=>$user]);
    }
}
