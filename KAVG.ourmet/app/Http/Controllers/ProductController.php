<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy("id","desc")->paginate(16);

        return $products;
    }
}
