<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy("id","desc")->paginate(10);

        return $users;
    }
}
