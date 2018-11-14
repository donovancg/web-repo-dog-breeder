<?php include "includes/db.php"; ?>
<?php

$s;

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    echo "Email from " . $name . " @ " . $email . ". The message reads: \n" . $content;
    if($result) {
        $s = 1;
    } else {
        $s = 0;
    }

    // use wordwrap() if lines are longer than 70 characters
    // $content = wordwrap($content,70);

    // send email
    mail("donovancgillies@gmail.com", $name . " has sent you an email from Savannah May Puppies", $content, "From: donovancgillies@gmail.com");
    header("Location: ../contact/?s=1");
}

?>