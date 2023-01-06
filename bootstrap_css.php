<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<form>
		<div class="name">
			<label for="inputfname" class="col-sm-2 col-form-label">First Name:</label>
    		<input type="label" class="form-control" placeholder="Enter First Name...">
    		<label for="inputlname" class="col-sm-2 col-form-label">Last Name:</label>
    		<input type="label" class="form-control" placeholder="Enter Last Name...">
		</div>
		<div class="address">
    		<label>City:</label><br>
    		<input type="label" name="city" placeholder="Enter City..."><br>
    		<label>State:</label><br>
    		<input type="label" name="state" placeholder="Enter State..."><br>
    		<label>ZIP Code:</label><br>
    		<input type="label" name="zip" placeholder="Enter ZIP...">
 		</div>
 		<div class="btn">
    		<button type="submit" class="btn btn-primary">Register</button>
  		</div>
  		<?php include 'bootstrap_components.php';?>
  	</form>
</body>
</html>