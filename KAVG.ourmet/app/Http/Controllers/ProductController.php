<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy("id","desc")->paginate(16);

        return $products;
    }

    public function getProductsId($id){
        
        $products = Product::where('id', $id)->first();
        
        return view('detailProduct', ['products' => $products]);

    
    }

    public function destroy(Request $request)
    {
        $user = Product::find($request->product_id);
        $user->delete();

        return Redirect::route('dashboard');
    }


}
