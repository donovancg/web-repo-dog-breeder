<?php include "includes/db.php"; ?>
<?php

$s;

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    if($result) {
        $s = 1;
    } else {
        $s = 0;
    }

    // use wordwrap() if lines are longer than 70 characters
    // $content = wordwrap($content,70);

    // send email
    mail("donovancgillies@gmail.com", "Email from Abigail Chill via Savannah May Puppies", $content);
    header("Location: ../contact/?s=1");
}

?>