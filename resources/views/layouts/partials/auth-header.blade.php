<div class="row">
    <div class="top-header" style="padding-right:0; padding-left:0">
        <div class="col-md-2 col-sm-2 col-xs-2">
            <div class="logo">
                <a href="{{ route('welcome') }}">
                    <img src="styles/img/header-main.png">
                </a>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <ul class="navbar">
                <li> <a href="{{ route('profile.show') }}">Company Profile</a>
                </li>
            
                <li> <a href="{{ route('support.show') }}">Help Center</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 text-right">
            <div class="login-register">
                <div class="login"><a href="{{ route('login.show') }}">Login</a>
                </div>
                <div class="register"><a href="{{ route('register.show') }}">Register</a>
                </div>
            </div>
            <div class="menu-icon">
                <svg viewBox="0 0 114.03 93">
                    <g id="menuIcon" viewBox="0 0 114.03 93">
                        <path d="M297.64,371.67h114m-114,39h114m-114,39h114" transform="translate(-297.64 -364.17)" fill="none" stroke-miterlimit="10" stroke-width="15"></path>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</div>