<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DataTables;

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
        return back()->with(['msg' =>'User created successfully', 'class' => 'alert-success']);
    }

    public function listUsers()
    {
        return Datatables::of(User::query())
            ->editColumn('name', function (User $u) {
                return '<a href="'.url('user/'.$u->id).'" target="_blank"><u>'.$u->name.'</u><a>';
            })
            ->editColumn('created_at', function (User $u) {
                return $u->created_at->diffForHumans();
            })
            ->addColumn('action', function (User $u) {
                return '<a href="'.url('user/edit/'.$u->id).'" target="_blank" class="btn btn-primary">
                <i class="fas fa-pencil-alt mr-1"></i> Edit</a> &nbsp;
                <a href="'.url('user/delete/'.$u->id).'" class="btn btn-danger">
                <i class="fas fa-trash-alt mr-1"></i> Delete</a>';
            })
            ->rawColumns([
                'name',
                'action'
            ])
            ->make(true);
    }
}
