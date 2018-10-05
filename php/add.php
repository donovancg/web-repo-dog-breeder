<?php include "includes/db.php"; ?>
<?php
if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);
    $status = mysqli_real_escape_string($connect, $_POST['status']);
    $birthdate = mysqli_real_escape_string($connect, $_POST['birthdate']);
    $gender = mysqli_real_escape_string($connect, $_POST['gender']);
    $breed = mysqli_real_escape_string($connect, $_POST['breed']);
    $video = mysqli_real_escape_string($connect, $_POST['video']);

    $query_add = "INSERT INTO puppies (name, price, description, status, birthdate, gender, breed, video) VALUES ('$name', '$price', '$description', '$status', '$birthdate', '$gender', '$breed', '$video')";
    $result_add = mysqli_query($connect, $query_add);
    if(!$result_add) {
        header("Location: ../admin/?s=1#puppies");
    } else {
        header("Location: ../admin/?s=-1#puppies");
    }
}
?>