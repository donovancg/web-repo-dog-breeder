<?php include "includes/db.php"; ?>
<?php

$files = array_filter($_FILES['fileToUpload']['name']); //something like that to be used before processing files.

function name($puppy_name, $id, $ext) {
    return $puppy_name . "_" . $id . "_" . date("m-d-Y_h-i-sa") . mt_rand(10000, 99999) . "." . $ext;
}

$total = count($_FILES['fileToUpload']['name']);

// $name_arr = array();

// mysqli_query($connect, "TRUNCATE TABLE table_name");
function query_img($puppy_id, $img_name) {
    return "INSERT INTO puppyimg (puppy_id, img) VALUES ('$puppy_id', '$img_name')";
}


for( $i=0 ; $i < $total ; $i++ ) {

    $tmpFilePath = $_FILES['fileToUpload']['tmp_name'][$i];

    // if ($tmpFilePath != ""){
        $file_name = $_FILES['fileToUpload']['name'][$i];
        $newFilePath = "../img/puppies/" . $file_name;

        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            $extention = pathinfo($file_name)['extension'];
            // $new_name = name($_POST['name'], $_POST['id'], $extention);
            // rename($newFilePath, "../img/puppies/" . $new_name);
            // echo "<img src=\"$new_name\">";
            
            $new_name = name($_POST['name'], $_POST['id'], $extention);
            $result_img = mysqli_query($connect, query_img($_POST['id'], $new_name));

            echo $extention;
            echo "<a href=\"../admin/puppyimg.php?i=" . $_POST['id'] . "\">Back</a>";
            rename($newFilePath, "../img/puppies/" . $new_name);
        } else {
            echo "File name invalid.<br>";
            echo "<a href=\"../admin/puppyimg.php?i=" . $_POST['id'] . "\">Back</a>";
        }
}

?>