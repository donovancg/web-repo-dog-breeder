<?php include "../php/json.php"; ?>
<?php include "../php/includes/db.php"; ?>

<!--  -->
<?php
$query_puppies = "SELECT * FROM puppies";
$result_puppies = mysqli_query($connect, $query_puppies);

$query_img = "SELECT * FROM puppyimg";
$result_img = mysqli_query($connect, $query_img);
$img_array = array();
while($row2 = mysqli_fetch_assoc($result_img)) {
    array_push($img_array, $row2['img']);
}

$query_content = "SELECT * FROM pagecontent";
$result_content = mysqli_query($connect, $query_content);


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
                <a href="#dashboard" class="sidebar__a"><span class="sidebar__icon"><i class="fas fa-cog"></i></span><span class="sidebar__text">Dashboard</span><!--<span class="sidebar__active"><i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <div class="sidebar__link">
                <a href="#puppies" class="sidebar__a"><span class="sidebar__icon"><i class="fas fa-edit"></i></span><span class="sidebar__text">Edit Puppies</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <div class="sidebar__link">
                <a href="#page" class="sidebar__a"><span class="sidebar__icon"><i class="far fa-file"></i></span><span class="sidebar__text">Edit Page</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <div class="sidebar__link">
                <a href="#stats" class="sidebar__a"><span class="sidebar__icon"><i class="far fa-chart-bar"></i></span><span class="sidebar__text">Statistics</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <!-- <div class="sidebar__link">
                <a href="#master" class="sidebar__a"><span class="sidebar__icon"><i class="far fa-comment"></i></span><span class="sidebar__text">Contact Web Master</span><span class="sidebar__active"><i class="fas fa-caret-left"></i></span></a>
            </div> -->
        </div>
    </section>
    <section class="section-main">
        <section class="section-puppies section-main--el" id="puppies">
            <div class="puppies">

                <?php
                
                while($row_puppies = mysqli_fetch_assoc($result_puppies)) {
                ?>
                <div class="puppies__puppy">
                    <img src="../img/puppies/<?php echo $row_puppies['images']; ?>" alt="Buddy" class="puppies__img">
                    <h3 class="puppies__heading"><?php echo $row_puppies['name']; ?></h3>
                    <a href="puppy.php?p=<?php echo $row_puppies['id']; ?>" class="puppies__edit">Edit</a>
                </div>
                <?php
                }

                ?>

                
                
            </div>
            <div class="puppies__add">
                <a href="puppynew.php" class="puppies__cta">Add a puppy</a>
            </div>
        </section>
        <section class="section-page section-main--el" id="page">
            <div class="page">

                <?php
                
                while($row_content = mysqli_fetch_assoc($result_content)) {
                ?>
                <div class="page__in">
                    <h3 class="page__heading"><?php echo $row_content['page']; ?> <?php echo $row_content['section']; ?></h3>
                    <form action="../php/page.php" method="post" class="page__form">
                        <input type="text" value="<?php echo $row_content['id']; ?>" name="id" id="id" style="display: none !important; opacity: 0 !important; visibility: hidden !important;" class="page__hidden">
                        <textarea name="content" id="content" class="page__text"><?php if($row_content['content'] == null) { echo "This page is blank."; } else { echo $row_content['content']; } ?></textarea>
                        <input type="submit" value="Submit" name="submit" class="page__submit">
                    </form>
                </div>
                <?php
                }
                ?>
            </div>
        </section>
        <!-- <section class="section-main--el section-contact" id="master">
            <div class="contact">
                <h3 class="contact__heading">Contact Web Master</h3>
                <form action="" method="post">
                    <div class="contact__header">
                        <table class="contact__table">
                            <tr class="contact__tr">
                                <td class="contact__td">To: </td>
                                <td class="contact__td">dcampbellgillies@gmail.com</td>
                            </tr>
                            <tr class="contact__tr">
                                <td class="contact__td">Subject: </td>
                                <td class="contact__td"><input type="text" name="subject" id="subject" class="contact__input contact__input--subject"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="contact__body">
                        <textarea name="content" id="content" class="contact__textarea"></textarea>
                        <textarea name="content" id="content" class="contact__textarea" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'></textarea>
                        <div class="contact__text_form">
                            <div class="contact__toolbar">
                                <a class="contact__tool" data-command='h2'><i class='fas fa-bold'></i></a>
                                <a class="contact__tool" data-command='undo'><i class='fa fa-undo'></i></a>
                                <a class="contact__tool" data-command='createlink'><i class='fa fa-link'></i></a>
                                <a class="contact__tool" data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
                                <a class="contact__tool" data-command='superscript'><i class='fa fa-superscript'></i></a>
                            </div>
                            <div class="contact__text" contentEditable></div>
                        </div>
                        
                        <input type="submit" value="Send" class="contact__submit">
                    </div>
                </form>
                
            </div>
        </section> -->
        
    </section>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/editor.js"></script>
</body>
</html>

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