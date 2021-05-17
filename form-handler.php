<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $mesage = $_POST['message'];

    $email_from = 'kristianmasso@gmail.com';

    $email_subject = "new form submission"

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $mesage.\n";
    
    $to = "kristian.masso@elev.ga.ntig.se";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: kontakta-test.html")

?>