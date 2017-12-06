<?php
    $email = $_POST['email'];    
    $from = 'From:tmtcrypto.com'; 
    $to = 'contact@tmtcrypto.com'; 
    $subject = 'Newsletter Subscription';
    $human = $_POST['human'];

    $body = "From: E-Mail: $email\n ";
           
    if ($_POST['submit']) {
    if ($email != ''' ) {
                     
            if (mail ($to, $subject, $body, $from)) {
               header('Location: php/thank-you.html');      
        } else {
            echo '<p>Something went wrong, go back and try again!</p>';
        }
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>