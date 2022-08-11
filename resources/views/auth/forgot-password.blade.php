@extends('layouts.auth-master')


@section('content')

<div class="inner-content recover-password-content">
        <div class="inner-content-header">
            <h4>Recover Your Password</h4>
        </div>
        <div class="recover-body">
            <ul class="step-nav">
                <li class="complete">
                    <div class="step-icon">
                        <svg class="ended" viewBox="140 0 506.34 506.34" style="width: 30px;">
                            <svg id="Layer_1" fill="#fff" enable-background="new 0 0 506.34 506.34" height="512" viewBox="0 0 506.34 506.34" width="512" xmlns="http://www.w3.org/2000/svg">
<path d="m481.162 395.052-197.697-197.698c9.939-23.978 13.243-50.72 9.301-76.499-17.59-114.986-160.347-162.164-242.736-78.098-54.698 55.81-54.317 145.219 1.028 200.564 42.499 42.498 104.556 52.174 155.652 30.818l111.077 111.077-19.467 19.467c-15.1 15.099-15.1 39.668 0 54.768l35.537 35.537c15.134 15.134 39.632 15.137 54.768 0l19.642-19.642c9.697 8.015 21.769 12.375 34.51 12.375 48.737 0 72.161-58.894 38.385-92.669zm-54.142 54.141-7.613-7.613c-6.25-6.248-16.379-6.248-22.627.001-33.727 33.726-31.758 32.75-35.537 32.75-3.88 0-2.263.524-40.293-37.507-2.623-2.623-2.623-6.891-.001-9.513l30.78-30.781c6.249-6.248 6.249-16.379 0-22.627l-130.311-130.311c-4.956-4.956-12.521-6.085-18.679-2.89-41.134 21.33-93.737 15.306-129.054-20.008-42.844-42.845-43.283-112.193-.802-155.539 42.45-43.313 112.71-44.163 156.139-1.81 36.243 35.346 42.53 88.575 21.021 130.052-3.21 6.191-2.041 13.748 2.891 18.679l205.602 205.602c0 .278 6.526 5.39 6.526 15.757 0 19.688-23.973 29.827-38.042 15.758z"></path>
                                <circle cx="151.86" cy="142.519" r="40.325"></circle>
                            </svg>
                        </svg>
                    </div>
                </li>
            </ul>


<script language="javascript">
function checkform() {
  if (document.forgotform.email.value == '') {
    alert("Please type your username or email!");
    document.forgotform.email.focus();
    return false;
  }
  return true;
}
</script>




@if ($errors->any())
<div class="alert alert-danger">
    <br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if ($message = Session::get('success')) 
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<form method="post" name="forgotform" action="/forgot">
    {!! csrf_field() !!}
    <input type="hidden" name="form_id" value="16601869074237"><input type="hidden" name="form_token" value="67ed7b4dd6895cf00f1e55235f1f183c">
<input type="hidden" name="a" value="forgot_password">
<input type="hidden" name="action" value="forgot_password">
<div class="recover-content">
 <div class="recover-form">
     <div class="input-holder">
         <input id="emailAddress" type="text" name="email" value="" placeholder="Enter username or email"> <span class="input-title">Enter username or email</span>
         <svg class="error-icon" viewBox="0 0 6.34 6.34">
             <use xlink:href="/sprites.svg?v=4#alert"></use>
         </svg>
     </div>


<button type="submit" class="btn btn--arrow btn--red">Submit
    <svg id="arrow" viewBox="0 0 83.82 125.21">
        <svg style="transform-origin: 0px 0px;" id="arrow" viewBox="0 0 83.82 125.21">
            <g id="arrowRight" viewBox="0 0 83.82 125.21">
                <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
            </g>
        </svg>
    </svg>
</button>
</div>
 <div class="alert"></div>
                    </div>
</form>
</div>
<div class="inner-caption"> <span> <a href="{{route('login.show')}}">Click here to create a new account</a> </span> phemesafetrade.com © 2021 - 2031 Copyright. All Rights Reserved.</div>
</div>

@endsection