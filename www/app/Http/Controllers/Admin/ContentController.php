<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;

class ContentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $content = DB::table('content_web')->get();
        return view('content.index')->with('i', (request()->input('page', 1) - 1) * 30)->with('contents', $content);
    }
    public function edit(int $id)
    {
        $content = DB::table('content_web')
            ->where('id', '=', $id)
            ->get();

        return view('content.edit')->with('content', $content);
    }
    public function update(Request $request,$id)
    {
        request()->validate([
            'content' => 'required',
        ]);
        $affected = DB::table('content_web')
            ->where('id',$id)
            ->limit(1)
            ->update(['content' => $request->content],);
        return redirect()->route('content.index')
            ->with('success','Strona została zaktualizowana');
    }
    public function ShowPayment()
    {

        return view('shop.payment');
    }
    public function  ShowPolicy()
    {
        $content = DB::table('content_web')
            ->where('name_web', '=', 'policy')
            ->get();
        return view('shop.policy')->with('content',$content);
    }
    public function ShowShipping()
    {
        return view('shop.shipping');
    }
    public function ShowAbout()
    {
        $content = DB::table('content_web')
            ->where('name_web', '=', 'about')
            ->get();
        return view('shop.about')->with('content',$content);
    }
    public function ShowRefunds()
    {
        $content = DB::table('content_web')
            ->where('name_web', '=', 'refunds')
            ->get();
        return view('shop.refunds')->with('content',$content);
    }
}
