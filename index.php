<?php include "php/includes/db.php"; ?>
<?php

$query_puppies_featured = "SELECT * FROM puppies WHERE featured='Yes'";
$result_puppies_featured = mysqli_query($connect, $query_puppies_featured);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "php/includes/metaLinksRoot.php"; ?>
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $site_name; ?> &ndash; <?php echo $tag_line; ?></title>
</head>
<body>
    <?php include "php/includes/header.php"; ?>
    <main>
        <section class="section-banner">
            <div class="banner" id="js--banner">
                <!-- <div class="banner__announcement">
                    <?php/*
                    $query_content_banner = "SELECT content FROM pagecontent WHERE page = 'home' ";
                    $result_content_banner = mysqli_query($connect, $query_content_banner);
                    while($row_content_banner = mysqli_fetch_assoc($result_content_banner)) {
                        echo $row_content_banner['content'];
                    }*/
                    ?>
                    <h2 class="heading-secondary">Welcome to Savannah May’s</h2>
                    <h3 class="heading-secondary">The home of some very spoiled babies</h3>
                    
                </div> -->
                <img src="img/banner-angle.jpg" alt="Banner image" class="banner__img">
                
            </div>
        </section>
        <section class="section-about-home">
            <h2 class="heading-secondary about-home__header">About My Puppies</h2>
            <div class="about-home">
                <div class="about-home__col about-home__col--img">
                    <img src="img/puppies/IMG_0800 2.jpg" alt="Puppy 1" class="about-home__img">
                </div>
                <div class="about-home__col about-home__col--content">
                    <p class="about-home__p">We specialize in Yorkiepoos, which make great, loyal friends and perfect travel companions. The puppies I have for sale are precious! They have beautiful Yorkiepoo coats, tiny faces, and small ears. Just look at all my Yorkiepoo pictures and you will see the quality. My Yorkiepoos and Parti Color Yorkiepoos are calm and love a lap to be on and just to be with you. They are very sweet and snuggly!</p>
                    <div class="about-home__cta">
                        <a href="puppies" class="about-home__link">Show Me!</a>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="section-divide"></div>

        <section class="section-info-home-home">
            <h2 class="heading-secondary info-home__header">Information</h2>
            <div class="info-home">
                <div class="info-home__row">
                    <div class="info-home__col">
                        <i class="info-home__icon fas fa-shopping-cart"></i>
                        <h3 class="heading-tertiary info-home__head">Payment</h3>
                        <p class="info-home__p">We accept all major credit cards. The prices do not include any delivery arrangements,tax, and credit card fees.</p>
                    </div>
                    <div class="info-home__col">
                        <i class="info-home__icon fas fa-ellipsis-h"></i>
                        <h3 class="heading-tertiary info-home__head">Waiting list</h3>
                        <p class="info-home__p">Our waiting list is designed for those who are serious about making our puppies an addition to their family. If the puppy you want is not among the current litter, your choice is preserved on the waiting list.</p>
                    </div>
                </div>
                

                <p class="info-home__p">For more information, please look at my <a href="shipping/">Information</a> page.</p>
                
                <div class="info-home__gallery">
                    <div class="info-home__gallery--col">
                        <img src="img/puppies/IMG_1215.jpg" alt="Puppy 2" class="info-home__img">
                    </div>
                    <div class="info-home__gallery--col">
                        <img src="img/puppies/IMG_3008.jpg" alt="Puppy 3" class="info-home__img">
                    </div>
                    <div class="info-home__gallery--col">
                        <img src="img/puppies/IMG_3223.jpg" alt="Puppy 4" class="info-home__img">
                    </div>
                </div>
                
                
                <div class="section-divide"></div>
                
                <div class="info-home__narrow">
                    <div class="">
                        <img src="img/puppies/IMG_3426.jpg" alt="Puppy 5" class="info-home__img info-home__img--middle">
                    </div>
                    <div class="">
                        <h3 class="heading-tertiary">Important!</h3>
                        <p class="info-home__p info-home__p--justify">Understand that these puppies are our babies. We want every puppy to find a home that is a perfect match for them and their new family. On selection day, if you are not able to select the puppy that you connect with, you can move up on the list for the next litter, or we will gladly refund your deposit. It’s your choice. We don't want anyone feeling as if they have to settle for a puppy simply because they have a deposit invested. All our puppies are adorable, precious, and very intelligent. They turn heads everywhere they go! If you don't feel it’s a perfect match for you, then it most likely isn't for the pup. After a puppy is selected, the deposit is forfeited if the purchase is not completed. We typically select puppies when they are about five weeks old.</p>

                        <br>
                        <br>

                        <p class="info-home__p info-home__p--justify">In the unlikely event the home is no longer suitable for the puppy, please contact us. We will gladly assist with rehoming the puppy. Placing one of our puppies in a shelter is never an option; please contact us instead.</p>

                        <br>
                        <br>
                        
                        <p class="info-home__p info-home__p--justify">ALL MY YORKIEPOO PUPPIES ARE SOLD AS PETS ONLY.</p>

                    </div>
                </div>
            </div>
        </section>
        <div class="section-divide"></div>
        <section class="section-featured">
            <h2 class="heading-secondary">Featured Puppies</h2>
            <div class="featured">
                <?php
                
                while($row_puppies_featured = mysqli_fetch_assoc($result_puppies_featured)){
                    $id = $row_puppies_featured['id'];
                    $query_img = "SELECT img FROM puppyimg WHERE puppy_id='$id'";
                    $result_img = mysqli_query($connect, $query_img);

                    $img_array = array();

                    while($row_img = mysqli_fetch_assoc($result_img)) {
                        array_push($img_array, $row_img['img']);
                    }
                ?>
                <div class="featured__puppy">
                    <h3 class="featured__heading"><?php echo $row_puppies_featured['name']; ?></h3>
                    <div class="featured__img--container">
                        <img src="img/puppies/<?php echo $img_array[0]; ?>" alt="<?php echo $row_puppies_featured['name']; ?> - <?php echo $row_puppies_featured['breed']; ?> <?php echo $row_puppies_featured['gender']; ?>" class="featured__img">
                    </div>
                    <div class="featured__info">
                        <p class="featured__item">$<?php echo $row_puppies_featured['price']; ?></p>
                        <p class="featured__item"><?php echo $row_puppies_featured['gender']; ?></p>
                        <p class="featured__item"><?php echo $row_puppies_featured['breed']; ?></p>
                    </div>
                    <a href="puppies/" class="featured__link">View Details</a>
                </div>
                <?php } ?>
            </div>
        </section>
        <div class="section-divide"></div>
        <section class="section-contact">
            <div class="contact-home">
                <h2 class="heading-secondary">Contact Me</h2>
                <div class="contact-home__body">
                    <form action="" method="post" class="contact-home__form">
                        <div class="contact__group">
                            <label for="name" class="contact__label">Name: <span class="u-color-red">*</span></label>
                            <input type="text" name="name" id="name" class="contact-home__input">
                        </div>
                        <div class="contact__group">
                            <label for="email" class="contact__label">Email: <span class="u-color-red">*</span></label>
                            <input type="email" name="email" id="email" class="contact-home__input">
                        </div>
                        <div class="contact__group">
                            <label for="content" class="contact__label">Comments: <span class="u-color-red">*</span></label>
                            <textarea name="content" id="contact-home" class="contact-home__textarea"></textarea>
                        </div>
                        <input type="submit" value="Submit" class="contact-home__submit" name="submit" id="submit">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include "php/includes/footer.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- <script src="js/slide.js"></script> -->
    <script src="js/sticky.js"></script>
    <script src="js/navRespond.js"></script>
    <script src="js/script.js"></script>
</body>
</html>