<?php include "../php/json.php"; ?>
<?php include "../php/includes/db.php"; ?>

<!--  -->
<?php
if(isset($_GET['p'])) {
    $query_puppies = "SELECT * FROM puppies WHERE id='" . $_GET['p'] . "'";
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
        <sections class="section-edit-puppy">
            <?php
            while($row_puppies = mysqli_fetch_assoc($result_puppies)) {
            ?>
            <div class="edit-py">
                <h3 class="edit-py__heading">Edit <?php echo $row_puppies['name']; ?>'s Profile</h3>
                <div class="edit-py__edits">
                    <div class="edit-py__container">
                        <form action="../php/puppy.php" method="post">
                            <input type="text" value="<?php echo $row_puppies['id']; ?>" name="id" id="id" style="display: none !important; opacity: 0 !important; visibility: hidden !important;">
                            <textarea class="edit-py__textarea" id="content" name="content"><?php echo $row_puppies['description']; ?></textarea>
                            <input type="submit" value="Update Description" name="submitcontent" class="edit-py__submit">
                        </form>
                        
                    </div>



                    <div class="edit-py__container">
                        <form action="../php/puppy.php" method="post">
                            <input type="text" value="<?php echo $row_puppies['id']; ?>" name="id" id="id" style="display: none !important; opacity: 0 !important; visibility: hidden !important;">
                            <select name="status" id="status" class="edit-py__select">
                                <option value="Available"<?php if($row_puppies['status'] == "Available") { echo " selected"; } ?>>Available</option>
                                <option value="Reserved"<?php if($row_puppies['status'] == "Reserved") { echo " selected"; } ?>>Reserved</option>
                                <option value="Sold"<?php if($row_puppies['status'] == "Sold") { echo " selected"; } ?>>Sold</option>
                            </select>
                            <input type="submit" value="Update Status" name="submitstatus" class="edit-py__submit">
                        </form>
                    </div>

                    <div class="edit-py__container">
                        <form action="../php/puppy.php" method="post">
                            <input type="text" value="<?php echo $row_puppies['id']; ?>" name="id" id="id" style="display: none !important; opacity: 0 !important; visibility: hidden !important;">
                            <span class="edit-py__span">$<input value="<?php echo $row_puppies['price']; ?>" type="number" name="price" id="price" class="edit-py__input"></span>
                            <input type="submit" value="Update Price" name="submitprice" class="edit-py__submit">
                        </form>
                    </div>

                    <div class="edit-py__container">
                        <input type="text" value="<?php echo $row_puppies['id']; ?>" name="id" id="id" style="display: none !important; opacity: 0 !important; visibility: hidden !important;">
                        <!-- <img src="../img/puppies/buddy_01.jpg" alt="Buddy" class="edit-py__img"> -->
                        <a href="puppyimg.php?i=<?php echo $row_puppies['id']; ?>" class="edit-py__container--heading">Update Images</a>
                    </div>

                    <div class="edit-py__container">
                        <form action="../php/puppy.php" method="post">
                            <input type="text" value="<?php echo $row_puppies['id']; ?>" name="id" id="id" style="display: none !important; opacity: 0 !important; visibility: hidden !important;">
                            <span class="edit-py__span"><input value="<?php echo $row_puppies['video']; ?>" type="text" name="video" id="video" class="edit-py__input"></span>
                            <input type="submit" value="Update Video (URL)" name="submitvideo" class="edit-py__submit">
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </sections>
    </section>

</body>
</html>
<?php 
} else {
    header("Location: ./");
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