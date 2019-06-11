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
                        <div class="card-header"><strong>Sell Products</strong></div>
                        <div class="card-body card-block">
                            <form action="{{route('SellProductsC')}}" method="post">
                                @csrf
                                <div class="form-group"><label for="name" class=" form-control-label">Customer ID</label>
                                    <select id="busModel" name="customerID">
                                        @foreach($customerID as $cd)
                                            <option>{{$cd->id}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group"><label for="name" class=" form-control-label">Product ID</label>
                                    <select id="destination" name="productID">
                                        @foreach($productID as $pd)
                                            <option>{{$pd->product_id}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group"><label for="mobileNumber" class=" form-control-label">Quantity</label>
                                            <input type="number" id="source" name="quantity" placeholder="Enter Quantity" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('quantity'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group"><label for="mobileNumber" class=" form-control-label">Total Amount</label>
                                            <input type="number" id="busType" name="amount" onclick="amount()" placeholder="Enter Amount" class="form-control {{ $errors->has('amount') ? ' is-invalid' : '' }}">
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
                                            <input type="number" id="seats" name="paid" placeholder="Enter Paid Amount" class="form-control {{ $errors->has('paid') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('paid'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('paid') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group"><label for="mobileNumber" class=" form-control-label">Due Amount</label>
                                            <input type="number" id="fare" name="due" placeholder="Enter Due Amount" class="form-control {{ $errors->has('due') ? ' is-invalid' : '' }}">
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@section('js')--}}
    {{--<script>--}}
        {{--function amount() {--}}
            {{--var x = document.getElementById("source").value;--}}
            {{--document.getElementById("busType").value = x*2;--}}
        {{--}--}}
    {{--</script>--}}

{{--@endsection--}}