@extends('layouts.app-master')

@section('content')
    <style>
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            width: 1%;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('dashboard.show') }}"> Back</a>
                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                            placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" disabled value="{{ $user->email }}" class="form-control"
                            placeholder="Email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>BITCOIN WALLET ADDRESS:</strong>
                        <textarea class="form-control" style="height:150px" name="btc_wallet" placeholder="BITCOIN WALLET ADDRESS">{{ $user->btc_wallet }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ETH WALLET ADDRESS:</strong>
                        <textarea class="form-control" style="height:150px" name="eth_wallet" placeholder="ETH WALLET ADDRESS">{{ $user->eth_wallet }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>USDT WALLET ADDRESS:</strong>
                        <textarea class="form-control" style="height:150px" name="usdt_wallet" placeholder="USDT WALLET ADDRESS">{{ $user->usdt_wallet }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>DOT WALLET ADDRESS:</strong>
                        <textarea class="form-control" style="height:150px" name="dot_wallet" placeholder="DOT WALLET ADDRESS">{{ $user->dot_wallet }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RIPPLE XRP WALLET ADDRESS:</strong>
                        <textarea class="form-control" style="height:150px" name="xrp_wallet" placeholder="RIPPLE XRP WALLET ADDRESS">{{ $user->xrp_wallet }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>SOL WALLET ADDRESS:</strong>
                        <textarea class="form-control" style="height:150px" name="sol_wallet" placeholder="SOL WALLET ADDRESS">{{ $user->sol_wallet }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>

@endsection
