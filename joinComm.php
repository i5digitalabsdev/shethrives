<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  $EmailTo = "info@shethrivesafrica.com";
  $Subject = "Message from shethrive";

  // prepare email body text
  $Body = "Name: ";
  $Body .= $name;
  $Body .= "\n";

  $Body .= "Email: ";
  $Body .= $email;
  $Body .= "\n";

  $Body .= "Phone: ";
  $Body .= $phone;
  $Body .= "\n";


  // send email
  $success = mail($EmailTo, $Subject, $Body, "From:".$email);

  // redirect to success page
    if ($success){
       echo "success";
    }else{
        echo "invalid";
    }
?>
