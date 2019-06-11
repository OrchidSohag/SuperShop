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
                                <li><a href="#">Products</a></li>
                                <li class="active">Store Products</li>
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
                        <div class="card-header"><strong>Store New Products</strong></div>
                        <div class="card-body card-block">
                            <form action="{{route('StoreProductsC')}}" method="post">
                                @csrf
                                <div class="form-group"><label for="name" class=" form-control-label">Product ID</label>
                                    <select id="busModel" name="productID">
                                        @foreach($productID as $pd)
                                        <option>{{$pd->id}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group"><label for="mobileNumber" class=" form-control-label">Stock Quantity</label>
                                    <input type="number" id="busType" name="stock" placeholder="Enter Stock Quantity" class="form-control {{ $errors->has('stock') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('stock'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group"><label for="mobileNumber" class=" form-control-label">Alarm Quantity</label>
                                            <input type="number" id="source" name="alarm" placeholder="Enter Alarm Quantity" class="form-control {{ $errors->has('alarm') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('alarm'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alarm') }}</strong>
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