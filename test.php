<?php
 $email_to = "tdcarlin@gmail.com";
 $email_subject = "Repaire Screen";
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comment = $_POST['comment']; // required
 $email_message = "Form details below.\n\n";
 function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 $email_message .= "Name: ".clean_string($name)."\n";
 $email_message .= "Email: ".clean_string($email_from)."\n";
 $email_message .= "Comment: ".clean_string($comment)."\n";

    mail($email_to, $email_subject, $email_message);
?>
<?php
echo "Thank You for contacting us. We will be in touch with you very soon.";
?>
<?php
// If no headers are sent, send one
header('refresh: 5; url= index.html');
?>
