<?php

$connect = mysqli_connect('localhost', 'root', 'password', 'd4t4b4s3s4v4nn4hm4ypupp13s');
if(!$connect) {
    echo mysqli_error($connect) . ' error.';
}
?>