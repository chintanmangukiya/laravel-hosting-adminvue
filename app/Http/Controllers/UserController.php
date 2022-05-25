<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $listUser = User::get();
        return view('users.list',compact('listUser'));
    }
}
