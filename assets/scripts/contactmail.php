<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "jayson@convictioneliquids.com";
    $email_subject = "Website Contact Form";

 
    $first_name = $_POST['first_name']; // required
    //$last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required    
    //$phone = $_POST['phone']; // required
    //$leadtype = $_POST['leadtype']; // required
    $comments = $_POST['comments']; // required
 
    
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    //$email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";   
    //$email_message .= "Phone: ".clean_string($phone)."\n";
    //$email_message .= "Lead Type: ".clean_string($leadtype)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
sleep(2);
echo "<meta http-equiv='refresh' content=\"0; url=http://www.convictioneliquid.info/conviction/form.php\">";
?>
 
<?php
}
?>