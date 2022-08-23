
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
	<title>Zhopo - eCommerce Mobile Template</title>
	 <!-- Styles --> 
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700,900" rel="stylesheet">
	<link href="{{ asset('css/framework7.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/framework7-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">

		<div class="view view-main view-init ios-edges" data-url="/">
			<main class="py-4">
            @yield('content')
        	</main>
		</div>
	</div>
	<script src="{{ asset('js/framework7.js') }}" defer></script>
	<script src="{{ asset('js/routes.js') }}" defer></script>
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>