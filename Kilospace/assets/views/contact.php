<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "contact@kilo.space";
 
    $email_subject = "Contact Form Submission";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'Invalid Email<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'Invalid Name<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'Invalid Name<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'Invalid Comment<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "New Contact Submission!.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($first_name)." ";
 
    $email_message .= clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->

<div class="container text-center" id="fade1">
    <h2>Contact</h2>
</div>
<div class="container text-center" id="fade2">
    <h4>Email: contact@kilo.space</h4>
</div>
<div class="container text-center" id="fade3">
    <hr />
    <h4>Automated Contact Form</h4>
</div>
<div class="container text-center" id="fade4">
    <h6>Your email has been sent!<br />You should receive a responce within 24 hours.</h6>
</div>

 
<?php
 
}else{
 
?>



<div class="container text-center" id="fade1">
    <h2>Contact</h2>
</div>
<div class="container text-center" id="fade2">
    <h4>contact@kilo.space</h4>
</div>
<div class="container text-center" id="fade3">
    <hr />
    <h4>Automated Contact Form</h4>
</div>
<div class="container text-center" id="fade4">
<form name="contactform" class="form-signin" method="post" action="index.php?page=contact">
 
  <label for="login_input_username" class="sr-only">First Name</label>
  <input type="text" id="login_input_username"  class="form-control" type="text" name="first_name" placeholder="First Name" required autofocus />
  
  <label for="login_input_username" class="sr-only">Last Name</label>
  <input type="text" id="login_input_username"  class="form-control" type="text" name="last_name" placeholder="Last Name" required autofocus />
  
  <label for="login_input_username" class="sr-only">Email</label>
  <input type="text" id="login_input_username"  class="form-control" type="email" name="email" placeholder="Email" required autofocus />
  
  <label for="login_input_username" class="sr-only">Comments</label>
  <textarea id="login_input_username"   name="comments" maxlength="1000" cols="25" rows="6" class="form-control" required="required" placeholder="Comments"></textarea>

       
        
  <input class="btn btn-lg btn-primary btn-block pull-left" type="submit"  name="login" value="Submit Message" />
 
</form>
</div>





<?php
 
}
 
?>