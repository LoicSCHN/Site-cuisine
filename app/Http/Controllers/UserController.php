<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\User;
use DB;

class UserController extends Controller
{
    public static function loadUtilisateur()
    {
        $User = DB::table('users')
        ->select('users.*')
        ->get();

        return $User;
    }
    public function user()
    {
        return view('pageUtilisateur');
    }
}
