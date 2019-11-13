<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Users_Detail;

class profileController extends Controller
{
    public function index($id)
    {
    	$profile_user = User::query()
        ->leftJoin("users_detail","users_detail.id","=","users.user_id")
        ->where('users.id', '=', $id)
        ->get(['*','users.id as userId']);

    	return view('profile.index', compact('profile_user'));
    }
}