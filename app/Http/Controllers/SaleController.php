<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sale;
use App\Notifications\QuantityAlarming;
use Illuminate\Http\Request;
use Redirect;

class SaleController extends Controller
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
        $productID = Product::get(['product_id']);
        $customerID = Customer::get(['id']);
        return view('Dashboard.Views.Sales.SellProducts', ['productID' => $productID, 'customerID' => $customerID]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $quantity = Product::where('product_id','=',$request->productID)->pluck('stock_quantity');
//       $quantity = trim((integer)$quantity);
        $aquantity = Product::where('product_id','=',$request->productID)->pluck('alarm_quantity');

        foreach ($quantity as $a)
       {$q = $a;}
        foreach ($aquantity as $a)
        {$aq = $a;}
       $this->validate($request, [
            'customerID' => 'required',
            'productID' => 'required',
            'quantity' => "required|integer|between:1,$q",
            'amount' => 'required',
            'paid' => 'required',
            'due' => 'required',
        ]);
        Sale::create([
            'customer_id' => $request->customerID,
            'product_id' => $request->productID,
            'quantity' => $request->quantity,
            'total_amount' => $request->amount,
            'paid_amount' => $request->paid,
            'due_amount' => $request->due,
        ]);
        $cquantity = $q - $request->quantity;
        Product::where('product_id',$request->productID)
            ->update(['stock_quantity'=>$cquantity]);
        if($cquantity <= $aq)
        {
            $purchase = Purchase::where('id', $request->productID)->get();
            foreach ($purchase as $p)
            {
                auth()->user()->notify(new QuantityAlarming($p));
            }
        }

        return redirect()->route('AdminDashboard')->with('success_message', 'You are successfully register');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sales = Sale::all();
        return view('Dashboard.Views.Sales.ViewSales', ['sales' => $sales]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function crudButtons()
    {
        $id = Sale::get(['id']);
        return view('Dashboard.Views.Sales.UpdateSearchDelete', ['id' => $id]);
    }



    public function updateForm(Request $request)
    {
        $id = $request->id;
        $sales = Sale::where('id', $id)->get();
        $productID = Product::get(['product_id']);
        $customerID = Customer::get(['id']);
        return view('Dashboard.Views.Sales.UpdateSales', ['sales' => $sales, 'id' => $id, 'productID' => $productID, 'customerID' => $customerID]);
    }


    public function update(Request $request,$id)
    {
        Sale::where('id',$id)->update(['customer_id'=>"$request->customerID",
            'product_id'=>"$request->productID",
            'quantity'=>"$request->quantity",
            'total_amount'=>"$request->amount",
            'paid_amount'=>"$request->paid",
            'due_amount'=>"$request->due"]);

        return Redirect::route('SalesCRUD');
    }


    public function delete(Request $request)
    {
        $id = $request->id;
        Sale::where('id', $id)->delete();
        return Redirect::route('SalesCRUD');
    }



    public function search(Request $request)
    {
        $id = $request->id;
        $sales = Sale::where('id', '=', $id)->get();
        return view('Dashboard.Views.Sales.ViewSales', ['sales' => $sales]);
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
