<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth');
    }

    //$user variable is used to fetch all data in the User Models
    //SELECT * FROM User where id = '$user';
    public function store(\App\Models\User $user) 
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
