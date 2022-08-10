@extends('layouts.app-master')

@section('content')
<div class="dashboard-content tfa-content">
    <div class="container">
        <div class="dashboard-title" style="padding-left: 40px;">
            <svg viewBox="0 0 13.51 19.38" style="width: 21px;">
                <g id="security" viewBox="0 0 13.51 19.38">

                    <g clip-path="url(#clip-path)">
                        <rect x="1" y="9.31" width="11.51" height="9.07" rx="2.5" ry="2.5" fill="none" stroke-miterlimit="10" stroke-width="1.5"></rect>
                        <path d="M2.13,6.1V5.42a4.43,4.43,0,0,1,8.85,0v4" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="1.5"></path>
                    </g>
                </g>
            </svg>
            <h4>Advanced Security Settings</h4>
        </div>
        


<form method="post"><input type="hidden" name="form_id" value="16601291639181"><input type="hidden" name="form_token" value="0164004327249f17bb2bb1a4b743deed">
<input type="hidden" name="a" value="security">
<input type="hidden" name="action" value="save">
Detect IP Address Change Sensitivity<br>
<input type="radio" name="ip" value="disabled" checked="">Disabled<br>
<input type="radio" name="ip" value="medium">Medium<br>
<input type="radio" name="ip" value="high">High<br>
<input type="radio" name="ip" value="always">Paranoic<br><br>

Detect Browser Change<br>
<input type="radio" name="browser" value="disabled" checked="">Disabled<br>
<input type="radio" name="browser" value="enabled">Enabled<br><br>
<input type="submit" value="Set" class="sbmt">
</form>

<div class="dashboard-title" style="padding-left: 40px;">
            <svg viewBox="0 0 13.51 19.38" style="width: 21px;">
                <g id="security" viewBox="0 0 13.51 19.38">

                    <g clip-path="url(#clip-path)">
                        <rect x="1" y="9.31" width="11.51" height="9.07" rx="2.5" ry="2.5" fill="none" stroke-miterlimit="10" stroke-width="1.5"></rect>
                        <path d="M2.13,6.1V5.42a4.43,4.43,0,0,1,8.85,0v4" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="1.5"></path>
                    </g>
                </g>
            </svg>
            <h4>Two Factor Authentication</h4>
        </div>
<form method="post" name="mainform"><input type="hidden" name="form_id" value="16601291639181"><input type="hidden" name="form_token" value="0164004327249f17bb2bb1a4b743deed">
<input type="hidden" name="a" value="security">
<input type="hidden" name="action" value="tfa_save">
<input type="hidden" name="time" value="1660129163799">

1. Install <a href="http://m.google.com/authenticator" targe="_blank">Google Authenticator</a> on your mobile device.<br>
2. Your Secret Code is: <b>3AGCGSNLR2H3ZK6J</b> <input type="hidden" name="tfa_secret" value="3AGCGSNLR2H3ZK6J"><br>
<img src="https://chart.googleapis.com/chart?chs=200x200&amp;chld=M|0&amp;cht=qr&amp;chl=otpauth%3A%2F%2Ftotp%2Fphemesafetrade.com%3Fsecret%3D3AGCGSNLR2H3ZK6J"><br>
3. Please enter two factor token from Google Authenticator to verify correct setup:<br> 
<input type="text" name="code" class="inpts"> <input type="submit" value="Enable" class="sbmt">
</form>



<script language="javascript">
document.mainform.time.value = (new Date()).getTime();

function checkform() {
if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
alert("Please type code!");
document.mainform.code.focus();
return false;
}
return true;
}
</script>



</div></div>
@endsection