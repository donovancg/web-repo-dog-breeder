<?php include "php/includes/db.php"; ?>
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
                <div class="banner__announcement">
                    <?php
                    $query_content_banner = "SELECT content FROM pagecontent WHERE page = 'home' ";
                    $result_content_banner = mysqli_query($connect, $query_content_banner);
                    while($row_content_banner = mysqli_fetch_assoc($result_content_banner)) {
                        echo $row_content_banner['content'];
                    }
                    ?>
                </div>
                
            </div>
        </section>
        
        <!-- <div class="slide" id="js--slide-div">
            <img src="img/slide/slide-1.jpg" alt="slide" class="slide__img slide__img--primary" id="js--slide-main">
            <img src="img/slide/slide-1.jpg" alt="slide" class="slide__img slide__img--secondary" id="js--slide-trans">
        </div>
        <div class="section-divide"></div>
         -->
    </main>
    <?php include "php/includes/footer.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- <script src="js/slide.js"></script> -->
    <!-- <script src="js/sticky.js"></script> -->
    <script src="js/navRespond.js"></script>
    <script src="js/script.js"></script>
</body>
</html>