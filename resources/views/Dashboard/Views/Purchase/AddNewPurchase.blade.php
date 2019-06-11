@extends('Dashboard.master')

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
                                <li><a href="#">Purchases</a></li>
                                <li class="active">New Purchase Entry</li>
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
                        <div class="card-header"><strong>Add New Purchase</strong></div>
                        <div class="card-body card-block">
                            <form action="{{route('AddPurchaseC')}}" method="post">
                                @csrf
                                <div class="form-group"><label for="productName" class=" form-control-label">Product Name</label>
                                    <input type="text" id="busModel" name="name" placeholder="Enter Product Name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group"><label for="supplier" class=" form-control-label">Supplier Company</label>
                                    <input type="text" id="busType" name="supplier" placeholder="Enter Supplier Company" class="form-control {{ $errors->has('supplier') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('supplier'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('supplier') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group"><label for="unitPrice" class=" form-control-label">Unit Price</label>
                                            <input type="number" step=".01" min="0" id="source" name="unitPrice" placeholder="Enter Unit Price" class="form-control {{ $errors->has('unitPrice') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('unitPrice'))
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('unitPrice') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group"><label for="sellingPrice" class=" form-control-label">Selling Unit Price</label>
                                            <input type="number" step=".01" min="0" id="seats" name="sellingPrice" placeholder="Enter Selling Unit Price" class="form-control {{ $errors->has('sellingPrice') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('sellingPrice'))
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('sellingPrice') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="totalAmount" class=" form-control-label">Total Purchased</label>
                                    <input type="number" step=".01" min="0" id="destination" name="totalAmount" placeholder="Enter Total Amount" class="form-control {{ $errors->has('totalAmount') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('totalAmount'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('totalAmount') }}</strong>
                                         </span>
                                    @endif
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
