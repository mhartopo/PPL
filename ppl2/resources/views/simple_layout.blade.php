<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>
		@yield('title')
	</title>
	<meta name="description" content="Bandung Web Kit" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="{{URL::asset('libs/jquery/bootstrap/dist/css/bootstrap.css')}}" type="text/css" />
</head>

<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>