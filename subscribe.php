<?php
  //add you e-mail address here
  define("MY_EMAIL", "business@netmente.com");

  /**
   * Return a formatted message body of the form:
   * Name: <name of submitter>
   * Comment: <message/comment submitted by user>
   *
   * @param String $name     name of submitter
   * @param String $messsage message/comment submitted
   */
  function setMessageBody ($email) {
    $message_body = "Email: " . $email."\n\n";
    return $message_body;
  }

  $email = $_POST['email'];

  header('Content-type: application/json');
  //do some simple validation. this should have been validated on the client-side also
  if (empty($email)) {
  	errorResponse('Email is empty.');
  }

  //try to send the message
  if(mail(MY_EMAIL, "Savor Flavor Asis", setMessageBody($email), "From: $email")) {
  	echo json_encode(array('message' => 'Thank you for subscribing to our newsletter.'));
  } else {
  	header('HTTP/1.1 500 Internal Server Error');
  	echo json_encode(array('message' => 'Unexpected error while attempting to send e-mail.'));
  }
?>