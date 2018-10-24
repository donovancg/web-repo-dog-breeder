<?php include "../php/json.php"; ?>
<?php include "../php/includes/db.php"; ?>

<!--  -->
<?php
$query_puppies = "SELECT * FROM puppies";
$result_puppies = mysqli_query($connect, $query_puppies);

$query_puppies_rows = "SELECT COUNT(id) as total FROM puppies";
$result_puppies_rows = mysqli_query($connect, $query_puppies_rows);

$query_img = "SELECT * FROM puppyimg";
$result_img = mysqli_query($connect, $query_img);

$img_array = array();

while($row2 = mysqli_fetch_assoc($result_img)) {
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
        <section class="section-puppies" id="puppies">
            <h2 class="heading-secondary">Puppies</h2>
            <?php
            if(count($json['puppies']) <= 0) {
            ?>
            <p class="puppy__empty">It looks like all of the puppies have been removed. Sorry!</p>
            <?php } ?>
            
            <div class="grid-container">

                <?php
                
                while($row = mysqli_fetch_assoc($result_puppies)) {
                    $name = $row['name'];
                    $id = (int)$row['id'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $status = $row['status'];
                    $birthdate = $row['birthdate'];
                    $gender = $row['gender'];
                    $breed = $row['breed'];
                    $images = $row['images'];
                    $video = $row['video'];

                    $query_img = "SELECT img FROM puppyimg WHERE puppy_id='$id'";
                    $result_img = mysqli_query($connect, $query_img);

                    $img_array = array();

                    while($row_img = mysqli_fetch_assoc($result_img)) {
                        array_push($img_array, $row_img['img']);
                    }
                                        
                ?>
                    <div class="puppy">
                        <?php if($status == "sold") {
                            ?>
                            <img src="../img/sold.png" alt="Sold" class="puppy__sold">
                        <?php 
                        } else if($status == "reserved") {
                            echo "<img src=\"../img/reserved.png\" alt=\"Reserved\" class=\"puppy__sold\">";
                        }
                        ?>
                        <div class="puppy__img--container">
                            <img src="../img/puppies/<?php echo $img_array[0]; ?>" alt="Puppy" class="puppy__img">
                        </div>
                        <p class="puppy__name"><?php echo $name;?> &ndash; <?php echo $breed;?> <?php echo $gender;?></p>
                        <p class="puppy__price">$<?php echo $price;?></p>
                        <a href="../single?id=<?php echo $id;?>" class="puppy__cta">View Details</a>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <?php include "../php/includes/footerOneStep.php"; ?>
    
    <script src="../js/imgSelect.js"></script>
    <script src="../js/navRespond.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>

<!-- 
Banner fades from color to image
 -->