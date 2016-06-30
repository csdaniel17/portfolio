<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'carolyn.s.daniel@gmail.com';
  $subject = 'Hello';
  // $human = $_POST['human'];

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";

  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
      echo '<p>your message has been sent!</p>';
    } else {
      echo '<p>something went wrong, please try again!</p>';
    }
  }
?>
