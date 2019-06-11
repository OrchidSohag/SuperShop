@extends('dashboard.master')
@section('sohag')
    <style>
        .container {
            padding-top: 10%;
        }
        h2 {
            text-align: center;
            padding-bottom: 5%;
        }
    </style>
@endsection

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Products</a></li>
                                <li class="active">View Products</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container" >
        <h2>Sales Table</h2>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th>Serial No</th>
                <th>Customer ID</th>
                <th>Product ID </th>
                <th>Quantity</th>
                <th>Total Amount</th>
                <th>Paid Amount</th>
                <th>Due Amount</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sales as $s)
                <tr>
                    <td style="padding-left: 4%;">{{$s->id}}</td>
                    <td style="padding-left: 3%;">{{$s->customer_id}}</td>
                    <td style="padding-left: 3%;">{{$s->product_id}}</td>
                    <td style="padding-left: 3%;">{{$s->quantity}}</td>
                    <td style="padding-left: 3%;">{{$s->total_amount}}</td>
                    <td style="padding-left: 3%;">{{$s->paid_amount}}</td>
                    <td style="padding-left: 3%;">{{$s->due_amount}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection