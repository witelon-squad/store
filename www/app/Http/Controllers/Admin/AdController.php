<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;

class AdController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $ad = DB::table('products')
            ->join('ad', 'ad.product_id', '=', 'products.id')
            ->select('products.name','ad.id','ad.from_ad',)
            ->get();
        return view('ad.index')->with('i', (request()->input('page', 1) - 1) * 30)->with('ad', $ad);

    }
    public function ShowAd()
    {
        $ad = DB::table('products')
            ->join('ad', 'ad.product_id', '=', 'products.id')
            ->select('products.name','products.image','products.id','products.price')
            ->get();
        return view('index')->with('ad', $ad);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('ad.create')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'product' => 'required',
        ]);
        DB::table('ad')->insert([
            'product_id' => $request->product,
            'from_ad' => date('Y-m-d H:i:s')
        ]);

        return redirect()->route('ad.index')
            ->with('success','Produkt został dodany do promowania');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("ad")->where('id',$id)->delete();
        return redirect()->route('ad.index')
            ->with('success','Usunięto');
    }
}
