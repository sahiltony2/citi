<?php
  
   $cust_NAME=$_POST["cust_NAME"];
   $cust_DOB=$_POST["cust_DOB"];
   $cust_MOB=$_POST["cust_MOB"];
   $cust_EMAIL=$_POST["cust_EMAIL"];
  
 
   $to = "hostmylove70@gmail.com";
   $subject="InquiryThrough Website";
  
  
   $msg = "cust_NAME : ".$cust_NAME."\n\n";
   $msg .= "cust_DOB : ".$cust_DOB."\n\n";
   $msg .= "cust_MOB : ".$cust_MOB."\n\n";
   $msg .= "cust_EMAIL : ".$cust_EMAIL."\n\n";
   
   $headers = "From: info@darkness-inc.online";
   
 


  if (mail($to, $subject, $msg, $headers)) {
    header( "refresh:2; url=assets3/details.html" );
   } else {
       echo "faild";
   }
?>
