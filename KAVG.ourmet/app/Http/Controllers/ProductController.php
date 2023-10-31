<?php

namespace App\Http\Controllers;

use App\Models\Product;
<<<<<<< HEAD
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
>>>>>>> 900d4f02491f88e6673ccb2303a8f7c0a22fff24

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy("id","desc")->paginate(16);

        return $products;
    }

<<<<<<< HEAD
    public function getProductsId(Request $request){
        $data = $request->all();

        dd($data);
    }


=======
    public function destroy(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->delete();

        return Redirect::route('dashboard');
    }
>>>>>>> 900d4f02491f88e6673ccb2303a8f7c0a22fff24
}
