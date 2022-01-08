<?php
$to_email = "nidhitrivedi91296@gmail.com,himanitrivedi1874@gmail.com";
$subject = "Test PHP";
$body = "Hey You!!
    My new MailId. 
    Sorry for this.
    This will be the last Test mail!
    Bye bye... ";
$headers = "From: ht1872004@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
