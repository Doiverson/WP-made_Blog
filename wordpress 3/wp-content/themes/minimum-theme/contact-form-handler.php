<?php
/**
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-02-27
 * Time: 15:31
 */
?>

<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'StayGeek.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";
    $to = "doiverson.canada@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Replay-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.php");
?>