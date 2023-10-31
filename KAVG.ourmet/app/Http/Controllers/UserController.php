<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy("id", "desc")->paginate(10);

        return $users;
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->user_id);
        $user->delete();

        return Redirect::route('dashboard');
    }
}
