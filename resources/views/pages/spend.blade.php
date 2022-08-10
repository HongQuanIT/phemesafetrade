@extends('layouts.app-master')

@section('content')
    @php
    $spend = session()->get('spend');
    @endphp
    <div class="dashboard-content">

        <div class="container">
            <div class="dashboard-title" style="padding-left: 40px;">
                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27"
                            fill="none" stroke-miterlimit="10"></rect>
                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)"
                            fill="none" stroke-miterlimit="10"></path>
                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                    </g>
                </svg>
                <h4> Deposit Confirmation </h4>
            </div>
        </div>



        <div class="container">
            Please send your payments to this
            @if ($spend->wallet == 'btc')
                Bitcoin wallet address: <b> {{ $wallet->btc_wallet }}
                @elseif ($spend->wallet == 'eth')
                    Ethereum wallet address: <b> {{ $wallet->eth_wallet }}
                    @elseif ($spend->wallet == 'xrp')
                        Ripple XRP 🏷 wallet address: <b> {{ $wallet->xrp_wallet }}
                        @elseif ($spend->wallet == 'usdt')
                            USDT wallet address: <b> {{ $wallet->usdt_wallet }}
                            @elseif ($spend->wallet == 'sol')
                                Sol wallet address: <b> {{ $wallet->sol_wallet }}
                                @elseif ($spend->wallet == 'dot')
                                    Dot wallet address: <b> {{ $wallet->dot_wallet }}
            @endif

            </b><br><br>

            <table class="table">
                <tbody>
                    <tr>
                        <th>Plan:</th>
                        @if ($spend->plan == 1)
                            <td>5% after 24 hours</td>
                        @elseif ($spend->plan == 2)
                            <td>50% after 4days</td>
                        @elseif ($spend->plan == 3)
                            <td>100% after 7days</td>
                        @endif

                    </tr>
                    <tr>
                        <th>Profit:</th>
                        @if ($spend->plan == 1)
                            <td>5.00% after 24 hours</td>
                        @elseif ($spend->plan == 2)
                            <td>50.00% after 4days</td>
                        @elseif ($spend->plan == 3)
                            <td>100.00% after 7days</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Principal Return:</th>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <th>Principal Withdraw:</th>
                        <td>
                            Not available </td>
                    </tr>

                    <tr>
                        <th>Credit Amount:</th>
                        <td>${{ $spend->amount }}.00</td>
                    </tr>
                    <tr>
                        <th>Deposit Fee:</th>
                        <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                    </tr>
                    <tr>
                        <th>Debit Amount:</th>
                        <td>${{ $spend->amount }}.00</td>
                    </tr>
                    <tr>
                        <th> Debit Amount:</th>
                        <td>{{ $spend->amount }}.00</td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <form name="spend" method="post">
                <input type="hidden" name="a" value="deposit">
                <input type="hidden" name="wallet" value="confirm">
                <input type="hidden" name="type" value="process_1000">
                <input type="hidden" name="h_id" value="1">
                <input type="hidden" name="compound" value="">
                <input type="hidden" name="amount" value="15000.00">
                <table cellspacing="0" cellpadding="2" border="0">
                    <tbody>
                        <tr>
                            <td colspan="2"><b>Required Information:</b></td>
                        </tr>
                        <tr>
                            <td>Transaction ID</td>
                            <td><input type="text" name="transaction" value="" class="inpts"></td>
                        </tr>
                    </tbody>
                </table>

                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <a href="{{ route('investment.show') }}"class="sbmt" value="Cancel">Cancel</a>
            </form>


        </div>
    </div>
@endsection
