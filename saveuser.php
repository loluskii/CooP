<?php

require 'dbconnect.php';
// Do not edit this if you are not familiar with php
error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
if($post) {
    
    $fname = stripslashes($_POST['fname']);
	$lname = stripslashes($_POST['lname']);
    $email = $_POST['email'];
    $phone = stripslashes($_POST['phone']);
	$password = stripslashes($_POST['upassword']);
    
    // Check Name Field
    if(!$fname) {
        $error .= 'Please Enter Your First Name.<br />';
    }
     // Check Name Field
    if(!$lname) {
        $error .= 'Please Enter Your Last Name.<br />';
    }
    // Checks Email Field
    if(!$email) { 
        $error .= 'Please enter an e-mail address.<br />';
    }
	// Checks Password
    if(!$password) {
        $error .= 'Please enter your password.<br />';
    }

    // Checks Phone Number Field
    if(!$phone) {
        $error .= 'Please enter your Phone number.<br />';
    }
	  
   
	
	// codeconfirmation
	 
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
$confirmcode = createRandomPassword();
	
   
     // save user. 
   
  if(!$error) {
  

	$qry="SELECT * FROM user WHERE phonenumber = '$phone'";
	$result=mysql_query($qry);
	$exist =mysql_num_rows($result);
      
  if($exist == 1) {
  
            $response['error'] = true;
            $response['msg'] = 'Phone Number Already In Use. ';
            $response['msg'] .= 'Enter a New one. ';
			
        } else {
$save = mysql_query("INSERT INTO user (fname,lname, email, phonenumber, password, confirmcode)
VALUES ('$fname','$lname','$email','$phone','$password','$confirmcode')"); 
 		if($save)
		{
			
			
            $response['error'] = false;
            $response['msg'] = 'Successful';
			$response['confirmcode'] = $confirmcode;
		}
		else {
        $response['error'] = true;
        $response['msg'] = 'Database Error';
    }
        }   
	
   }else {
        $response['error'] = true;
        $response['msg'] = $error;
    }
    echo json_encode($response);
}
