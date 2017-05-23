<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

		<meta charset="utf-8">
		<title>Tandy - Blog</title>
		<meta name="description" content="">
		<!-- Mobile Devices Viewport Resset-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		@include('layouts._css')
	</head>
	<body>
		<h1 class="sr-only">Summarize</h1>
		
		@include('layouts._nav')

		@yield('content')

		@include('layouts._footer')
		@include('layouts._javascript')
	</body>
</html>