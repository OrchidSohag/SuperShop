<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Redirect;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'supplier' => 'required',
            'unitPrice' => 'required',
            'totalAmount' => 'required',
        ]);
        Purchase::create([
            'product_name' => $request->name,
            'supplier' => $request->supplier,
            'unit_price' => $request->unitPrice,
            'total_amount' => $request->totalAmount,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->route('AdminDashboard')->with('success_message', 'Successfully Enlisted New Purchase');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $purchases = Purchase::all();
        return view('Dashboard.Views.Purchase.ViewPurchase', ['purchase' => $purchases]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function crudButtons()
    {
        $id = Purchase::get(['id']);
        return view('Dashboard.Views.Purchase.UpdateSearchDelete', ['id' => $id]);
    }



    public function updateForm(Request $request)
    {
        $id = $request->id;
        $purchases = Purchase::where('id', $id)->get();
        return view('Dashboard.Views.Purchase.UpdatePurchase', ['purchase' => $purchases, 'id' => $id]);
    }



    public function update(Request $request,$id)
    {
        Purchase::where('id',$id)->update(['product_name'=>"$request->name",
            'supplier'=>"$request->supplier",
            'unit_price'=>"$request->unitPrice",
            'selling_price_unit'=>"$request->sellingPrice",
            'total_amount'=>"$request->totalAmount"]);
        return Redirect::route('PurchaseCRUD');
    }



    public function search(Request $request)
    {
        $id = $request->id;
        $purchases = Purchase::where('id', '=', $id)->get();
        return view('Dashboard.Views.Purchase.ViewPurchase', ['purchase' => $purchases]);
    }





    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
