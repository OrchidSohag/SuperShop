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
                                <li class="active">Purchase CRUD</li>
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

        <nav  class="navbar navbar-center navbar-expand-lg navbar-light bg-light">
                <form method="post" action="{{route('UpdatePurchaseForm')}}" class="form-inline my-2 my-lg-0">
                    {{--<input class="form-control mr-sm-2" type="search" placeholder="Search">--}}
                    @csrf
                    <select name="id">
                        <option selected>Sale ID</option>
                        @foreach($id as $idd)
                            <option name = "id">{{$idd->id}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Update</button>
                </form>
                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

                <form method="post" action="{{route('DeletePurchase')}}" class="form-inline my-2 my-lg-0">
                    {{--<input class="form-control mr-sm-2" type="search" placeholder="Search">--}}
                    @csrf
                    <select name="id">
                        <option selected>Sale ID</option>
                        @foreach($id as $idd)
                            <option name = "id">{{$idd->id}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Delete</button>
                </form>
            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;


            <form method="post" action="{{route('SearchPurchase')}}" class="form-inline my-2 my-lg-0">
                    {{--<input class="form-control mr-sm-2" type="search" placeholder="Search">--}}
                    @csrf
                    <select name="id">
                        <option selected>Sale ID</option>
                        @foreach($id as $idd)
                            <option name = "id">{{$idd->id}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
        </nav>
    </div>

@endsection