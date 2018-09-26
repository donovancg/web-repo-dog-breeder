<?php include "../php/json.php"; ?>
<?php include "../php/includes/db.php"; ?>

<!--  -->
<?php
if(isset($_GET['i'])) {
    $query_puppies = "SELECT * FROM puppies WHERE id='" . $_GET['i'] . "'";
    $result_puppies = mysqli_query($connect, $query_puppies);

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
    <link rel="stylesheet" href="../css/admin.css">
    <title><?php echo $site_name; ?></title>
</head>
<body>
    <section class="section-title">
        <h1 class="heading-primary">Administration</h1>
    </section>
    <section class="section-name">
        <h2 class="heading-secondary">Savannah May Puppies</h2>
    </section>
    <section class="section-sidebar">
        <div class="sidebar">
            <div class="sidebar__link">
                <a href="./#dashboard" class="sidebar__a"><span class="sidebar__icon"><i class="fas fa-cog"></i></span><span class="sidebar__text">Dashboard</span><span class="sidebar__active"><i class="fas fa-caret-left"></i></span></a>
            </div>
                
            <div class="sidebar__link">
                <a href="./#puppies" class="sidebar__a"><span class="sidebar__icon"><i class="fas fa-edit"></i></span><span class="sidebar__text">Edit Puppies</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <div class="sidebar__link">
                <a href="./#page" class="sidebar__a"><span class="sidebar__icon"><i class="far fa-file"></i></span><span class="sidebar__text">Edit Page</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <div class="sidebar__link">
                <a href="./#stats" class="sidebar__a"><span class="sidebar__icon"><i class="far fa-chart-bar"></i></span><span class="sidebar__text">Statistics</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
        </div>
    </section>
    <section class="section-main">
        <section class="section-upload">
            <div class="upload">
                <?php
                
                while($row_puppies = mysqli_fetch_assoc($result_puppies)) {
                
                ?>
                <h3 class="upload__heading">Update <?php echo $row_puppies['name'] ?>'s Images</h3>
                <form action="../php/upload.php" method="post" enctype="multipart/form-data">
                    <input type="text" value="<?php echo $row_puppies['name'] ?>" name="name" id="name" style="display: none !important; opacity: 0 !important; visibility: hidden !important;">
                    <input type="text" value="<?php echo $row_puppies['id'] ?>" name="id" id="id" style="display: none !important; opacity: 0 !important; visibility: hidden !important;">
                    <input type="file" name="fileToUpload[]" multiple id="fileToUpload" required>
                    <input type="submit" value="Upload Images" name="submit">
                </form>
                <?php } ?>
            </div>
        </section>
    </section>
</body>
</html>
<?php 
} else {
    header("Location: ./puppy.php");
}
?>

<!-- 
Banner fades from color to image
 -->

<!--

Dashboard
Puppies
Contact
Pages
Statistics
Contact Web Master

-->