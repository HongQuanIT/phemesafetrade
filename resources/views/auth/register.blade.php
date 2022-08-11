@extends('layouts.auth-master')

@section('content')
<div class="inner-content signup-content">
    <div class="signup-steps">
        <div class="inner-content-header">
            <h2>Create a new account</h2>
        </div>
        <div class="signup-body">
            <ul class="step-nav">
                <li id="nav1" class="active">
                    <div class="step-icon">
                        <svg class="primitive" viewBox="0 0 19.88 26.3">
                            <g id="userIcon-mono" viewBox="0 0 19.88 26.3">
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <g>
                                            <ellipse cx="9.94" cy="6.5" rx="5" ry="5.5" fill="none"
                                                stroke-miterlimit="10" stroke-width="2.5"></ellipse>
                                            <path
                                                d="M8.86,16H11a7.86,7.86,0,0,1,7.86,7.86v0a1.43,1.43,0,0,1-1.43,1.43h-15A1.43,1.43,0,0,1,1,23.87v0A7.86,7.86,0,0,1,8.86,16Z"
                                                fill="none" stroke-miterlimit="10" stroke-width="2.5">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <svg class="ended" viewBox="0 0 23 19.39">
                            <g clip-path="url(#clip-path)">
                                <polyline points="1.45 9.88 7.66 16.46 21.53 1.35" fill="none"
                                    stroke-miterlimit="10" stroke-width="4"></polyline>
                            </g>
                        </svg>
                    </div> <span class="step-counter">step 1</span> <span
                        class="step-title">Account</span> Information
                </li>
                <li id="nav2">
                    <div class="step-icon">
                        <svg class="primitive" viewBox="0 0 13.51 19.38">
                            <g id="security" viewBox="0 0 13.51 19.38">
                                <g clip-path="url(#clip-path)">
                                    <rect x="1" y="9.31" width="11.51" height="9.07" rx="2.5" ry="2.5"
                                        fill="none" stroke-miterlimit="10" stroke-width="1.5"></rect>
                                    <path d="M2.13,6.1V5.42a4.43,4.43,0,0,1,8.85,0v4"
                                        transform="translate(0 0)" fill="none" stroke-miterlimit="10"
                                        stroke-width="1.5"></path>
                                </g>
                            </g>
                        </svg>
                        <svg class="ended" viewBox="0 0 23 19.39">
                            <g clip-path="url(#clip-path)">
                                <polyline points="1.45 9.88 7.66 16.46 21.53 1.35" fill="none"
                                    stroke-miterlimit="10" stroke-width="4"></polyline>
                            </g>
                        </svg>
                    </div> <span class="step-counter">step 2</span> <span
                        class="step-title">Security</span> Information
                </li>
                <li id="nav3">
                    <div class="step-icon">
                        <svg class="primitive" viewBox="0 0 15.3 19.88">
                            <g id="pin" viewBox="0 0 15.3 19.88">
                                <g clip-path="url(#clip-path)">
                                    <path d="M7.65,18.27l5.18-6.5a6.63,6.63,0,1,0-10.37,0Z"
                                        transform="translate(0 0)" fill="none" stroke-miterlimit="10"
                                        stroke-width="2"></path>
                                    <circle cx="7.65" cy="7.22" r="2.08" fill="none"
                                        stroke-miterlimit="10" stroke-width="2"></circle>
                                </g>
                            </g>
                        </svg>
                        <svg class="ended" viewBox="0 0 23 19.39">
                            <g clip-path="url(#clip-path)">
                                <polyline points="1.45 9.88 7.66 16.46 21.53 1.35" fill="none"
                                    stroke-miterlimit="10" stroke-width="4"></polyline>
                            </g>
                        </svg>
                    </div> <span class="step-counter">step 3</span> <span
                        class="step-title">Security</span>Questions
                </li>
                <li id="nav4">
                    <div class="step-icon">
                        <svg class="primitive" viewBox="0 0 18.86 18.86">
                            <g id="registerComplete" viewBox="0 0 18.86 18.86">
                                <g clip-path="url(#clip-path)">
                                    <polyline points="8.86 14.52 11.51 17.19 17.83 11.99" fill="none"
                                        stroke-miterlimit="10" stroke-width="2"></polyline>
                                    <path
                                        d="M7.74,17.86H5.11A4.11,4.11,0,0,1,1,13.75V5.11A4.11,4.11,0,0,1,5.11,1h8.64a4.11,4.11,0,0,1,4.11,4.11v5.06"
                                        transform="translate(0 0)" fill="none" stroke-miterlimit="10"
                                        stroke-width="2"></path>
                                    <line x1="5.14" y1="6.74" x2="13.18" y2="6.74" fill="none"
                                        stroke-miterlimit="10" stroke-width="2"></line>
                                    <line x1="5.14" y1="10.56" x2="9.66" y2="10.56" fill="none"
                                        stroke-miterlimit="10" stroke-width="2"></line>
                                </g>
                            </g>
                        </svg>
                        <svg class="ended" viewBox="0 0 23 19.39">
                            <g clip-path="url(#clip-path)">
                                <polyline points="1.45 9.88 7.66 16.46 21.53 1.35" fill="none"
                                    stroke-miterlimit="10" stroke-width="4"></polyline>
                            </g>
                        </svg>
                    </div> <span class="step-counter">step 4</span> <span
                        class="step-title">Ready</span> To Go
                </li>
            </ul>

            <div class="step-holder">


                <script language=javascript>
                    function checkform() {
                        if (document.regform.fullname.value == '') {
                            alert("Please enter your full name!");
                            document.regform.fullname.focus();
                            return false;
                        }


                        if (document.regform.username.value == '') {
                            alert("Please enter your username!");
                            document.regform.username.focus();
                            return false;
                        }
                        if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
                            alert("For username you should use English letters and digits only!");
                            document.regform.username.focus();
                            return false;
                        }
                        if (document.regform.password.value == '') {
                            alert("Please enter your password!");
                            document.regform.password.focus();
                            return false;
                        }
                        if (document.regform.password.value != document.regform.password_confirmation.value) {
                            alert("Please check your password!");
                            document.regform.password_confirmation.focus();
                            return false;
                        }


                        if (document.regform.email.value == '') {
                            alert("Please enter your e-mail address!");
                            document.regform.email.focus();
                            return false;
                        }
                        if (document.regform.email.value != document.regform.email1.value) {
                            alert("Please retype your e-mail!");
                            document.regform.email.focus();
                            return false;
                        }

                        for (i in document.regform.elements) {
                            f = document.regform.elements[i];
                            if (f.name && f.name.match(/^pay_account/)) {
                                if (f.value == '') continue;
                                var notice = f.getAttribute('data-validate-notice');
                                var invalid = 0;
                                if (f.getAttribute('data-validate') == 'regexp') {
                                    var re = new RegExp(f.getAttribute('data-validate-regexp'));
                                    if (!f.value.match(re)) {
                                        invalid = 1;
                                    }
                                } else if (f.getAttribute('data-validate') == 'email') {
                                    var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                                    if (!f.value.match(re)) {
                                        invalid = 1;
                                    }
                                }
                                if (invalid) {
                                    alert('Invalid account format. Expected ' + notice);
                                    f.focus();
                                    return false;
                                }
                            }
                        }

                        if (document.regform.agree.checked == false) {
                            alert("You have to agree with the Terms and Conditions!");
                            return false;
                        }

                        return true;
                    }

                    function IsNumeric(sText) {
                        var ValidChars = "0123456789";
                        var IsNumber = true;
                        var Char;
                        if (sText == '') return false;
                        for (i = 0; i < sText.length && IsNumber == true; i++) {
                            Char = sText.charAt(i);
                            if (ValidChars.indexOf(Char) == -1) {
                                IsNumber = false;
                            }
                        }
                        return IsNumber;
                    }
                </script>




                <form action="{{ route('register.perform') }}" id="regform" method="POST">
                    @csrf
                    <div id="step1" class="step-content active">
                        <div class="row-form">
                            <div class="input-holder">
                                <input id=username1 type=text name=username value="" size=30
                                    placeholder="username" tabindex="1"> <span
                                    class="input-title">username</span>
                                <svg class="error-icon" viewBox="0 0 6.34 6.34">
                                    <g id="alert" viewBox="0 0 6.34 6.34">
                                        <path
                                            d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z"
                                            transform="translate(-27.16 -9.13)" fill=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="row-form">
                            <div class="input-holder">
                                <input type="email" id="email" name=email value=""
                                    placeholder="email address" tabindex="2"> <span
                                    class="input-title">email address</span>
                                <svg class="error-icon" viewBox="0 0 6.34 6.34">
                                    <g id="alert" viewBox="0 0 6.34 6.34">
                                        <path
                                            d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z"
                                            transform="translate(-27.16 -9.13)" fill=""></path>
                                    </g>
                                </svg>
                            </div>

                            <div class="input-holder">
                                <input type="email" id="email1" name=email1 value=""
                                    placeholder="email address" tabindex="2"> <span
                                    class="input-title">Confirm email address</span>
                                <svg class="error-icon" viewBox="0 0 6.34 6.34">
                                    <g id="alert" viewBox="0 0 6.34 6.34">
                                        <path
                                            d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z"
                                            transform="translate(-27.16 -9.13)" fill=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="accept-rules">
                            <br><br>
                            <input id=accept type=checkbox name=agree value=1 tabindex="3" checked>
                            <label for="accept">By registering you accept and agree to the RXAVA LTD's
                                <a target="_blank" href="?a=rules">Terms and Conditions</a>
                            </label>
                        </div>



                        <div class="error-msg hidden">
                            <svg viewBox="0 0 17.63 17.62">
                                <g id="warning-icon" viewBox="0 0 17.63 17.62">
                                    <g clip-path="url(#clip-path)">
                                        <path
                                            d="M16.63,8.81A7.82,7.82,0,1,1,8.81,1,7.81,7.81,0,0,1,16.63,8.81Z"
                                            transform="translate(0 0)" fill="none"
                                            stroke-miterlimit="10" stroke-width="2"></path>
                                        <line x1="8.81" y1="3.92" x2="8.81" y2="10.22" fill="none"
                                            stroke-miterlimit="10" stroke-width="2"></line>
                                        <line x1="8.81" y1="11.69" x2="8.81" y2="13.71" fill="none"
                                            stroke-miterlimit="10" stroke-width="2"></line>
                                    </g>
                                </g>
                            </svg> <span></span>
                        </div>
                    </div>
                    <div id="step2" class="step-content">
                        <div class="row-form">
                            <div class="input-holder">
                                <input id=password type=password name=password value=""
                                    placeholder="Account password" tabindex="-1"> <span
                                    class="input-title">Account password</span>
                                <svg class="error-icon" viewBox="0 0 6.34 6.34">
                                    <g id="alert" viewBox="0 0 6.34 6.34">
                                        <path
                                            d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z"
                                            transform="translate(-27.16 -9.13)" fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="input-holder">
                                <input id=password_confirmation type=password name=password_confirmation value=""
                                    placeholder="Re-type Password" tabindex="-1"> <span
                                    class="input-title">Re-type Password</span>
                                <svg class="error-icon" viewBox="0 0 6.34 6.34">
                                    <g id="alert" viewBox="0 0 6.34 6.34">
                                        <path
                                            d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z"
                                            transform="translate(-27.16 -9.13)" fill=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="error-msg hidden">
                            <svg viewBox="0 0 17.63 17.62">
                                <g id="warning-icon" viewBox="0 0 17.63 17.62">
                                    <g clip-path="url(#clip-path)">
                                        <path
                                            d="M16.63,8.81A7.82,7.82,0,1,1,8.81,1,7.81,7.81,0,0,1,16.63,8.81Z"
                                            transform="translate(0 0)" fill="none"
                                            stroke-miterlimit="10" stroke-width="2"></path>
                                        <line x1="8.81" y1="3.92" x2="8.81" y2="10.22" fill="none"
                                            stroke-miterlimit="10" stroke-width="2"></line>
                                        <line x1="8.81" y1="11.69" x2="8.81" y2="13.71" fill="none"
                                            stroke-miterlimit="10" stroke-width="2"></line>
                                    </g>
                                </g>
                            </svg> <span></span>
                        </div>
                    </div>

                    <div id="step3" class="step-content ">
                        <div class="input-holder">
                            <input id=fullname type=text name=fullname value="" placeholder="full name"
                                tabindex="-1"> <span class="input-title">full name</span>
                        </div>
                        <div class="security-detail row-form">
                            <div class="input-holder">
                                <select id=questions name=sq class=inpts tabindex="-1">
                                    <option selected>Security Questions</option>
                                    <option>What Is your favorite book?</option>
                                    <option>What city were you born in?</option>
                                    <option>What is your favorite pet’s name?</option>
                                    <option>What is your favorite sports team?</option>
                                    <option>Where did you go to high school?</option>
                                </select>
                                <svg class="arrow-icon" viewBox="0 0 5.55 10.29">
                                    <g id="single-arrow" viewBox="0 0 5.55 10.29">

                                        <g clip-path="url(#clip-path)">
                                            <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none"
                                                stroke-miterlimit="10" stroke-width="2"></polyline>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="input-holder">
                                <input id=securityAnswer type=text name=sa value=""
                                    placeholder="security Answer" tabindex="-1"> <span
                                    class="input-title">security Answer</span>
                            </div>
                        </div>

                        <div class="error-msg hidden">
                            <svg viewBox="0 0 17.63 17.62">
                                <g id="warning-icon" viewBox="0 0 17.63 17.62">

                                    <g clip-path="url(#clip-path)">
                                        <path
                                            d="M16.63,8.81A7.82,7.82,0,1,1,8.81,1,7.81,7.81,0,0,1,16.63,8.81Z"
                                            transform="translate(0 0)" fill="none"
                                            stroke-miterlimit="10" stroke-width="2"></path>
                                        <line x1="8.81" y1="3.92" x2="8.81" y2="10.22" fill="none"
                                            stroke-miterlimit="10" stroke-width="2"></line>
                                        <line x1="8.81" y1="11.69" x2="8.81" y2="13.71" fill="none"
                                            stroke-miterlimit="10" stroke-width="2"></line>
                                    </g>
                                </g>
                            </svg> <span></span>
                        </div>

                    </div>

            </div>
            <div class="step-control">
                <div class="btn btn--arrow btn-prev invisible">Previous
                    <svg id="arrow" viewBox="0 0 83.82 125.21">
                        <g id="arrowRight" viewBox="0 0 83.82 125.21">
                            <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none"
                                stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                        </g>
                    </svg>
                </div>
                <div class="btn btn-next btn--twoPart" tabindex="-1">Continue
                    <label class="loading">
                        <img src="styles/img/source.gif">
                    </label>
                    <div>
                        <svg id="arrow" viewBox="0 0 83.82 125.21">
                            <g id="arrowRight" viewBox="0 0 83.82 125.21">
                                <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none"
                                    stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            </form>


        </div>



        <div class="inner-caption"> <span> Already have an account? <a href="{{ route('login.show') }}">Login Here</a>
            </span>
            phemesafetrade.com © 2021 Copyright. All Rights Reserved.</div>
    </div>
</div>
@endsection