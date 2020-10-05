<?php 


$to = 'edgeopt@gmail.com';
$subject = 'dsdasa';
$message = 'vvv'; 
$from = 'edgeai.prospect@gmail.com';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}

?>