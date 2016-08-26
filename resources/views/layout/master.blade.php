<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href={{asset("css/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
	<link href={{asset("css/styles.css")}} rel="stylesheet">
</head>
<body>
@include('layout.header')
@yield('content')
@include('layout.footer')
<script src={{asset("css/bootstrap/js/jquery.min.js")}}></script>
<script  src={{asset("css/bootstrap/js/bootstrap.min.js")}} ></script>

</body>
</html>
