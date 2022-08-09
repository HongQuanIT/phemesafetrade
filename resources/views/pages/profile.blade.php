@extends('layouts.app-master')

@section('content')
    <style>
        .walletsaccount {
            left: 20px;
            position: absolute;
            width: 30px;
            height: 30px;
            top: -moz-calc((100% - 50px)/2);
            top: -webkit-calc((100% - 50px)/2);
            top: calc((100% - 50px)/2);
        }

        .codecx {
            position: absolute;
            width: 88px;
            height: 35px;
            right: 35px;
            top: -moz-calc((100% - 35px)/2);
            top: -webkit-calc((100% - 35px)/2);
            top: calc((100% - 35px)/2);
        }

        .inputcx {
            background: #fff !important;
            border: 1px solid rgba(34, 54, 65, 0.1) !important;
        }

        .inputcx:focus {
            border-color: #2ad289 !important;
        }

        .inputcx:active {
            border-color: #2ad289 !important;
        }


        @media screen and (min-width: 769px) {
            #payinput {
                padding-bottom: 20px;

            }

            #payinput2 {
                padding-bottom: 20px;

            }
        }

        @media screen and (max-width: 768px) and (min-width: 601px) {
            #payinput {
                padding-bottom: 20px;

            }

            #payinput2 {
                padding-bottom: 20px;

            }

            .walletsaccount {
                left: 10px;
                position: absolute;
                width: 30px;
                height: 30px;
                top: -moz-calc((100% - 50px)/2);
                top: -webkit-calc((100% - 50px)/2);
                top: calc((100% - 50px)/2);
            }
        }


        @media screen and (max-width: 600px) and (min-width: 500px) {
            .walletsaccount {
                left: 10px;
                position: absolute;
                width: 30px;
                height: 30px;
                top: -moz-calc((100% - 30px)/2);
                top: -webkit-calc((100% - 30px)/2);
                top: calc((100% - 30px)/2);
            }
        }
    </style>
    <div class="dashboard-content edit-account">
        <div class="container">
            <div class="dashboard-title">
                <svg viewBox="0 0 14.2 14.2">
                    <g id="setting-icon" viewBox="0 0 14.2 14.2">

                        <g clip-path="url(#clip-path)">
                            <path
                                d="M6.25.5H8a.49.49,0,0,1,.33.41c.1.43.21.86.31,1.28a.21.21,0,0,0,.13.16c.22.08.42.17.63.26a.19.19,0,0,0,.19,0l1-.62a.41.41,0,0,1,.58.08l1,1a.42.42,0,0,1,.07.59l-.61,1a.17.17,0,0,0,0,.19c.09.21.18.43.26.64a.2.2,0,0,0,.15.13c.45.1.9.22,1.35.33a.4.4,0,0,1,.35.45V7.81a.4.4,0,0,1-.36.45L12,8.6a.25.25,0,0,0-.13.12c-.09.2-.17.41-.26.62a.17.17,0,0,0,0,.19l.6,1a.43.43,0,0,1-.07.6l-1,1a.42.42,0,0,1-.61.07l-1-.58a.18.18,0,0,0-.21,0c-.21.1-.43.19-.65.27a.2.2,0,0,0-.13.15c-.1.45-.22.9-.33,1.35a.4.4,0,0,1-.45.35H6.39a.4.4,0,0,1-.45-.36c-.11-.45-.22-.9-.34-1.35a.28.28,0,0,0-.11-.13l-.65-.28a.18.18,0,0,0-.19,0l-1,.59a.41.41,0,0,1-.59-.08l-1-1a.43.43,0,0,1-.07-.6c.19-.32.38-.64.58-1a.16.16,0,0,0,0-.19c-.1-.21-.19-.43-.27-.65a.2.2,0,0,0-.16-.13L.89,8.28A.51.51,0,0,1,.5,8V6.25a.48.48,0,0,1,.39-.32l1.3-.32a.2.2,0,0,0,.16-.13,5.25,5.25,0,0,1,.22-.55.19.19,0,0,0,0-.19L1.9,3.64A.42.42,0,0,1,2,3l1-1A.41.41,0,0,1,3.56,2l1,.63a.18.18,0,0,0,.21,0c.21-.1.43-.19.66-.28a.19.19,0,0,0,.14-.16c.1-.43.22-.86.32-1.3A.48.48,0,0,1,6.25.5Z"
                                transform="translate(0 0)" fill="none" stroke-miterlimit="10"></path>
                            <path d="M7.1,6A1.08,1.08,0,1,1,6,7.1,1.08,1.08,0,0,1,7.1,6Z" transform="translate(0 0)"
                                fill="none" stroke-miterlimit="10"></path>
                        </g>
                    </g>
                </svg>
                <h4>Account Settings</h4>
            </div>
        </div>
        <div class="container">
            <script language=javascript>
                function IsNumeric(sText) {
                    var ValidChars = "0123456789.";
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

                function checkform() {
                    if (document.editform.fullname.value == '') {
                        alert("Please type your full name!");
                        document.editform.fullname.focus();
                        return false;
                    }


                    if (document.editform.password.value != document.editform.password2.value) {
                        alert("Please check your password!");
                        document.editform.fullname.focus();
                        return false;
                    }




                    if (document.editform.email.value == '') {
                        alert("Please enter your e-mail address!");
                        document.editform.email.focus();
                        return false;
                    }



                    for (i in document.editform.elements) {
                        f = document.editform.elements[i];
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

                    return true;
                }
            </script>

            <form action="" method=post onsubmit="return checkform()" name=editform><input type="hidden"
                    name="form_id" value="16599700859888"><input type="hidden" name="form_token"
                    value="27d37a8d86141d386b06c50277004e87">

                <div class="edit-account-content">
                    <div class="notification" style="margin-bottom:20px"></div>
                    <div class="input-group">
                        <span class="group-title">Account Settings</span>
                        <div class="input-row">
                            <div class="input-holder">
                                <input type="text" name=email value="" class="active"> <span
                                    class="input-title">Email Address</span>
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-holder">
                                <input type=password name=password value="" placeholder="Change password"> <span
                                    class="input-title">Change password</span>
                            </div>
                            <div class="input-holder">
                                <input type=password name=password2 value="" placeholder="retype password"> <span
                                    class="input-title">retype password</span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group account-settings"> <span class="group-title">Payment Wallets</span>
                        <div class="input-row">
                            <div class="input-holder" id="payinput">
                                <input type=text class="ac-address" name="pay_account[1000][Wallet Address]" value=""
                                    placeholder="Bitcoin Wallet Address">
                            </div>
                            <div class="input-holder" id="payinput">
                                <input type=text class="ac-address" name="pay_account[1006][Wallet Address]" value=""
                                    placeholder="Ethereum Wallet Address">
                            </div>
                            <div class="input-holder" id="payinput">
                                <input type=text class="ac-address" name="pay_account[1007][Account ID]" value=""
                                    placeholder="Ripple XRP 🏷 Account ID">
                            </div>
                            <div class="input-holder" id="payinput">
                                <input type=text class="ac-address" name="pay_account[1008][Wallet Address]" value=""
                                    placeholder="Usdt Wallet Address">
                            </div>
                            <div class="input-holder" id="payinput">
                                <input type=text class="ac-address" name="pay_account[1011][Wallet address]" value=""
                                    placeholder="SOL Wallet address">
                            </div>
                            <div class="input-holder" id="payinput">
                                <input type=text class="ac-address" name="pay_account[1012][Account ID]" value=""
                                    placeholder="DOT Account ID">
                            </div>
                        </div>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type=submit value="Update" class=sbmt></td>
                        </tr>
                        </table>
            </form>

        </div>
    </div>
@endsection
