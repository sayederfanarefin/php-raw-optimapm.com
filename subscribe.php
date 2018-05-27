<?php

	$email  = $_POST['email'];
	
// the message
$msg = "New User:" . $email;


// send email
mail("erfanjordison@gmail.com","Optima New User",$msg);
mail($email,"Thank You!", "Thank you fir subscribing to Optima.");
?>
