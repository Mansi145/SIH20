<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{
    public function createNewUser()
    {
    	return view('register');
    }

    public function storeNewUser(Request $request)
    {
    	$vaidatedData = $request->validate([
    	    'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
    	    ]);


    	$data = $request->all();
    	$user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => isset($data['super_admin']) ? 1 : 0,	
        ]);
        return back();
    }

}

