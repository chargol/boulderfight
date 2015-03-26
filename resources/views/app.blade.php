<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Eifelblock - Wettkampf</title>

	
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/select2.css">
	<link rel="stylesheet" type="text/css" href="/css/datedropper.css">
</head>

<body id="csstyle">
	
	<div class="page">
		@yield('app.content')
	</div>

	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/select2.js"></script>
	<script type="text/javascript" src="/js/datedropper.js"></script>

	<script type="text/javascript">
	  $('select').select2();
	  $('#birthday').dateDropper({
	  	format: "d/m/Y",
	  	lang: "de",
	  	minYear: 1935,
	  	maxYear: 2010
	  });

	</script>
	
</body>

</html>