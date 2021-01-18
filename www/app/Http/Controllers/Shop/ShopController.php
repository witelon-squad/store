<?php

namespace App\Http\Controllers\Shop;

use App\Models\Product;
use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use  App\Http\Controllers\Warehouse\WarehouseController;
use DB;
use Validator;


class ShopController extends Controller
{

    public function index(int $id_category = null)
    {
        if ($id_category != null)
            $products = self::products($id_category);
        else
            $products = self::products();
        $category = self::category();
        if ($products->count() == null) {
            $message = 'Brak produktów o tej nazwie';
            return view('shop.products')->with('message', $message)->with('category', $category);
        }
        return view('shop.products')->with('products', $products)->with('i', (request()->input('page', 1) - 1) * 20)->with('category', $category);

    }

    protected function products(int $id_category = null)
    {
        if ($id_category === null)
            $products = Product::latest()->paginate(20);
        else
            $products = Product::latest()->where('id_categories', '=', $id_category)->paginate(20);
        return $products;
    }

    protected function category()
    {
        $category = DB::table('product_categories')->get()->toArray();
        return $category;
    }

    public function SearchProducts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Search' => 'string',
        ]);
        if ($validator->fails()) {
            return view('layout.error')->withErrors($validator)->withInput();
        }
        $name = $request['Search'];
        $category = self::category();
        $products = Product::latest()->where('name', 'LIKE', '%' . $name . '%')->paginate(20);
        if ($products->count() == null) {
            $message = 'Brak produktów o tej nazwie';
            return view('shop.products')->with('message', $message)->with('category', $category);
        }
        return view('shop.products')->with('products', $products)->with('i', (request()->input('page', 1) - 1) * 20)->with('category', $category);

    }

    protected function SearchProductById(int $id = null)
    {
        return $product = Product::latest()->where('id', '=', $id)->get();
    }

    public function GetQuantity(int $id_product = null)
    {
        $quantity = new WarehouseController();
        $qu = $quantity->GetProductQuantity($id_product);
        $quantity = $qu['quantity'];
        return $quantity;
    }

    public function SingleProduct(int $id_product = null)
    {
        $quantity = self::GetQuantity($id_product);
        $product = self::SearchProductById($id_product);
        return view('shop.product')->with('product', $product)->with('quantity', $quantity);
    }
}
