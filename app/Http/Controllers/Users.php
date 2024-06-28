<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Users extends Controller
{
public function index()
{
    $users = User::all();

    return view('users.index', 
    ['users'=>$users]);
}
}
