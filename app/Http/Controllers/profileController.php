<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Users_Detail;
use Session;

class profileController extends Controller
{
    public function index($id)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'Anda Harus Login Terlebih Dahulu !');
        } else {
            $profile_user = User::query()
            ->leftJoin("users_detail", "users_detail.id", "=", "users.user_id")
            ->where('users.id', '=', $id)
            ->get(['*','users.id as userId']);
            
            // dd($profile_user);
            return view('profile.index', compact('profile_user'));
        }
    }
}
