<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Login | Jamingup Studio</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ url("assetlogin/images/icons/favicon.ico") }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/vendor/bootstrap/css/bootstrap.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/vendor/animate/animate.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/vendor/css-hamburgers/hamburgers.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/vendor/animsition/css/animsition.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/vendor/select2/select2.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/vendor/daterangepicker/daterangepicker.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/css/util.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("assetlogin/css/main.css") }}">

</head>
<body>

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
             @yield('_content') 
            </div>
        </div>
    </div>


    <script src="{{ url("assetlogin/vendor/jquery/jquery-3.2.1.min.js") }}"></script>
    <script src="{{ url("assetlogin/vendor/animsition/js/animsition.min.js") }}"></script>
    <script src="{{ url("assetlogin/vendor/bootstrap/js/popper.js") }}"></script>
	<script src="{{ url("assetlogin/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ url("assetlogin/vendor/select2/select2.min.js") }}"></script>
    <script src="{{ url("assetlogin/vendor/daterangepicker/moment.min.js") }}"></script>
	<script src="{{ url("assetlogin/vendor/daterangepicker/daterangepicker.js") }}"></script>
    <script src="{{ url("assetlogin/vendor/countdowntime/countdowntime.js") }}"></script>
    <script src="{{ url("assetlogin/js/main.js") }}"></script>



</body>
</html>

