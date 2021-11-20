<!doctype html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	

	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="{{ asset('project') }}/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('project') }}/css/style.css">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>

    <body>
<div class="top-bar">
	<div class="container">
		
	</div> 
</div>


<div class="main">
<div class="container">
<h2>Here are your Results!</h2>
<div class="results">
          
@foreach($result as $key => $value)
{{ $key .':'. $value .' occurences' }}<br>
@endforeach
</div>
<a href="{{ route('back') }}"><button id="sub">Back</button></a>
</body>
</html>