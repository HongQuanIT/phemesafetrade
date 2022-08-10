@extends('layouts.app-master')

@section('content')
<div class="dashboard-content  deposit-content">
    <div class="container">
        <div class="dashboard-title">
            <svg viewBox="0 0 12.66 9.1">
                <g id="investlist-icon">
                    <g>
                        <line x1="3.5" y1="0.5" x2="12.66" y2="0.5" fill="none" stroke-miterlimit="10"></line>
                        <line x1="3.5" y1="4.45" x2="12.66" y2="4.45" fill="none" stroke-miterlimit="10"></line>
                        <line x1="3.5" y1="8.6" x2="12.66" y2="8.6" fill="none" stroke-miterlimit="10"></line>
                        <line y1="0.5" x2="1.89" y2="0.5" fill="none" stroke-miterlimit="10"></line>
                        <line y1="4.45" x2="1.89" y2="4.45" fill="none" stroke-miterlimit="10"></line>
                        <line y1="8.6" x2="1.89" y2="8.6" fill="none" stroke-miterlimit="10"></line>
                    </g>
                </g>
            </svg>
            <h4>My Investment Portfolio</h4>
        </div>
        <div class="deposit-top">
            <div class="deposit-statistic">
                <div>Investment Turnover <span id="total-turnover">$0.00 USD</span>
                </div>
            </div>
        </div>
    </div>

    
<div class="container">
    

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<table cellspacing="1" cellpadding="2" border="0" width="100%" class="line"><tbody><tr><td class="item">
<table class="table">
<tbody><tr>
<td colspan="3" align="center"><b>5% after 24 hours</b></td>
</tr><tr>
<td class="inheader">Plan</td>
<td class="inheader" width="200">Deposit Amount</td>
<td class="inheader" width="100" nowrap=""><nobr> Profit (%)</nobr></td>
</tr>
<tr>
<td class="item">PREMIUM PLAN</td>
<td class="item" align="right">$500.00 and more</td>
<td class="item" align="right">5.00</td>
</tr>
</tbody></table>
<br>
<table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
<td colspan="4"><b>No deposits for this plan</b></td>
</tr>           
</tbody></table>
<br>
</td></tr></tbody></table>
<br>

<table cellspacing="1" cellpadding="2" border="0" width="100%" class="line"><tbody><tr><td class="item">
<table class="table">
<tbody><tr>
<td colspan="3" align="center"><b>50% after 4days</b></td>
</tr><tr>
<td class="inheader">Plan</td>
<td class="inheader" width="200">Deposit Amount</td>
<td class="inheader" width="100" nowrap=""><nobr> Profit (%)</nobr></td>
</tr>
<tr>
<td class="item">MINING PLAN</td>
<td class="item" align="right">$2000.00 and more</td>
<td class="item" align="right">50.00</td>
</tr>
</tbody></table>
<br>
<table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
<td colspan="4"><b>No deposits for this plan</b></td>
</tr>           
</tbody></table>
<br>
</td></tr></tbody></table>
<br>

<table cellspacing="1" cellpadding="2" border="0" width="100%" class="line"><tbody><tr><td class="item">
<table class="table">
<tbody><tr>
<td colspan="3" align="center"><b>100% after 7days</b></td>
</tr><tr>
<td class="inheader">Plan</td>
<td class="inheader" width="200">Deposit Amount</td>
<td class="inheader" width="100" nowrap=""><nobr> Profit (%)</nobr></td>
</tr>
<tr>
<td class="item">GOLD PACK PLAN</td>
<td class="item" align="right">$5000.00 and more</td>
<td class="item" align="right">100.00</td>
</tr>
</tbody></table>
<br>
<table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
<td colspan="4"><b>No deposits for this plan</b></td>
</tr>           
</tbody></table>
<br>
</td></tr></tbody></table>
<br>

<table cellspacing="1" cellpadding="2" border="0" width="100%" class="line"><tbody><tr><td class="item">
<table class="table">
<tbody><tr>
<td colspan="3" align="center"><b>150% AFTER 24HOURS</b></td>
</tr><tr>
<td class="inheader">Plan</td>
<td class="inheader" width="200">Deposit Amount</td>
<td class="inheader" width="100" nowrap=""><nobr>Hourly Profit (%)</nobr></td>
</tr>
<tr>
<td class="item">VVIP PLAN</td>
<td class="item" align="right">$10000.00 - $1000000.00</td>
<td class="item" align="right">150.00</td>
</tr>
</tbody></table>
<br>
<table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
<td colspan="4"><b>No deposits for this plan</b></td>
</tr>           
</tbody></table>
<br>
</td></tr></tbody></table>
<br>

</div></div>
@endsection