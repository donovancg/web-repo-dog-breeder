<?php include "../php/json.php" ?>

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
            <h2 class="heading-secondary"><?php echo $json['puppies']['puppy-' . $_GET['id']]['name']; ?> &ndash; <?php echo $json['puppies']['puppy-' . $_GET['id']]['breed']; ?> <?php echo $json['puppies']['puppy-' . $_GET['id']]['gender']; ?></h2>
            <div class="puppy-main">
                <div class="puppy-main__left">
                    
                    <img src="../img/puppies/<?php echo $json['puppies']['puppy-' . $_GET['id']]['images'][0]; ?>" alt="Buddy" class="puppy-main__img" id="js--puppy-img">
                    <div class="puppy-main__img--select">
                        <?php                        
                        for($i = 0; $i < count($json['puppies']['puppy-' . $_GET['id']]['images']); $i++) {
                            ?>
                            <img src="../img/puppies/<?php echo $json['puppies']['puppy-' . $_GET['id']]['images'][$i]; ?>" alt="Select Image" class="puppy-main__select">
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="puppy-main__right">
                    <div class="puppy-main__info">
                        <p class="puppy-main__price">$<?php echo $json['puppies']['puppy-' . $_GET['id']]['price']; ?></p>
                        <a href="../contact/" class="puppy-main__cta">Contact Seller</a>
                    </div>
                    <div class="puppy-main__about">
                        <h3 class="heading-tertiary">About <?php echo $json['puppies']['puppy-' . $_GET['id']]['name']; ?></h3>
                        <p class="puppy-main__quote">&nbsp;&nbsp;&nbsp;&nbsp;"<?php echo $json['puppies']['puppy-' . $_GET['id']]['description']; ?>"</p>
                    </div>
                </div>
                <div class="puppy-main__info">
                    <table class="puppy-main__table">
                        <tr class="puppy-main__tr">
                            <td class="puppy-main__td">Birthdate: </td>
                            <td class="puppy-main__td"><?php echo $json['puppies']['puppy-' . $_GET['id']]['birthdate']; ?></td>
                        </tr>
                        <tr class="puppy-main__tr">
                            <td class="puppy-main__td">Breed: </td>
                            <td class="puppy-main__td"><?php echo $json['puppies']['puppy-' . $_GET['id']]['breed']; ?></td>
                        </tr>
                        <tr class="puppy-main__tr">
                            <td class="puppy-main__td">Gender: </td>
                            <td class="puppy-main__td"><?php echo $json['puppies']['puppy-' . $_GET['id']]['gender']; ?></td>
                        </tr>
                        <tr class="puppy-main__tr">
                            <td class="puppy-main__td">Availability: </td>
                            <td class="puppy-main__td"><?php if($json['puppies']['puppy-' . $_GET['id']]['status'] == "available") {
                                echo "Available";
                            } else if ($json['puppies']['puppy-' . $_GET['id']]['status'] == "reserved"){
                                echo "Reserved";
                            } else {
                                echo "Sold";
                            } ?></td>
                        </tr>
                    </table>
                </div>
                <div class="section-divide"></div>
                <div class="puppy-main__video">
                    <h3 class="heading-tertiary">Watch <?php echo $json['puppies']['puppy-' . $_GET['id']]['name']; ?> in Action</h3>
                    <iframe class="puppy-main__vid" src="<?php echo $json['puppies']['puppy-' . $_GET['id']]['video']; ?>"></iframe>
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