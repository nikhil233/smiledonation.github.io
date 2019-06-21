<!DOCTYPE html>
<html>
<head>
	<title> donate here</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(bacche.jpg); background-size: cover;">

	<div class="container">
		<div class="row justify-content-centre">
			<div class="col-lg-10 mb-5">
				<h2 class="text-center p-2 text-primary">FILL THE DETAILS TO DONATE</h2>
				<form action="pay.php" method="POST">
				<table class="table table-bordered table-dark" width="500px">
					<tr>
						<th>AMOUNT :</th>
						<td><input type="number" name="amount" class="form-control" placeholder="Enter the amount" required></td>
					</tr>
					<tr>
						<th>NAME:</th>
						<td><input type="text" name="name" class="form-control" placeholder="Enter your name" required></td>
					</tr>
					<tr>
						<th>EMAIL: </th>
						<td><input type="email" name="email" class="form-control" placeholder="Enter your email" required></td>
					</tr>
					<tr>
						<th>PHONE NO: </th>
						<td><input type="phone" name="phone" class="form-control" placeholder="enter your phone no" required></td>
					</tr>					
					
				</table>
				<input type="submit" name="submit" class="btn btn-danger btn-lg" value="PAY NOW">

				</form>

			</div>
			
		</div>
		
	</div>

</body>
</html>