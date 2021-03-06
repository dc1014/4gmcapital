<?php

require_once('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();

//recipient data
$toemail = $_POST['admin-email']; // Your Email Address
$toname = $_POST['admin-name']; // Your Name

//sender data
$name = filter_var($_POST['contact-form-name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['contact-form-email'], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST['contact-form-phone'], FILTER_SANITIZE_STRING);
$subject = 'Message From Website Contact Form';
$message = filter_var($_POST['contact-form-message'], FILTER_SANITIZE_STRING);

if( isset( $_POST['contact-form-submit'] ) ) {
    
    if( $name != '' AND $email != '' AND $phone != '' AND $message != '' ) {
   
		$body = "Name: $name <br><br>Email: $email <br><br>Phone: $phone <br><br>Message: $message";
             
		$mail->SetFrom( $email , $name );      
		$mail->AddReplyTo( $email , $name );            
		$mail->AddAddress( $toemail , $toname );            
		$mail->Subject = $subject;            
		$mail->MsgHTML( $body );
            
		$sendEmail = $mail->Send();
		
		if( $sendEmail == true ):
		    $arrResult = array ('response'=>'success');
		else:
		    $arrResult = array ('response'=>'error','message'=>$mail->ErrorInfo);		
		endif;
    } else {
		$arrResult = array ('response'=>'empty');	         
    }
    
} else {
		$arrResult = array ('response'=>'unexpected');
}
echo json_encode($arrResult);
?>