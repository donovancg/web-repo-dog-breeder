<?php include "../php/json.php" ?>
<?php include "../php/includes/db.php"; ?>

<?php

if(!isset($_GET['id'])) {
    header('Location: ../puppies/');
}


$query_puppies = "SELECT * FROM puppies WHERE id=" . $_GET['id'];
$result_puppies = mysqli_query($connect, $query_puppies);

$query_img = "SELECT * FROM puppyimg WHERE puppy_id=" . $_GET['id'];
$result__img = mysqli_query($connect, $query_img);

while($row = mysqli_fetch_assoc($result_puppies)) {
    $name = $row['name'];
    $price = $row['price'];
    $description = $row['description'];
    $status = $row['status'];
    $birthdate = $row['birthdate'];
    $gender = $row['gender'];
    $breed = $row['breed'];
    $images = $row['images'];
    $video = $row['video'];
}

$img_array = array();

while($row2 = mysqli_fetch_assoc($result__img)) {
    array_push($img_array, $row2['img']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../php/includes/metaLinks.php"; ?>
    <link rel="stylesheet" href="../css/style.css">
    <title><?php echo $site_name; ?></title>
</head>
<body>
    <?php include "../php/includes/headerOneStep.php"; ?>
    <main>
        <section class="section-puppy">
            <h2 class="heading-secondary"><?php echo $name; ?> &ndash; <?php echo $breed; ?> <?php echo $gender; ?></h2>
            <div class="puppy-main">
                <div class="puppy-main__left">
                    
                    <img src="../img/puppies/<?php echo $img_array[0]; ?>" alt="Buddy" class="puppy-main__img" id="js--puppy-img">
                    <div class="puppy-main__img--select">
                        <?php                        
                        for($i = 0; $i < count($img_array); $i++) {
                            ?>
                            <img src="../img/puppies/<?php echo $img_array[$i]; ?>" alt="Select Image" class="puppy-main__select">
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="puppy-main__right">
                    <div class="puppy-main__info">
                        <p class="puppy-main__price">$<?php echo $price; ?></p>
                        <a href="../contact/" class="puppy-main__cta">Contact Seller</a>
                    </div>
                    <div class="puppy-main__about">
                        <h3 class="heading-tertiary">About <?php echo $name; ?></h3>
                        <p class="puppy-main__quote">&nbsp;&nbsp;&nbsp;&nbsp;"<?php echo $description; ?>"</p>
                    </div>
                </div>
                <div class="puppy-main__info">
                    <table class="puppy-main__table">
                        <tr class="puppy-main__tr">
                            <td class="puppy-main__td">Birthdate: </td>
                            <td class="puppy-main__td"><?php echo $birthdate; ?></td>
                        </tr>
                        <tr class="puppy-main__tr">
                            <td class="puppy-main__td">Breed: </td>
                            <td class="puppy-main__td"><?php echo $breed; ?></td>
                        </tr>
                        <tr class="puppy-main__tr">
                            <td class="puppy-main__td">Gender: </td>
                            <td class="puppy-main__td"><?php echo $gender; ?></td>
                        </tr>
                        <tr class="puppy-main__tr">
                            <td class="puppy-main__td">Availability: </td>
                            <td class="puppy-main__td"><?php if($status == "Available") {
                                echo "Available";
                            } else if ($status == "Reserved"){
                                echo "Reserved";
                            } else {
                                echo "Sold";
                            } ?></td>
                        </tr>
                    </table>
                </div>
                <div class="section-divide"></div>
                <div class="puppy-main__video">
                    <h3 class="heading-tertiary">Watch <?php echo $name; ?> in Action</h3>
                    <iframe class="puppy-main__vid" src="<?php echo $video; ?>"></iframe>
                </div>
            </div>
        </section>
    </main>
    <?php include "../php/includes/footerOneStep.php" ?>
    
    <script src="../js/imgSelect.js"></script>
    <script src="../js/navRespond.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>