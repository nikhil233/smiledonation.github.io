<?php
	$amount=$_POST['amount'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];


	include 'instamojo/Instamojo.php';
	$api = new Instamojo\Instamojo('test_b595972d8ea7f1172279b567181', 'test_79714081fb38f4f213b468a54b7', 'https://test.instamojo.com/api/1.1/');

	try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "DONATION",
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
        "customer_name" => $name,
        "phone" => $phone,
        "send_sms" => true,
        "allow_repeated_payments" => false,
         "redirect_url" => "http://localhost/payment/thankyou.php"
        //"webhook" => 
        ));
    //print_r($response);

    $pay_url=$response['longurl'];
    header("location:$pay_url");
	}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
	}
?>