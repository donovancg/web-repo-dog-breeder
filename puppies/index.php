<?php include "../php/json.php"; ?>
<?php
// echo $json['puppies']['puppy-1']['price'];
for($i = 0; $i < count($json); $i++) {
    // print_r($json['puppies']);
    
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
                for($i = 0; $i < count($json['puppies']); $i++) {
                    ?>

                    <div class="puppy">
                        <?php if($json['puppies']['puppy-' . ($i)]['status'] == "sold") {
                            ?>
                            <img src="../img/sold.png" alt="Sold" class="puppy__sold">
                        <?php 
                        } else if($json['puppies']['puppy-' . ($i)]['status'] == "reserved") {
                            echo "<img src=\"../img/reserved.png\" alt=\"Reserved\" class=\"puppy__sold\">";
                        }
                        ?>
                        <img src="../img/puppies/<?php echo $json['puppies']['puppy-' . ($i)]['images'][0] ?>" alt="Puppy" class="puppy__img">
                        <p class="puppy__name"><?php echo $json['puppies']['puppy-' . ($i)]['name'];?> &ndash; <?php echo $json['puppies']['puppy-' . ($i)]['breed'];?> <?php echo $json['puppies']['puppy-' . ($i)]['gender'];?></p>
                        <p class="puppy__price"><?php echo $json['puppies']['puppy-' . ($i)]['price'];?></p>
                        <a href="../single?id=<?php echo $json['puppies']['puppy-' . ($i)]['id'];?>" class="puppy__cta">View Details</a>
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