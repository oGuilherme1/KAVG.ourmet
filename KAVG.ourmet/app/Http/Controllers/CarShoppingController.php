<?php

namespace App\Http\Controllers;

use App\Models\CarShopping;

class CarShoppingController extends Controller
{
    public function index(){
        $carShopping = CarShopping::orderBy("created_at","desc")->paginate(10);

        return $carShopping;
    }
}
