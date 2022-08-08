@extends('layouts.auth-master')

@section('content')
<div class="inner-content login-content">
    <div class="inner-content-header">
        <h4>Access Your Account</h4>
    </div>
    <div class="login-body">
        <ul class="step-nav">
            <li class="complete">
                <div class="step-icon">
                    <svg class="ended" viewBox="0 0 15.25 19.72">
                        <g id="lock-icon" viewBox="0 0 15.25 19.72">
                            <g clip-path="url(#clip-path)">
                                <path
                                    d="M4,18.37H3.27A2.49,2.49,0,0,1,1,15.88V11.81a2.5,2.5,0,0,1,2.5-2.5H10a2.49,2.49,0,0,1,2.49,2.32"
                                    transform="translate(0 0)" fill="none" stroke-miterlimit="10"
                                    stroke-width="2"></path>
                                <path d="M2.13,6.11V5.42a4.43,4.43,0,0,1,8.85,0v4"
                                    transform="translate(0 0)" fill="none" stroke-miterlimit="10"
                                    stroke-width="2"></path>
                                <polyline points="5.64 15.71 8.29 18.37 14.62 13.17" fill="none"
                                    stroke-miterlimit="10" stroke-width="2"></polyline>
                            </g>
                        </g>
                    </svg>
                </div>
            </li>
        </ul>
        <script language=javascript>
            function checkform() {
                if (document.mainform.username.value == '') {
                    alert("Please type your username!");
                    document.mainform.username.focus();
                    return false;
                }
                if (document.mainform.password.value == '') {
                    alert("Please type your password!");
                    document.mainform.password.focus();
                    return false;
                }
                return true;
            }
        </script>


        <form action="/login" method="post" > <!-- onsubmit="return checkform()" -->
            
        <!-- @csrf -->
        {!! csrf_field() !!}
        <!-- <input type="hidden"
                name="form_id" value="16599327255616"><input type="hidden" name="form_token"
                value="f46ebef18f80ff1172ea7f6bb6fdc038">
            <input type=hidden name=a value='do_login'>
            <input type=hidden name=follow value=''>
            <input type=hidden name=follow_id value=''> -->
            <div class="login-form">
                <div class="row-form">
                    <div class="input-holder">
                        <input type="text" name=email value='' placeholder="username">
                        <span class="input-title">username</span>
                        <svg class="error-icon" viewBox="0 0 6.34 6.34">
                            <g id="alert" viewBox="0 0 6.34 6.34">
                                <path
                                    d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z"
                                    transform="translate(-27.16 -9.13)" fill=""></path>
                            </g>
                        </svg>
                    </div>
                    <div class="input-holder">
                        <input type="password" name="password" value=''
                            placeholder="password"> <span class="input-title">password</span>
                        <svg class="error-icon" viewBox="0 0 6.34 6.34">
                            <g id="alert" viewBox="0 0 6.34 6.34">
                                <path
                                    d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z"
                                    transform="translate(-27.16 -9.13)" fill=""></path>
                            </g>
                        </svg>
                    </div>
                </div>



            </div>
            <div class="step-control"><a class="btn btn--arrow btn-prev" href="{{ route('forgot.show') }}">
                    Forgot your password? Click Here
                    <svg style="transform-origin: 0px 0px;" id="arrow" viewBox="0 0 83.82 125.21">
                        <g id="arrowRight" viewBox="0 0 83.82 125.21">
                            <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none"
                                stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                        </g>
                    </svg>
                </a>
                <button type="submit" class="btn btn--twoPart btn-next">Login Now
                    <div>
                        <svg style="transform-origin: 0px 0px;" id="arrow" viewBox="0 0 83.82 125.21">
                            <g id="arrowRight" viewBox="0 0 83.82 125.21">
                                <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none"
                                    stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                            </g>
                        </svg>
                    </div>
                </button>
            </div>

        </form>
    </div>
    <div class="inner-caption"> <span> <a href="?a=signup">Click here to create a new account</a>
        </span> phemesafetrade.com Copyright &copy;
        <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.
    </div>
</div>
@endsection