<?php

namespace App\Http\Controllers;

use App\Models\CarShopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarShoppingController extends Controller
{
    public function index(){
        $carShopping = CarShopping::orderBy("created_at","desc")->paginate(10);

        return $carShopping;
    }

    public function destroy(Request $request)
    {
        $user = CarShopping::find($request->car_shopping_id);
        $user->delete();

        return Redirect::route('dashboard');
    }
}
