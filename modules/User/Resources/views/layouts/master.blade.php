<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link href="{{ asset('fsale/lib/dist/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('fsale/develop/css/styleMain.css') }}" rel="stylesheet">
		<link href="{{ asset('fsale/develop/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<script type="text/javascript" src="{{ asset('fsale/develop/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('fsale//lib/dist/js/bootstrap.js') }}"></script>
		<meta name="robots" content="index,follow"/>
		<meta name="description" content="FB.SALE"/>
		<link rel="canonical" href="fb.sale"/>
		<meta property="og:type" content="article"/>
		<meta property="og:title" content="FB.SALE"/>
		<meta property="og:description" content="FB.SALE"/>
		<meta property="og:url" content="http://fb.sale"/>
		<meta property="og:site_name" content="fb.sale"/>
		<meta property="og:image:width" content="600"/>
		<meta property="og:image:height" content="360"/>
		<meta name="csrf_token" content="Bn55uSZODWGn3gkeSerusa8hGI5xwVR8o67iRkX6">
		<meta property="og:image" content=""/>
	</head>
	<body>
		@yield('content')
	</body>
</html>