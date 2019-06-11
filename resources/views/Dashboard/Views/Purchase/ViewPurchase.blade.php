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
                                <li><a href="#">Purchase</a></li>
                                <li class="active">View Purchase List</li>
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
        <h2>Purchase Table</h2>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Supplier </th>
                <th>Unit Price</th>
                <th>Selling Price</th>
                <th>Purchase Cost</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchase as $p)
                <tr>
                    <td style="padding-left: 4%;">{{$p->id}}</td>
                    <td>{{$p->product_name}}</td>
                    <td>{{$p->supplier}}</td>
                    <td style="padding-left: 3%;">{{$p->unit_price}}</td>
                    <td style="padding-left: 3%;">{{$p->selling_unit_price}}</td>
                    <td>{{$p->total_amount}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection