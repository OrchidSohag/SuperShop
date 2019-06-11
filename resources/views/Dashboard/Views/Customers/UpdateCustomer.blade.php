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
                                <li><a href="#">Insertions</a></li>
                                <li class="active">Add Customer</li>
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
                        <div class="card-header"><strong>Add Customer</strong></div>
                        <div class="card-body card-block">
                            <form action="{{route('UpdateCustomer',$id)}}" method="post">
                                @csrf
                                @foreach($customer as $customer)

                                <div class="form-group"><label for="name" class=" form-control-label">Customer Name</label>
                                    <input type="text" id="busModel" name="name" placeholder="Enter Customer Name" value="{{$customer->customer_name}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group"><label for="mobileNumber" class=" form-control-label">Mobile Number</label>
                                    <input type="number" id="busType" name="mobile" placeholder="Enter Mobile Number" value="{{$customer->mobile_number}}" class="form-control {{ $errors->has('mobile') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('mobile'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group"><label for="address" class=" form-control-label">Address</label>
                                            <input type="text" id="source" name="address" placeholder="Enter Address" value="{{$customer->address}}" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('address'))
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group"><label for="image" class=" form-control-label">Image</label>
                                            <input type="text" id="destination" name="image" placeholder="Enter Image" value="{{$customer->image}}" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('image'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
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
