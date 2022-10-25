<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{

    public function registerUser(Request $request)
    {
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );
        return back()->with('success', 'You have successfully registered');
    }
}

//link youtube : https://www.youtube.com/watch?v=HMyWg5JxrZg&list=PLT_UEW4XhFeCYwu1gT89Bo7qlSX2UG4K2&ab_channel=TuncayElvana%C4%9Fa%C3%A7
