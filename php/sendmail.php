<?php
// Email Submit

  $name = @trim(stripslashes($_POST['name'])); 
  $email = @trim(stripslashes($_POST['email']));
  $message = @trim(stripslashes($_POST['message'])); 

  $email_from = $email;
  $email_to = 'info@scynett'; //replace with your email

  $message = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

  $success = @mail($email_to, "[Scynett Deutschland GmbH] ".$name, $message);

  $noreply = @mail($email_from, "[Scynett Deutschland GmbH] Vielen Dank, dass Sie uns eine E-Mail geschickt haben.", "Wir werden uns bald bei Ihnen melden!");
?>
