@extends('layouts.app-master')

@section('content')
        <div class="dashboard-content ">

        <div class="membership-type" style="display: block;">
            <div class="container">

                <div class="membership-content">
                    <cove-markets-market-ticker-tape instrumentSelection="BTC-USD,ETH-USD,LTC-USD,BCH-USD" position="center" width="100%" maxWidth="900px" border="1px solid gray" showBorder="true"></cove-markets-market-ticker-tape>

                    <script type="module" defer src="https://cdn.jsdelivr.net/npm/@covemarkets/web-widgets@0.0.30/dist/market-ticker-tape/index.js"></script>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="invest-section">
                <div class="payment-balance">
                    <div class="payement-wrap"> <span class="payement-wrap-title">Payments:</span>
                        <div class="balance-chart">
                            <div class="total-balance"> Total Balance <br>
                                <span>$0.00 USD </span>
                            </div>

                        </div>
                        <hr style="margin-top:60px">
                        <ul>
                                                        <li data-lbl='Bitcoin' data-val='$0.00'><img src="/images/1000.png"> Bitcoin
                                <span>$0.00</span>
                            </li>
                                                        <li data-lbl='Ethereum' data-val='$0.00'><img src="/images/1006.png"> Ethereum
                                <span>$0.00</span>
                            </li>
                                                        <li data-lbl='Ripple XRP 🏷' data-val='$0.00'><img src="/images/1007.png"> Ripple XRP 🏷
                                <span>$0.00</span>
                            </li>
                                                        <li data-lbl='Usdt' data-val='$0.00'><img src="/images/1008.png"> Usdt
                                <span>$0.00</span>
                            </li>
                                                        <li data-lbl='SOL' data-val='$0.00'><img src="/images/1011.png"> SOL
                                <span>$0.00</span>
                            </li>
                                                        <li data-lbl='DOT' data-val='$0.00'><img src="/images/1012.png"> DOT
                                <span>$0.00</span>
                            </li>
                                                    </ul>
                    </div>
                    <!-- <div class="earning-chart no-data"> -->
                    {{-- <div class="nomics-ticker-widget" data-name="Bitcoin" data-base="BTC" data-quote="USD"></div> --}}
                    <iframe frameborder="0" scrolling="no" height="270px" 
                    sandbox="allow-same-origin allow-scripts allow-top-navigation allow-popups" 
                    src="https://widget.nomics.com/assets/BTC/USD/"></iframe>
                    {{-- <script src="https://widget.nomics.com/embed.js"></script> --}}
                </div>
                <div class="total-amount">
                    <ul>
                        <li>
                            <svg viewBox="0 0 44.42 33.56">
                                <g id="balance-icon" viewBox="0 0 44.42 33.56">
                                    <rect x="1" y="1" width="42.42" height="31.56" rx="2.9" ry="2.9" fill="none" stroke-miterlimit="10" stroke-width="2"></rect>
                                    <line x1="20.27" y1="10.62" x2="36.72" y2="10.62" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                                    <line x1="20.27" y1="15.34" x2="29.08" y2="15.34" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                                    <line x1="43.42" y1="24.78" x2="1.64" y2="24.78" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                                    <circle cx="11.14" cy="12.87" r="2.94" fill="none" stroke-miterlimit="10" stroke-width="2"></circle>
                                </g>
                            </svg>
                            <span> AVAILABLE BALANCE </span> <strong> $0.00 USD </strong>
                        </li>
                        <li>
                            <svg viewBox="0 0 44.91 44.46">
                                <g id="earning-icon" viewBox="0 0 44.91 44.46">
                                    <path d="M180.3,792.22,161,784.54a3,3,0,0,0-3.87,1.62l-2.42,5.74" transform="translate(-148.9 -779.71)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                    <path d="M165.39,783l.79-1.09a3,3,0,0,1,4-.77l8.55,5.49" transform="translate(-148.9 -779.71)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                    <path d="M188.38,814.3v5.87a3,3,0,0,1-3,3H152.9a3,3,0,0,1-3-3V798.64a3,3,0,0,1,3-3h32.48a3,3,0,0,1,3,3v5.65" transform="translate(-148.9 -779.71)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                    <path d="M187.75,814.3h-9.33a5.06,5.06,0,1,1,0-10.12h9.33a5.06,5.06,0,1,1,0,10.12Z" transform="translate(-148.9 -779.71)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                    <circle cx="30.2" cy="29.53" r="0.9" fill="none" stroke-miterlimit="10" stroke-width="2"></circle>
                                </g>
                            </svg>
                            <span> TOTAL EARNINGS </span> <strong> $0.00 USD </strong>
                        </li>
                        <li> Last Access: <span class="last-access"> Aug-8-2022 06:54:16 PM </span> </li>
                    </ul>
                    <a class="btn btn--red" style="text-transform: initial" href="{{route('investment.show')}}"> + Make a New Investment</a>
                </div>
            </div>
            <div class="dashboard-status">
                <div class="row">
                    <div class="col-md-6">
                        <div class="status-item investment"> <span class="status-title">
                                <svg viewBox="0 0 15.72 13.07">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                Investment Chart: </span>
                            <div class="amount-chart">
                                <ul class="amounts">
                                    <li> Invested Total: <span>$0.00 USD </span> </li>
                                    <li> Active Investments: <span>$0.00 USD </span> </li>
                                    <li> Recent Investment: <span>$n/a USD </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="status-item withdraw"> <span class="status-title">
                                <svg viewBox="0 0 15.48 13.88">
                                    <g id="withdraw-icon" viewBox="0 0 15.48 13.88">
                                        <path d="M11,6.93h2a2,2,0,0,0,2-2V2.47a2,2,0,0,0-2-2H2.48a2,2,0,0,0-2,2V5a2,2,0,0,0,2,2H4.17" transform="translate(0 0)" fill="none" stroke-miterlimit="10"></path>
                                        <line x1="12.4" y1="3.72" x2="3.07" y2="3.72" fill="none" stroke-miterlimit="10"></line>
                                        <g>
                                            <rect x="4.25" y="3.82" width="6.92" height="9.56" fill="none" stroke-miterlimit="10"></rect>
                                            <path d="M9,7.84A1.28,1.28,0,1,1,7.71,6.56,1.28,1.28,0,0,1,9,7.84Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10"></path>
                                        </g>
                                    </g>
                                </svg>
                                Withdrawal Chart</span>
                            <div class="amount-chart">
                                <ul class="amounts">
                                    <li> Total Withdrawn: <span>$0.00 USD </span> </li>
                                    <li> Pending Withdrawal: <span>$0.00 USD </span> </li>
                                    <li> Recent Withdraw: <span>$ n/a USD </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="history-profile-status">
                <div class="profile-status" style="width: 100%;">
                    <div class="profile-status-icon">
                        <svg viewBox="0 0 16.04 23.49">
                            <g id="bell-icon" viewBox="0 0 16.04 23.49">

                                <g clip-path="url(#clip-path)">
                                    <path d="M15,19.42H1v-8a7,7,0,0,1,14,0Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                    <line x1="8.02" x2="8.02" y2="2.54" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                                    <path d="M10.16,20.35a2.15,2.15,0,0,1-4.29,0" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    Complete Your Profile
                    <p>Keep your information updated</p>
                    <a style="width: 15%;" class="btn btn--trans" href="{{route('auth.show')}}"> Check Profile </a>
                </div>
            </div>
        </div>
        <iframe src="myaccount.html" id="editaccount" style="width: 0; height: 0;opacity: 0;"></iframe>
    </div>
@endsection