<!DOCTYPE html>
<html>
<head>
<title>  Sign up / Login Form</title>
<link rel="stylesheet" href="{{asset('frontend/dist/style.css')}}">
	<title>signin</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	
	<div class="main">  	
		
			<div class="signup">
			 <h2> signup</h2>
			<form action="{{route('product.store')}}" method="POST">
                   @csrf
 				
		
					<input type="text" name="name"id="name"  class="form-control" placeholder="User name" required=""><br>
				
					<input type="text" id="slug" name="slug"  class="form-control"placeholder="Enter Your Discription" required=""><br>
					<input type="text"id="price" name="price"class="form-control" placeholder="Enter Your Price" required=""><br>
					
					<input type="text" id="size" name="size"  class="form-control"placeholder="Enter Your Size" required=""><br>
					<input type="text"id="prand" name="prand"class="form-control" placeholder="Enter Your Prand" required=""><br>
					
					<button type="submit" value="submit">Submit</button>
				</form>
			</div>
			<br>
			
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>




