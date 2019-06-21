<!DOCTYPE html>
<html>
<head>
	<title>THANK YOU FOR DONATING</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body style="">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h1 class="text-center">THANK YOU FOR DONATING</h1>
				<?php
				include 'instamojo/Instamojo.php';
				$api = new Instamojo\Instamojo('test_b595972d8ea7f1172279b567181', 'test_79714081fb38f4f213b468a54b7', 'https://test.instamojo.com/api/1.1/');
				$payid=$_GET['payment_request_id'];


				try{
					$response = $api->paymentRequestStatus($payid);
					?>
					<table class="table table-borderd">
						<tr>
								<th>Payment Id:</th>
								<td><?= $response['payments'][0]['payment_id']; ?></td>
						</tr>
						
					</table>
					<?php


				}
				catch(exeption $e){
					print("error:".$e->getMessage());
				}
				?>
								
			</div>
			
		</div>
		
	</div>
</body>
</html>