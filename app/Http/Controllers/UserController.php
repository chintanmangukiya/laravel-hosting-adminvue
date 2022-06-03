<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // $listUser = User::get();
        $listUser = User::with(['users'])->get();
        return view('users.list',compact('listUser'));
    }
    public function users()
    {
        // $listUser = User::get();
        $listUser = User::with(['users'])->paginate(2);
        return $listUser;
    }
}
