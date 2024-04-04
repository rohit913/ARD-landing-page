<?php

    $subject = "Rever Homes";
	$name = $_REQUEST["name"];
	$phone = $_REQUEST["phone"];
	$email = $_REQUEST["email"];
	$subject = $_REQUEST["subject"];
	$message = $_REQUEST["message"];
	$to='asumi@asumirawatdesiign.com';
	$subject = $subject.' Enquiry';
    $form=$email;
    $headers = "From: " .$email. "\r\n";
    $headers .= "Bcc:chetika.sethi@gmail.com \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n" ;
    
    $message = "<html> <body>";
    $message .= 'Name: '.$name;
    $message .=  '<br />';
    $message .= 'Email: '.$email;
    $message .=  '<br />';
    $message .= 'Plot Size: '.$subject;
    $message .=  '<br />';
    $message .= 'Plot Location: '.$message;
    $message .=  '<br />';
    $message .= 'Phone number: '.$_REQUEST["phone"].'</p>';
    $message .= "</html></body>";
    
    if(mail($to,$subject,$message,$headers))
    { 
        echo 'success####Your query has been successfully sent.We will contact you very sooon!'; die;
       
    } 
    else{ 
        echo 'error####Something went wrong'; die;
       
    }



?>