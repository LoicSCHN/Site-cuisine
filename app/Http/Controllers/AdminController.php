<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AdminController;
use App\User;
use DB;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
}
