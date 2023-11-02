<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CarShopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarShoppingController extends Controller
{
    public function index()
    {
        $carShopping = CarShopping::orderBy("created_at", "desc")->paginate(10);

        return $carShopping;
    }

    public function add(Product $product)
    {
        $cart = session()->get('cart', []);

        if (!isset($cart[$product->id])) {
            $cart[$product->id] = [
                "id" => $product->id,
                "name" => $product->name,
                "imagem" => $product->imagem,
                "valor" => $product->valor,
                "descricao" => $product->descricao,
                'quantidade' => 0
            ];
        }


        $cart[$product->id]['quantidade']++;
        $cart[$product->id]['valor'] = $product->valor * $cart[$product->id]['quantidade'];

        session()->put('cart', $cart);

        return back()->with('mensagem', 'A operação foi realizada com sucesso!');
    }

    public function remove(Product $product)
    {
        // $cart = session()->get('cart', []);

        // if (isset($cart[$product->id])) {
        //     $cart[$product->id]['quantidade']--;

        //     if ($cart[$product->id]['quantidade'] <= 0) {
        //         unset($cart[$product->id]);
        //     }

        //     session()->put('cart', $cart);
        // }

        // Dentro do seu controlador ou rota
        session()->flush();


        return back()->with('mensagem', 'A operação foi realizada com sucesso!');
    }
    public function verSessao()
    {
        $cart = session()->get('cart', []);

        return $cart;
    }

    public function destroy(Request $request)
    {
        $user = CarShopping::find($request->car_shopping_id);
        $user->delete();

        return Redirect::route('dashboard');
    }
}
