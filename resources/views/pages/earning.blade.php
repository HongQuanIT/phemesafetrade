@extends('layouts.app-master')

@section('content')
<div class="dashboard-content transaction-content">
     

    <script language="javascript">
    function go(p)
    {
      document.opts.page.value = p;
      document.opts.submit();
    }
    </script>
    
    
    <div class="container">
                <div class="dashboard-title" style="padding-left: 40px;">
                    <svg viewBox="0 0 13.88 17.17" style="width: 21px;">
                        <g id="transaction-icon" viewBox="0 0 13.88 17.17">
                            <rect x="0.5" y="4.98" width="12.88" height="7.24" rx="0.9" ry="0.9" fill="none" stroke-miterlimit="10"></rect>
                            <circle cx="7.04" cy="8.6" r="1.83" fill="none" stroke-miterlimit="10"></circle>
                            <polyline points="9.28 14.65 7.04 16.52 4.8 14.65" fill="none" stroke-miterlimit="10"></polyline>
                            <polyline points="4.8 2.52 7.04 0.65 9.28 2.52" fill="none" stroke-miterlimit="10"></polyline>
                        </g>
                    </svg>
                    <h4>Transactions History</h4>
                </div>
                <div class="transaction-filter">
    <form method="post" name="opts"><input type="hidden" name="form_id" value="16601290444993"><input type="hidden" name="form_token" value="164d477648bdbeba281fdd7a5d06e9ee">
    <input type="hidden" name="a" value="history">
    <input type="hidden" name="page" value="1">
    
    <div class="input-holder fromdate">
        <div>
            <select name="day_from" class="inpts">
                            <option value="1">1
                                </option><option value="2">2
                                </option><option value="3">3
                                </option><option value="4">4
                                </option><option value="5">5
                                </option><option value="6" selected="">6
                                </option><option value="7">7
                                </option><option value="8">8
                                </option><option value="9">9
                                </option><option value="10">10
                                </option><option value="11">11
                                </option><option value="12">12
                                </option><option value="13">13
                                </option><option value="14">14
                                </option><option value="15">15
                                </option><option value="16">16
                                </option><option value="17">17
                                </option><option value="18">18
                                </option><option value="19">19
                                </option><option value="20">20
                                </option><option value="21">21
                                </option><option value="22">22
                                </option><option value="23">23
                                </option><option value="24">24
                                </option><option value="25">25
                                </option><option value="26">26
                                </option><option value="27">27
                                </option><option value="28">28
                                </option><option value="29">29
                                </option><option value="30">30
                                </option><option value="31">31
                            </option></select>
            <svg class="arrow-icon" viewBox="0 0 5.55 10.29">
                <g id="single-arrow" viewBox="0 0 5.55 10.29">
                    <g clip-path="url(#clip-path)">
                        <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                    </g>
                </g>
            </svg>
        </div>
        <div>
            <select name="month_from" class="inpts">
                            <option value="1">Jan
                                </option><option value="2">Feb
                                </option><option value="3">Mar
                                </option><option value="4">Apr
                                </option><option value="5">May
                                </option><option value="6">Jun
                                </option><option value="7">Jul
                                </option><option value="8" selected="">Aug
                                </option><option value="9">Sep
                                </option><option value="10">Oct
                                </option><option value="11">Nov
                                </option><option value="12">Dec
                            </option></select>
            <svg class="arrow-icon" viewBox="0 0 5.55 10.29">
                <g id="single-arrow" viewBox="0 0 5.55 10.29">
                    <g clip-path="url(#clip-path)">
                        <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                    </g>
                </g>
            </svg>
        </div>
        <div>
            <select name="year_from" class="inpts">
                            <option value="2020">2020
                                </option><option value="2021">2021
                                </option><option value="2022" selected="">2022
                            </option></select>
            <svg class="arrow-icon" viewBox="0 0 5.55 10.29">
                <g id="single-arrow" viewBox="0 0 5.55 10.29">
                    <g clip-path="url(#clip-path)">
                        <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                    </g>
                </g>
            </svg>
        </div> <span class="input-title">From:</span>
    </div>
    <div class="input-holder todate">
        <div>
            <select name="day_to" class="inpts">
                            <option value="1">1
                                </option><option value="2">2
                                </option><option value="3">3
                                </option><option value="4">4
                                </option><option value="5">5
                                </option><option value="6">6
                                </option><option value="7">7
                                </option><option value="8">8
                                </option><option value="9">9
                                </option><option value="10" selected="">10
                                </option><option value="11">11
                                </option><option value="12">12
                                </option><option value="13">13
                                </option><option value="14">14
                                </option><option value="15">15
                                </option><option value="16">16
                                </option><option value="17">17
                                </option><option value="18">18
                                </option><option value="19">19
                                </option><option value="20">20
                                </option><option value="21">21
                                </option><option value="22">22
                                </option><option value="23">23
                                </option><option value="24">24
                                </option><option value="25">25
                                </option><option value="26">26
                                </option><option value="27">27
                                </option><option value="28">28
                                </option><option value="29">29
                                </option><option value="30">30
                                </option><option value="31">31
                            </option></select>
            <svg class="arrow-icon" viewBox="0 0 5.55 10.29">
                <g id="single-arrow" viewBox="0 0 5.55 10.29">
                    <g clip-path="url(#clip-path)">
                        <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                    </g>
                </g>
            </svg>
        </div>
        <div>
            <select name="month_to" class="inpts">
                            <option value="1">Jan
                                </option><option value="2">Feb
                                </option><option value="3">Mar
                                </option><option value="4">Apr
                                </option><option value="5">May
                                </option><option value="6">Jun
                                </option><option value="7">Jul
                                </option><option value="8" selected="">Aug
                                </option><option value="9">Sep
                                </option><option value="10">Oct
                                </option><option value="11">Nov
                                </option><option value="12">Dec
                            </option></select>
            <svg class="arrow-icon" viewBox="0 0 5.55 10.29">
                <g id="single-arrow" viewBox="0 0 5.55 10.29">
                    <g clip-path="url(#clip-path)">
                        <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                    </g>
                </g>
            </svg>
        </div>
        <div>
            <select name="year_to" class="inpts">
                            <option value="2020">2020
                                </option><option value="2021">2021
                                </option><option value="2022" selected="">2022
                            </option></select>
            <svg class="arrow-icon" viewBox="0 0 5.55 10.29">
                <g id="single-arrow" viewBox="0 0 5.55 10.29">
                    <g clip-path="url(#clip-path)">
                        <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                    </g>
                </g>
            </svg>
        </div> <span class="input-title">To:</span>
    </div>
    <div class="input-holder choose-balance">
            <div>
            <select name="ec" class="inpts">
                <option value="-1">All</option>
                            <option value="1000">Bitcoin</option>
                            <option value="1006">Ethereum</option>
                            <option value="1007">Ripple XRP 🏷</option>
                            <option value="1008">Usdt</option>
                            <option value="1011">SOL</option>
                            <option value="1012">DOT</option>
                        </select>
            <svg class="arrow-icon" viewBox="0 0 5.55 10.29">
                <g id="single-arrow" viewBox="0 0 5.55 10.29">
                    <g clip-path="url(#clip-path)">
                        <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                    </g>
                </g>
            </svg>
        </div> <span class="input-title">Payment:</span>
        </div>
    <div class="input-holder transaction-type">
        <div>
            <select name="type" class="inpts" onchange="document.opts.submit();">
                <option value="">All transactions</option>
                            <option value="deposit">Deposit</option>
                            <option value="withdrawal">Withdrawal</option>
                            <option value="earning">Earning</option>
                            <option value="commissions">Referral commission</option>
                        </select>
            <svg class="arrow-icon" viewBox="0 0 5.55 10.29">
                <g id="single-arrow" viewBox="0 0 5.55 10.29">
                    <g clip-path="url(#clip-path)">
                        <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                    </g>
                </g>
            </svg>
        </div> <span class="input-title">Category:</span>
    </div>
    <button class="btn btn--red">
        <svg class="search-icon" viewBox="0 0 12.81 13.37">
            <g id="search-icon" viewBox="0 0 12.81 13.37">
                <g clip-path="url(#clip-path)">
                    <path d="M10,4.51A4.54,4.54,0,1,1,4.51,1.12,4.54,4.54,0,0,1,10,4.51Z" transform="translate(0 0)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                    <line x1="8.69" y1="8.84" x2="12.05" y2="12.72" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></line>
                </g>
            </g>
        </svg>Search</button>
    
                            
    </form>
                </div>
                <div class="transaction-statistic">
                    <div class="total-transaction">Transactions Turnover <span>$ 0.00 USD</span>
                    </div>
                    <div class="this-period">Sum of selected period <span>$ 0.00 USD </span>
                    </div>
                </div>
    
    
     <div class="transaction-list">
         <div class="row">
             <div class="col-md-12">
    
                 <!-- <div class="transaction-statistic">	 -->
    
    
                 <!-- <div class="wrap-table100"> -->
                 <div class="table100" style="padding: 0px 0px;-webkit-box-shadow: 0 2px 5px 0 rgba(152, 173, 185, 0.3);
        -moz-box-shadow: 0 2px 5px 0 rgba(152, 173, 185, 0.3);
        box-shadow: 0 2px 5px 0 rgba(152, 173, 185, 0.3);">
                     <table>
                         <thead>
                             <tr class="table100-head">
                                 <th class="column1">Type transaction</th>
                                 <th class="column2">Amount</th>
                                 <th class="column3">Date</th>
                             </tr>
                         </thead>
    
                         <tbody>
    
    <tr>
     <td colspan="3" align="center">No transactions found</td>
    </tr>
    <tr><td colspan="3">&nbsp;</td>
    
    
    
    
    </tr></tbody><tbody>
    </tbody></table>
    
       </div>
                            <!-- </div> -->
    
    
                            <!-- </div>	 -->
    
    
    
    
                        </div>
                    </div>
                </div>
    
    
                
                
            </div>
    <ul class="pagination"><li class="page-item"><a class="prev page-link disabled">&lt;&lt;</a></li><li class="page-item active"><a class="page-link">1</a></li><li class="page-item"><a class="next page-link disabled">&gt;&gt;</a></li></ul>
    
        </div>
@endsection