<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use Redirect;
class CustomerController extends Controller
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
            'mobile' => 'required',
            'address' => 'required',
            'image' => 'required',
        ]);
        Customer::create([
            'customer_name' => $request->name,
            'mobile_number' => $request->mobile,
            'address' => $request->address,
            'image' => $request->image,
            'created_at' => date('Y-m-d H:i:s'),
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
        $customers = Customer::all();
        $id = Customer::get(['id']);
        return view('Dashboard.Views.Customers.ViewCustomers', ['customers' => $customers, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function crudButtons()
    {
        $id = Customer::get(['id']);
        return view('Dashboard.Views.Customers.UpdateSearchDelete', ['id' => $id]);
    }


    public function updateForm(Request $request)
    {
        $id = $request->id;
        $customer = Customer::where('id', $id)->get();
        return view('Dashboard.Views.Customers.UpdateCustomer', ['customer' => $customer, 'id' => $id]);
    }


    public function update(Request $request,$id)
    {
        Customer::where('id',$id)->update(['customer_name'=>"$request->name",
            'mobile_number'=>"$request->mobile",
            'address'=>"$request->address",
            'image'=>"$request->image"]);
        return Redirect::route('CustomerCRUD');
    }


    public function delete(Request $request)
    {
        $id = $request->id;
        Customer::where('id', $id)->delete();
        return Redirect::route('CustomerCRUD');
    }


    public function search(Request $request)
    {
        $id = $request->id;
        $customers = Customer::where('id', '=', $id)->get();
        return view('Dashboard.Views.Customers.ViewCustomers', ['customers' => $customers,]);
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
