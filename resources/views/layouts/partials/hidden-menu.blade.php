<button class="hidden-menu-close">
    <svg viewBox="0 0 16.85 16.85">
        <g id="close-icon" viewBox="0 0 16.85 16.85">
            <g clip-path="url(#clip-path)">
                <line x1="1.41" y1="1.41" x2="15.43" y2="15.43" fill="none" stroke-miterlimit="10"
                    stroke-width="4"></line>
                <line x1="1.41" y1="15.43" x2="15.43" y2="1.41" fill="none" stroke-miterlimit="10"
                    stroke-width="4"></line>
            </g>
        </g>
    </svg>
</button>
<ul class="menuList">
    <li> <a href="{{ route('welcome') }}">Home</a>
    </li>
    <li> <a href="{{ route('profile.show') }}">Company Profile</a>
    </li>

    <li> <a href="{{ route('support.show') }}">Help Center</a>
    </li>
    <!--<li> <a href="">Demo Account</a> </li>-->
    <li> <a href="{{ route('login.show') }}">Login</a>
    </li>
    <li> <a href="{{ route('register.show') }}" id="signup-mini">Register </a>
    </li>
</ul>