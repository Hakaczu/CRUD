<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Pharmacy</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

	<div class="container">
		<div class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Pharmacy - Simple CRUD</a>
				</div>
				<div class="collapse navbar-collapse" id="mynavbar-content">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Add</a>
						</li>
						<li>
							<a href="#">View</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<form action="post_view.php" method="post">
			<div class="form-group">
					<input class="form-control" id="name" name="name" type="text" placeholder="Name" required>
			</div>
			<div class="form-group">
					<input class="form-control" id="quantity" name="quantity" type="number" placeholder="Quantity" required>
			</div>
				<button type="submit" class="btn btn-default" value="Submit">Submit</button>
		</form>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>