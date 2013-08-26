<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "bcsteineck@gmail.com";
    $email_subject = "Trimac Application";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['email']) ||
        !isset($_POST['tenants']) ||
        !isset($_POST['college']) ||
        !isset($_POST['address'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; 
    $phone = $_POST['phone']; 
    $email_from = $_POST['email']; 
    $tenants = $_POST['tenants']; 
    $college = $_POST['college'];
     
    // $error_message = "";
    // $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  // if(!preg_match($email_exp,$email_from)) {
  //   $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  // }
  //   $string_exp = "/^[A-Za-z .'-]+$/";
  // if(!preg_match($string_exp,$first_name)) {
  //   $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  // }
  // if(!preg_match($string_exp,$last_name)) {
  //   $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  // }
  // if(strlen($comments) < 2) {
  //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  // }
  // if(strlen($error_message) > 0) {
  //   died($error_message);
  // }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Number: ".clean_string($tenants)."\n";
    $email_message .= "In College: ".clean_string($college)."\n";
    $email_message .= "Interested in: ".clean_string($address)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Trimac Rentals</title>

    <link rel="icon" type="image/png" href="images/icon.png">

    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js/jquery.js"></script>

    <script type="text/javascript" src="js/binds.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
    <body>
      <div class="center">
        <div class="receive">
          Thank you for contacting Trimac Rentals. Unfortunately, we are not accepting any forms at this time.
          <!-- Thank you for contacting Trimac Rentals&#44; we will be in touch with you very soon. -->
        </div>
      </div>
    </body>
</html>
 
<?php
}
?>








