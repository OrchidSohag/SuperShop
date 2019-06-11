{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: Orchid Sohag--}}
{{--* Date: 19-May-19--}}
{{--* Time: 1:58 PM--}}
{{--*/--}}

@extends('dashboard.master')

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
                                <li><a href="#">Sales</a></li>
                                <li class="active">Sell Products</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="content">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header"><strong>Update Sales</strong></div>
                        <div class="card-body card-block">
                            <form action="{{route('SalesUpdate',$id)}}" method="post">
                                @csrf
                                @foreach($sales as $sales)

                                <div class="form-group"><label for="name" class=" form-control-label">Customer ID</label>
                                    <select id="busModel" name="customerID">
                                        @foreach($customerID as $cd)
                                            @if($cd->id == $sales->customer_id)
                                                <option selected>{{$sales->customer_id}}</option>
                                            @else
                                                <option>{{$cd->id}} </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group"><label for="name" class=" form-control-label">Product ID</label>
                                    <select id="destination" name="productID">
                                        @foreach($productID as $pd)
                                            @if($pd->product_id == $sales->product_id)
                                                <option selected>{{$sales->product_id}}</option>
                                            @else
                                                <option>{{$pd->product_id}} </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group"><label for="mobileNumber" class=" form-control-label">Quantity</label>
                                            <input type="number" id="source" name="quantity" placeholder="Enter Quantity" value="{{$sales->quantity}}" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('quantity'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group"><label for="mobileNumber" class=" form-control-label">Total Amount</label>
                                            <input type="number" id="busType" name="amount" onclick="amount()" placeholder="Enter Amount" value="{{$sales->total_amount}}" class="form-control {{ $errors->has('amount') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('amount'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group"><label for="mobileNumber" class=" form-control-label">Paid Amount</label>
                                            <input type="number" id="seats" name="paid" placeholder="Enter Paid Amount" value="{{$sales->paid_amount}}" class="form-control {{ $errors->has('paid') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('paid'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('paid') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group"><label for="mobileNumber" class=" form-control-label">Due Amount</label>
                                            <input type="number" id="fare" name="due" placeholder="Enter Due Amount" value="{{$sales->due_amount}}" class="form-control {{ $errors->has('due') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('due'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('due') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection