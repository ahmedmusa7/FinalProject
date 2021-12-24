<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeControl extends Controller
{
    function index()
    {
        return view("home");
    }
    function redirectFunct()
    {
        $role=Auth::user()->role;

        if($role=="Project Manager")
        {
            return view('admin.adminpage');
        }
        else
        {
            return view('home');
        }
    }
}
