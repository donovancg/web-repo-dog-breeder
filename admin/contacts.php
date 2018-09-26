<?php /*include "../php/json.php"; ?>
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

$query_contacts = "SELECT * FROM contacts";
$result_contacts = mysqli_query($connect, $query_contacts);

$query_contacts_main = "SELECT * FROM contacts WHERE id='1'";
$result_contacts_main = mysqli_query($connect, $query_contacts_main);

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
                <a href="#dashboard" class="sidebar__a"><span class="sidebar__icon"><i class="fas fa-cog"></i></span><span class="sidebar__text">Dashboard</span><span class="sidebar__active"><i class="fas fa-caret-left"></i></span></a>
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
        </div>
    </section>
    <section class="section-main">
        <section class="section-contacts section-main--el" style="display: block !important;" id="contacts">
            <div class="contacts">
                <?php
                
                while($row_contacts = mysqli_fetch_assoc($result_contacts)) {
                    ?> 
                    
                    <div class="contacts__list">
                    <div class="contacts__item">
                        <p class="contacts__item--sender">Savannah May Puppies</p>
                        <h4 class="contacts__item--heading">Email from <?php echo $row_contacts['name']; ?> from Savannah May Puppies</h4>
                        <p class="contacts__item--preview"><?php echo $row_contacts['content']; ?></p>
                        <a href="" class="contacts__item--view">View message</a>
                    </div>
                </div>
                    
                    
                <?php } ?>


                <!-- <div class="contacts__list">
                    <div class="contacts__item">
                        <p class="contacts__item--sender">Savannah May Puppies</p>
                        <h4 class="contacts__item--heading">Email from Donovan from Savannah May Puppies</h4>
                        <p class="contacts__item--preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="" class="contacts__item--view">View message</a>
                    </div>
                </div> -->

                <div class="contacts__main">
                    <?php
                    
                    while($row_contacts_main = mysqli_fetch_assoc($result_contacts_main)) {
                        ?>
                        <div class="contacts__main--header">
                            <p class="contacts__main--date"><?php echo $row_contacts_main['date']; ?></p>
                            <h3 class="contact__main--sender"><?php echo $row_contacts_main['name']; ?></h3>
                            <p class="contacts__main--email">Email from <?php echo $row_contacts_main['name']; ?> from Savannah May Puppies</p>
                        </div>
                        <div class="contacts__main--body">
                            <h3 class="contacts__main--heading">Email from <?php echo $row_contacts_main['name']; ?> from Savannah May Puppies</h3>
                            <p class="contacts__main--content"><?php echo $row_contacts_main['content']; ?></p>
                        </div>
                    
                        <?php } ?>
                    
                </div>
            </div>
        </section>
    </section>
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

*/?>