<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;

class DeliveryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $delivery = DB::table('delivery')
            ->get();
        return view('delivery.index')->with('delivery', $delivery)->with('i', (request()->input('page', 1) - 1) * 30);
    }

    public function edit(int $id)
    {
        $delivery = DB::table('delivery')
            ->where('id',$id)
            ->get();
        return view('delivery.edit')->with('delivery',$delivery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        request()->validate([
            'type' => 'required',
            'prepayment' => 'required',
            'charging' => 'required',
            'delivery_time' => 'required',
        ]);
        $delivery = DB::table("delivery")
            ->where("id", $id)
            ->insert([
                'type' => $request->type,
                'prepayment' => $request->prepayment,
                'charging' => $request->charging,
                'delivery_time' => $request->delivery_time,
            ])
            ->all();
        return redirect()->route('delivery.index')
            ->with('success', 'Wysyłka została zaktualizowana');
    }

    public function create()
    {
        return view('delivery.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'type' => 'required',
            'prepayment' => 'required',
            'charging' => 'required',
            'delivery_time' => 'required',
        ]);
        $delivery = DB::table("delivery")->insert([
            'type' => $request->type,
            'prepayment' => $request->prepayment,
            'charging' => $request->charging,
            'delivery_time' => $request->delivery_time,
        ]);

        return redirect()->route('delivery.index')
            ->with('success','Dostawa została utworzona');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        DB::table("delivery")->where('id', $id)->delete();
        return redirect()->route('delivery.index')
            ->with('success', 'Usunięto');
    }

    public function ShowShipping()
    {
        $delivery = DB::table('delivery')
            ->get();
        return view('shop.shipping')->with('delivery', $delivery);
    }
}
