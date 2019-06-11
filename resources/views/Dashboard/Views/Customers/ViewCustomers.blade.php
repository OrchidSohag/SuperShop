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

        <h2>Customers Table</h2>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th>Serial No</th>
                <th>Customer Name</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Image</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $c)
                <tr>
                    <td style="padding-left: 3%;">{{$c->id}}</td>
                    <td>{{$c->customer_name}}</td>
                    <td>{{$c->mobile_number}}</td>
                    <td>{{$c->address}}</td>
                    <td>image</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection