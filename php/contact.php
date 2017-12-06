<?php
    $txid = $_POST['txid'];
    $email = $_POST['email'];
    $telegram = $_POST['telegram'];
    $from = 'From:tmtcrypto.com'; 
    $to = 'contact@tmtcrypto.com'; 
    $subject = 'Premium Form';
    $human = $_POST['human'];

    $body = "From: $txid\n E-Mail: $email\n Telegram: $telegram\n";
           
    if ($_POST['submit']) {
    if ($txid != '' &&  $email != '' && $telegram !='' ) {
        if ($human == '4') {                 
            if (mail ($to, $subject, $body, $from)) {
               header('Location: thank-you.html');      
        } else {
            echo '<p>Something went wrong, go back and try again!</p>';
        }
    } else if ($_POST['submit'] && $human != '4') {
        echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>