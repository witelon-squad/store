<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Warehouse\WarehouseController;
use App\Models\Product;
use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use App\Http\Controllers\Shop\ShopController;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function cart()
    {
        return view('shop.cart');
    }

    protected function checkCart(int $id)
    {
        $shop = new ShopController();
        $quantity = $shop->GetQuantity($id);
        $cart = session()->get('cart');
        if ($cart[$id]['quantity'] > $quantity) {
            $cart[$id]['quantity'] = 1;
        } else {
            return view('shop.cart');
        }
    }

    public function addToCart(int $id)
    {
        $product = Product::find($id);
        if (!$product) {

            abort(404);

        }
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];
            session()->put('cart', $cart);
            self::checkCart($id);
            return view('shop.cart');
        }
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
            self::checkCart($id);
            return redirect()->back()->with('success', 'Produkt został dodany do koszyka');
        }

        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);
        self::checkCart($id);
        return redirect()->back()->with('success', 'Produkt został dodany do koszyka');
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            $subTotal = $cart[$request->id]['quantity'] * $cart[$request->id]['price'];

            $total = $this->getCartTotal();
            return view('shop.cart');
        }
    }

    public function remove(int $id)
    {

        $products = Product::all();

        $cart = session()->get('cart');

        if (isset($cart[$id])) {

            unset($cart[$id]);

            Session::put('cart', $cart);


            $total = $this->getCartTotal();
            return redirect()->back()->with('success', 'Produkt został usunięty');
        }
    }


    /**
     * getCartTotal
     *
     *
     * @return float|int
     */
    private function getCartTotal()
    {
        $total = 0;

        $cart = session()->get('cart');

        foreach ($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }
        return number_format($total, 2);
    }
}
