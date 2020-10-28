<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $massage = $_POST['massage'];

    $email_form = 'guest123@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Massage: $massage.\n";

    $to = "aldo.saputra@gmail.com";
    
    $headers = "Form: $email_form \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");
?>