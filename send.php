<?php
  if (isset($_POST['hidden'])) {
    error_log('Possible spam bot');
  } else {
    $to = "brian@briancrocker.co.uk";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Form submission from " . $name;
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
  }
?>
