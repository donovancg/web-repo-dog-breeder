<?php include "includes/db.php"; ?>
<?php

if(isset($_POST['submitcontent'])) {
    $id = $_POST['id'];
    $content = mysqli_real_escape_string($connect, $_POST['content']);

    $query_puppy_content = "UPDATE puppies SET description = '$content' WHERE id='$id'";
    $result_puppy_content = mysqli_query($connect, $query_puppy_content);
    if(!$result_puppy_content) {
        header("Location: ../admin/puppy.php?p=$id&sc=-1");
    } else {
        header("Location: ../admin/puppy.php?p=$id&sc=1");
    }

} else if(isset($_POST['submitstatus'])) {
    $id = $_POST['id'];
    $status = mysqli_real_escape_string($connect, $_POST['status']);

    $query_puppy_status = "UPDATE puppies SET status = '$status' WHERE id='$id'";
    $result_puppy_status = mysqli_query($connect, $query_puppy_status);
    if(!$result_puppy_status) {
        header("Location: ../admin/puppy.php?p=$id&ss=-1");
    } else {
        header("Location: ../admin/puppy.php?p=$id&ss=1");
    }

} else if(isset($_POST['submitprice'])) {
    $id = $_POST['id'];
    $price = mysqli_real_escape_string($connect, $_POST['price']);

    $query_puppy_price = "UPDATE puppies SET price = '$price' WHERE id='$id'";
    $result_puppy_price = mysqli_query($connect, $query_puppy_price);
    if(!$result_puppy_price) {
        header("Location: ../admin/puppy.php?p=$id&sp=-1");
    } else {
        header("Location: ../admin/puppy.php?p=$id&sp=1");
    }
    
} else if(isset($_POST['submitvideo'])) {
    $id = $_POST['id'];
    $video = mysqli_real_escape_string($connect, $_POST['video']);

    $query_puppy_video = "UPDATE puppies SET video = '$video' WHERE id='$id'";
    $result_puppy_video = mysqli_query($connect, $query_puppy_video);
    if(!$result_puppy_video) {
        header("Location: ../admin/puppy.php?p=$id&sp=-1");
    } else {
        header("Location: ../admin/puppy.php?p=$id&sp=1");
    }
    
} else {
    header("Location: ../admin/");
}




?>