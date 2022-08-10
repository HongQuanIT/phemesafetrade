@extends('layouts.app-master')

@section('content')
<div class="dashboard-content referral-content">
    <div class="container">
        <div class="dashboard-title" style="padding-left: 40px;">
            <svg viewBox="0 0 19.88 26.3" style="width: 21px;">
                <g id="referrals-icon" viewBox="0 0 19.89 26.3">

                    <g clip-path="url(#clip-path)">
                        <ellipse cx="9.94" cy="6.5" rx="5" ry="5.5" fill="none" stroke-miterlimit="10" stroke-width="2"></ellipse>
                        <path d="M2.43,25.3h15a1.43,1.43,0,0,0,1.43-1.43h0A7.86,7.86,0,0,0,11,16H8.86A7.86,7.86,0,0,0,1,23.86H1A1.43,1.43,0,0,0,2.43,25.3Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                    </g>
                </g>
            </svg>
            <h4>Referrals Management</h4>
        </div>
        <div class="referral-top">
            <div class="referral-link">
                <div class="referral-note"></div>
                <div class="input-holder bycopy">
                    <textarea id="txtLink">https://phemesafetrade.com/?ref=doihai132</textarea>
                    <span class="input-title">Personal Referral Link</span>
                    <button class="btn-copy btn--outlineCopylink" data-clipboard-target="#txtLink">
                        <svg viewBox="0 0 12.73 12.53">
                            <g id="copy-icon" viewBox="0 0 12.73 12.53">
                                <g clip-path="url(#clip-path)">
                                    <rect x="3.46" y="3.26" width="8.52" height="8.52" rx="1.5" ry="1.5" fill="none" stroke-miterlimit="10" stroke-width="1.5"></rect>
                                    <path d="M.75,9V3.55A2.8,2.8,0,0,1,3.55.75H8.41" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="1.5"></path>
                                </g>
                            </g>
                        </svg>copy</button>
                </div> <a class="btn btn--red" href="?a=referallinks"> Marketing Banners </a>
            </div>
            <div class="statistics-wrap">
                
                <div class="statistics-holder">
                    <div class="referral-statistics"> <span><b>0</b>Total
                            Referrals</span>
                            
                            <span><b>0</b>Active
                            Referrals</span>
                    </div>
                    <div class="commision-statistics"> <span>$0.00</span> Total Earned Commission</div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection