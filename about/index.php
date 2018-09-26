<?php include "../php/includes/db.php"; ?>
<?php

$query_about_me = "SELECT * FROM pagecontent WHERE page='About' AND section='Me'";
$result_about_me = mysqli_query($connect, $query_about_me);

$query_about_breed = "SELECT * FROM pagecontent WHERE page='About' AND section='Breed'";
$result_about_breed = mysqli_query($connect, $query_about_breed);

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
        <section class="section-about">
            <h2 class="heading-secondary">About</h2>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="about">
                        <?php
                        while($row_about_me = mysqli_fetch_assoc($result_about_me)) {
                        ?>
                        <h3 class="heading-tertiary">About Me</h3>
                        <blockquote class="about__quote"><?php echo $row_about_me['content']; ?></blockquote>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <div class="about">
                        <?php
                        while($row_about_breed = mysqli_fetch_assoc($result_about_breed)) {
                        ?>
                        <h3 class="heading-tertiary">About the Breed</h3>
                        <blockquote class="about__quote"><?php echo $row_about_breed['content']; ?></blockquote>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "../php/includes/footerOneStep.php" ?>
    <script src="../js/navRespond.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>