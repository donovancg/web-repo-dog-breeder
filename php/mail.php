<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    echo "Email from " . $name . " @ " . $email . ". The message reads: \n" . $content;

    // use wordwrap() if lines are longer than 70 characters
    // $content = wordwrap($content,70);

    // send email
    mail("donovancgillies@gmail.com", $name . " has sent you an email from Savannah May Puppies", $content, "From: donovancgillies@gmail.com");
}

?>