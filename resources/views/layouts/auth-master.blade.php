<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="manifest" href="manifest.json" /> -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>phemesafetrade.com</title>

    <meta name="designer" href="https://codemasterweb.com">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="shortcut icon" href="styles/img/favicon.ico?v=1.2" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="styles/css/main.css?v=1.9" />
    <script type="text/javascript"> //<![CDATA[
        var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
        document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
    </script>
</head>

<body class="inner-page">
    <header class="white">
        <div class="header-bg"></div>
        <div class="container">
            @include('layouts.partials.auth-header')
            <div class="container">
                @yield('content')
            </div>
            <div class="hidden-menu">
                @include('layouts.partials.hidden-menu') 
            </div>
            <script src="styles/js/jquery-3.2.1.min.js"></script>
            <script src="styles/js/general.js?v=12"></script>
            <script src="styles/js/svg4everybody.min.js?v=3"></script>
            <script src="styles/js/clipboard.min.js?v=3"></script>
            <script src="styles/js/signup.js"></script>
            <script>
                svg4everybody();
                new Clipboard('.btn--outlineCopylink');

            </script>
</body>

</html>