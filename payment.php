<?php
require 'dbconnect.php';
// Do not edit this if you are not familiar with php
error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
if($post) {
    
    $usermail = $_POST['usermail'];
	$userphone = $_POST['phone'];
	$amount = $_POST['amount'];
	$userid = $_POST['userid'];
	$transactionid = $_POST['transactionid'];
	
	
	
    // Check Name Field
    if(!$usermail) {
        $error .= 'Please Enter Your First Name.<br />';
    }
    if(!$userphone) {
        $error .= 'Please Enter Your Second Name.<br />';
    }
	
   

    // Checks Subject Field
    if(!$transactionid) {
        $error .= 'Please Enter Your Phone number.<br />';
    }
    if(!$amount) {
        $error .= 'Please Enter the Amount Paid.<br />';
    }
	
  
	 // User Access Pin
	 
	 function createRandomPassword() {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
$accesscode = createRandomPassword();
	
     // save user. 
   
  if(!$error) {
  
$save = mysql_query("INSERT INTO payment (uid, amount, transaction_id, accesscode,userphone,usermail)
VALUES ('$userid','$amount','$transactionid','$accesscode','$userphone','$usermail')");
$payment = mysql_query("INSERT INTO savsoft_payment (uid, gid, amount, transaction_id, other_data)
VALUES ('$userid', '1','$amount','$accesscode','$transactionid')");
if($payment) {
$response['error'] = false;
$response['msg'] = 'Successful';
$response['code'] = $accesscode;
	
   }else {
        $response['error'] = true;
        $response['msg'] = $error;
    }
    echo json_encode($response);
}
}
   ?>