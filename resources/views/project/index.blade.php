
<!DOCTYPE html>
<html lang="en">
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
		<div class="col-12 text-right">
		
		</div>
	</div> 
</div>

       
  
<div class="main">
       <div class="container">
           <h2>Welcome to Occurence Calculator</h2>

           <form id="inputnum" method="post" action="{{ route('count') }}">
               @csrf
     <!--<label for="input">First name:</label><br>
          <input type="text" id="input" name="input">-->
        
				<label><h4>Enter the Numbers(separated by comma)</h4></label>
                <br>
				<input type="text" name="input" id="input" placeholder="1,2,3,4...">
			
          <br>
           <button type="submit" value="Submit" name="submit" id="submit">Submit</button>
          
         
        
          </form>
</div>
</div>
</body>
</html>