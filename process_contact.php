<?php
    header('Location:http://christina-g.com/contact.html?submit');
    $email_array = $_POST;
	var_dump($_POST);
    $from = 'contact@neotokyoaz.com';
    $to = 'jwilliams2162@gmail.com';
    $date = new DateTime('now', new DateTimeZone('America/Phoenix'));
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$from . "\r\n" .
        'Reply-To: '.$from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $subject = 'Contact Request from Christina-g.com';
    $message = '<html>
<table>
<tbody>
<tr><td>SUBMISSION DATE: '.$date->format('m/d/y h:i:s A').'</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>Name: '.$email_array['firstname'].'</td></tr>
<tr><td>Email: '.$email_array['email'].'</td></tr>
<tr><td>Phone: '.$email_array['phone'].'</td></tr>
<tr><td>Best Method: '.$email_array['method'].'</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>Would Like to Charter: '.$email_array['charter'].'</td></tr>
<tr><td>Comment(s): '.$email_array['comments'].'</td></tr>
</tbody>
</table>
</html>';
    mail($to, $subject, $message, $headers);



?>