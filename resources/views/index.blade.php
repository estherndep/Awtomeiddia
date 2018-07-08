<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{csrf_token()}}">
		<script>window.laravel = {csrf_token: '{{csrf_token()}}'} </script>
		<title>test</title>

		<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
	</head>

<body>
    <div id="app">
		<side-drawer></side-drawer>
	</div>

    
		
	
	  
	   <div id= "main">
			<div id = "feature">
				<div class="block-wrapper">
					<div id="outline"></div>
						<div class ="block-flex">
							<div id= "display"></div>
							<div id = "sub-feature">
								<div id= "projects"></div>
								<div id= "services"></div>
							</div>
					</div>
				</div>
		</div>
	
	<script src = "{{asset('js/app.js')}}"></script>
</body>
</html>
