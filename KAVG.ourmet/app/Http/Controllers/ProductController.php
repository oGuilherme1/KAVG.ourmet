<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy("id","desc")->paginate(16);

        return $products;
    }

    public function destroy(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->delete();

        return Redirect::route('dashboard');
    }
}
