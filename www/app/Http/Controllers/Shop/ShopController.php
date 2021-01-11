<?php
namespace App\Http\Controllers\Shop;

use App\Models\Product;
use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;

class ShopController extends Controller
{

    public function show(string $name = null,string  $categories = null)
    {
        $products = Product::latest()->paginate(30);
        return view('shop.products',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }
}
