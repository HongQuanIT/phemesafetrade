    <header class="dashboard-header">
        <div class="top-head">
            <div class="container">
                <div class="logo">
                    <a href="/?a=home">
                        <img src="styles/img/header-main.png">
                    </a> <span style="margin-top: 7px; text-transform: uppercase;margin-left: 10px">Investor Dashboard</span>
                </div>
                <div class="profile-wrap">
                    <div class="profile-type hidden"> VIP </div>
                    <svg class="profile-icon" viewBox="0 0 24.2 24.2">
                        <g clip-path="url(#clip-path)">
                            <ellipse cx="12.1" cy="8.39" rx="2.45" ry="2.7" fill="none" stroke-miterlimit="10" stroke-width="2"></ellipse>
                            <path d="M8.42,18.5h7.36a.7.7,0,0,0,.7-.7h0a3.85,3.85,0,0,0-3.85-3.86H11.57A3.85,3.85,0,0,0,7.72,17.8h0A.7.7,0,0,0,8.42,18.5Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                            <path d="M23.2,12.1A11.1,11.1,0,1,1,12.1,1,11.1,11.1,0,0,1,23.2,12.1Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                        </g>
                    </svg>
                    <div class="profile-user"> <span>{{auth()->user()->name}}</span>
                        <svg viewBox="0 0 5.55 10.29">
                            <g id="single-arrow" viewBox="0 0 5.55 10.29">

                                <g clip-path="url(#clip-path)">
                                    <polyline points="4.76 0.61 1.26 5.14 4.76 9.68" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="profile-dropdown">
                        <div class="user-name">{{auth()->user()->name}}</div>
                        <div><a><span>{{auth()->user()->email}}</span></a></div>
                        <div class="edit-profile"><a href="{{route('auth.edit')}}">
                                <svg viewBox="0 0 14.2 14.2">
                                    <g id="setting-icon" viewBox="0 0 14.2 14.2">

                                        <g clip-path="url(#clip-path)">
                                            <path d="M6.25.5H8a.49.49,0,0,1,.33.41c.1.43.21.86.31,1.28a.21.21,0,0,0,.13.16c.22.08.42.17.63.26a.19.19,0,0,0,.19,0l1-.62a.41.41,0,0,1,.58.08l1,1a.42.42,0,0,1,.07.59l-.61,1a.17.17,0,0,0,0,.19c.09.21.18.43.26.64a.2.2,0,0,0,.15.13c.45.1.9.22,1.35.33a.4.4,0,0,1,.35.45V7.81a.4.4,0,0,1-.36.45L12,8.6a.25.25,0,0,0-.13.12c-.09.2-.17.41-.26.62a.17.17,0,0,0,0,.19l.6,1a.43.43,0,0,1-.07.6l-1,1a.42.42,0,0,1-.61.07l-1-.58a.18.18,0,0,0-.21,0c-.21.1-.43.19-.65.27a.2.2,0,0,0-.13.15c-.1.45-.22.9-.33,1.35a.4.4,0,0,1-.45.35H6.39a.4.4,0,0,1-.45-.36c-.11-.45-.22-.9-.34-1.35a.28.28,0,0,0-.11-.13l-.65-.28a.18.18,0,0,0-.19,0l-1,.59a.41.41,0,0,1-.59-.08l-1-1a.43.43,0,0,1-.07-.6c.19-.32.38-.64.58-1a.16.16,0,0,0,0-.19c-.1-.21-.19-.43-.27-.65a.2.2,0,0,0-.16-.13L.89,8.28A.51.51,0,0,1,.5,8V6.25a.48.48,0,0,1,.39-.32l1.3-.32a.2.2,0,0,0,.16-.13,5.25,5.25,0,0,1,.22-.55.19.19,0,0,0,0-.19L1.9,3.64A.42.42,0,0,1,2,3l1-1A.41.41,0,0,1,3.56,2l1,.63a.18.18,0,0,0,.21,0c.21-.1.43-.19.66-.28a.19.19,0,0,0,.14-.16c.1-.43.22-.86.32-1.3A.48.48,0,0,1,6.25.5Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10"></path>
                                            <path d="M7.1,6A1.08,1.08,0,1,1,6,7.1,1.08,1.08,0,0,1,7.1,6Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10"></path>
                                        </g>
                                    </g>
                                </svg>
                                Account Settings</a></div>
                        <div><a href="{{route('logout.perform')}}">Logout</a></div>
                    </div>
                </div>
     
        </div>
        </div>
        <div class="dashboard-menu">
            <div class="container">
                <ul class="dashboard-nav">
                    <li class="active"> <a href="?a=account">
                            <svg viewBox="0 0 15.6 15.48">
                                <g id="dashboard-icon" viewBox="0 0 15.6 15.48">

                                    <g clip-path="url(#clip-path)">
                                        <rect x="11.99" y="0.5" width="3.11" height="14.48" fill="none" stroke-miterlimit="10"></rect>
                                        <rect x="6.24" y="3.95" width="3.11" height="11.03" fill="none" stroke-miterlimit="10"></rect>
                                        <rect x="0.5" y="7.39" width="3.11" height="7.58" fill="none" stroke-miterlimit="10"></rect>
                                    </g>
                                </g>
                            </svg>
                            My Dashboard </a> </li>
                    <li> <a href="?a=deposit">
                            <svg viewBox="0 0 15.72 13.07">
                                <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                    <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                    <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                    <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                </g>
                            </svg>
                            Make Investment </a>
                    </li>
                    <li> <a href="?a=withdraw">
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
                            Withdraw Funds </a> </li>
                    <li> <a href="?a=deposit_list">
                            <svg viewBox="0 0 12.66 9.1">
                                <g id="investlist-icon" viewBox="0 0 12.66 9.1">
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
                            Manage Portfolio </a> </li>
                    <li> <a href="?a=earnings">
                            <svg viewBox="0 0 13.88 17.17">
                                <g id="transaction-icon" viewBox="0 0 13.88 17.17">
                                    <rect x="0.5" y="4.98" width="12.88" height="7.24" rx="0.9" ry="0.9" fill="none" stroke-miterlimit="10"></rect>
                                    <circle cx="7.04" cy="8.6" r="1.83" fill="none" stroke-miterlimit="10"></circle>
                                    <polyline points="9.28 14.65 7.04 16.52 4.8 14.65" fill="none" stroke-miterlimit="10"></polyline>
                                    <polyline points="4.8 2.52 7.04 0.65 9.28 2.52" fill="none" stroke-miterlimit="10"></polyline>
                                </g>
                            </svg>
                            Transactions </a> </li>
                    <li> <a href="?a=referals">
                            <svg viewBox="0 0 19.89 26.3">
                                <g id="referrals-icon" viewBox="0 0 19.89 26.3">

                                    <g clip-path="url(#clip-path)">
                                        <ellipse cx="9.94" cy="6.5" rx="5" ry="5.5" fill="none" stroke-miterlimit="10" stroke-width="2"></ellipse>
                                        <path d="M2.43,25.3h15a1.43,1.43,0,0,0,1.43-1.43h0A7.86,7.86,0,0,0,11,16H8.86A7.86,7.86,0,0,0,1,23.86H1A1.43,1.43,0,0,0,2.43,25.3Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                    </g>
                                </g>
                            </svg>
                            Referrals </a> </li>
                    <li> <a href="?a=security">
                            <svg viewBox="0 0 13.51 19.38">
                                <g id="security" viewBox="0 0 13.51 19.38">

                                    <g clip-path="url(#clip-path)">
                                        <rect x="1" y="9.31" width="11.51" height="9.07" rx="2.5" ry="2.5" fill="none" stroke-miterlimit="10" stroke-width="1.5"></rect>
                                        <path d="M2.13,6.1V5.42a4.43,4.43,0,0,1,8.85,0v4" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    </g>
                                </g>
                            </svg>
                            Two Factor </a> </li>
                </ul>
                <div class="mini-menu">
                    <svg id="arrow" viewBox="0 0 83.82 125.21">
                        <g id="arrowRight" viewBox="0 0 83.82 125.21">
                            <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                        </g>
                    </svg>
                    Dashboard Menu
                </div>
            </div>
        </div>
    </header>