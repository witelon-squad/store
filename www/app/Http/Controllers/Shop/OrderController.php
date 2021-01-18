<?php

namespace App\Http\Controllers\Shop;

use App\Models\Product;
use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use  App\Http\Controllers\Warehouse\WarehouseController;
use Session;
use Auth;
use DB;
use Validator;


class OrderController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        if(empty($cart))
        {
            return view('shop.cart')->with('success','Koszyk jest pusty');
        }
        self::check();
        return view('shop.order');
    }

    private function check()
    {
        $check_quantity = new WarehouseController();
        $cart = session()->get('cart');
        $product_id = array_keys($cart);
        foreach ($product_id as $id) {
            $rensponse[] = $check_quantity->GetProductQuantity($id);
        }
        foreach ($cart as $data) {
            foreach ($rensponse as $row) {
                if ($data['quantity'] == $row['quantity']) {

                }
                else {
                    return view('shop.cart')->with('success','Takiej ilości nie mamy na stanie');
                }
            }

        }
    }
    public function create(Request $request)
    {
        request()->validate([
            'cityAdresInput' => 'required',
            'postcodeInput' => 'required',
            'streetInput' => 'required',
        ]);
        $adress = $request->streetInput . " " . $request->postcodeInput . " " . $request->cityAdresInput;
        $cart = session()->get('cart');
        $product_id = array_keys($cart);
        $products = implode(",",$product_id);
        DB::table('orders')->insert([
            'status' => 'create',
            'id_user' => Auth::id(),
            'products_id' => $products,
            'address' => $adress,
            'value' => self::getCartTotal(),
        ]);
        session()->forget('cart');
        return view('shop.orderComplete');
    }
    private function getCartTotal()
    {
        $total = 0;

        $cart = session()->get('cart');

        foreach ($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }
        return $total;
    }
    public function getOrder()
    {
        $content = DB::table('orders')
            ->where('id_user', '=', Auth::id())
            ->get();
        return view('user.orders')->with('content',$content)->with('i', (request()->input('page', 1) - 1) * 30);
    }
}
