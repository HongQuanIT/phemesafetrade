@extends('layouts.app-master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <br>
                    <a class="btn btn-primary" href="{{ route('dashboard.show') }}"> Back</a>
                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $user->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $user->email }}
                </div>
            </div>
        </div>
        <div class="input-group account-settings">
            <br>
            <h3><span class="group-title">Payment Wallets</span></h3>
            <br>
            <div class="input-row row">

                <div class="input-holder col-md-6">
                    Bitcoin Wallet Address
                    <input type=text disabled class="ac-address" name="btc_wallet" value="{{ $user->btc_wallet }}"
                        placeholder="">
                </div>

                <div class="input-holder col-md-6">
                    Ethereum Wallet Address
                    <input type=text disabled class="ac-address" name="eth_wallet" value="{{ $user->eth_wallet }}"
                        placeholder="">
                </div>

                <div class="input-holder col-md-6">
                    Ripple XRP 🏷 Account ID
                    <input type=text disabled class="ac-address" name="xrp_wallet" value="{{ $user->xrp_wallet }}"
                        placeholder="">
                </div>

                <div class="input-holder col-md-6">
                    Usdt Wallet Address
                    <input type=text disabled class="ac-address" name="usdt_wallet" value="{{ $user->usdt_wallet }}"
                        placeholder="">
                </div>

                <div class="input-holder col-md-6">
                    SOL Wallet address
                    <input type=text disabled class="ac-address" name="sol_wallet" value="{{ $user->sol_wallet }}"
                        placeholder="">
                </div>

                <div class="input-holder col-md-6">
                    DOT Account ID
                    <input type=text disabled class="ac-address" name="dot_wallet" value="{{ $user->dot_wallet }}"
                        placeholder="">
                </div>
            </div>
        </div>
    @endsection
