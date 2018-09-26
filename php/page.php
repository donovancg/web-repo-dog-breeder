<?php include "includes/db.php"; ?>
<?php

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $content = mysqli_real_escape_string($connect, $_POST['content']);
    echo $id;
    echo $content;
    
    $query_update_page = "UPDATE pagecontent SET content = '$content' WHERE id='$id'";
    $result_update_page = mysqli_query($connect, $query_update_page);
    echo $result_update_page;
    if(!$result_update_page) {
        header("Location: ../admin/?s=-1#page");
        echo mysqli_error($connect);
    } else {
        header("Location: ../admin/?s=1#page");
    }
} else {
    die("ERRORS ENSUE!!!!");
}

?>