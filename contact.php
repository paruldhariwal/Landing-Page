<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    
    $to = 'paruldhariwal01@gmail.com';  

    
    $subject = 'New Contact Form Submission';

    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    
    $email_headers = "From: $name <$email>";

    
    if (mail($to, $subject, $email_content, $email_headers)) {
       
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>
