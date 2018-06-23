<?php

require 'dbconnect.php';
// Do not edit this if you are not familiar with php
error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
if($post) {
    
	$accesscode = stripslashes($_POST['accesspin']);

    
    // Checks Phone Field
    if(!$accesscode) {
        $error .= 'Please Enter Access Pin<br />';
    }
	  
     // check for  error. 
   
  if(!$error) {
  

	$result = mysql_query("SELECT * FROM payment WHERE accesscode = '$accesscode'");
	
	$passwordexist =mysql_num_rows($result);
	$pin_usage = mysql_fetch_assoc($result); 
	$usage = $pin_usage['codeusage'];
   
  if($passwordexist == 1) {
  
  // validate pin usage
		if($usage == 0)
		{
		
 $usedpin = 1;
 $add_qry = "UPDATE `payment` SET `codeusage` = '1'  WHERE `accesscode` = '$accesscode' ";
 $add_result = @mysql_query($add_qry) or die(mysql_error());
							
			if ($add_result)
			{
			$response['error'] = false;
            $response['msg'] = 'Successful';
			
			}
		
		}  
            
  		else {
		 $response['error'] = true;
         $response['msg'] = 'Access Pin Used';
        }   	
			
        } else {
		 $response['error'] = true;
         $response['msg'] = 'Wrong Pin';
        }   
	
   }else {
        $response['error'] = true;
        $response['msg'] = $error;
    }
    echo json_encode($response);
	
	
}
?>