<?php 
  $to = "lazer@ontimeitsolutions.com";
  $from = $_POST['email'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $ext = $_POST['ext'];
  $subject = "Online ticket submission";
  $message = $_POST['message'];

  $headers = "From:" $from;
  mail($to, $subject, $message, $name, $phone, $ext, $headers);
  echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
  // You can also use header('Location: thank_you.php'); to redirect to another page.
  // You cannot use header and echo together. It's one or the other.
?>