<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Redirect;

class ProductController extends Controller
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
        $productID = Purchase::get(['id']);
           return view('Dashboard.Views.Products.StoreNewProducts', ['productID' => $productID]);
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
            'productID' => 'required',
            'stock' => 'required',
            'alarm' => 'required',
        ]);
        Product::create([
            'product_id' => $request->productID,
            'stock_quantity' => $request->stock,
            'alarm_quantity' => $request->alarm,
//            'created_at' => date('Y-m-d H:i:s'),
        ]);
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
        $products = Product::all();
        $productName = Purchase::get(['id','product_name']);
        return view('Dashboard.Views.Products.ViewProducts', ['products' => $products,'productName' => $productName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function delete(Request $request)
    {
        $id = $request->id;
        Product::where('id', $id)->delete();
        return Redirect::route('ProductsCRUD');
    }


    public function search(Request $request)
    {
        $id = $request->id;
        $products = Product::where('product_id', '=', $id)->get();
        $productName = Purchase::get(['id','product_name']);
        return view('Dashboard.Views.Products.ViewProducts', ['products' => $products,'productName' => $productName]);
    }




    public function crudButtons()
    {
        $id = Product::get(['product_id']);
        return view('Dashboard.Views.Products.UpdateSearchDelete', ['id' => $id]);
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
    public function update(Request $request, $id)
    {
        //
    }

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
