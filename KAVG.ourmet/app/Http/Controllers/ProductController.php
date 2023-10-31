<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy("id","desc")->paginate(16);

        return $products;
    }

    public function getProductsId(Request $request){
        $data = $request->all();

        dd($data);
    }


}
