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
                <a href="#" class="sidebar__a"><span class="sidebar__icon"><i class="fas fa-cog"></i></span><span class="sidebar__text">Dashboard</span><span class="sidebar__active"><i class="fas fa-caret-left"></i></span></a>
            </div>
                
            <div class="sidebar__link">
                <a href="#" class="sidebar__a"><span class="sidebar__icon"><i class="fas fa-edit"></i></span><span class="sidebar__text">Edit Puppies</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <div class="sidebar__link">
                <a href="#" class="sidebar__a"><span class="sidebar__icon"><i class="far fa-file"></i></span><span class="sidebar__text">Edit Page</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <div class="sidebar__link">
                <a href="#" class="sidebar__a"><span class="sidebar__icon"><i class="far fa-envelope"></i></span><span class="sidebar__text">Contacts</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <div class="sidebar__link">
                <a href="#" class="sidebar__a"><span class="sidebar__icon"><i class="far fa-chart-bar"></i></span><span class="sidebar__text">Statistics</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
                
            <div class="sidebar__link">
                <a href="#" class="sidebar__a"><span class="sidebar__icon"><i class="far fa-comment"></i></span><span class="sidebar__text">Contact Web Master</span><span class="sidebar__active"><!--<i class="fas fa-caret-left"></i></span>--></a>
            </div>
        </div>
    </section>
    <section class="section-main">
        <!-- <section class="section-dashboard" id="dashboard">
            <div class="flexbox flexbox-4">
                <div class="container container-4">
                    <p class="dashboard__heading">Users</p>
                    <p class="dashboard__data">54</p>
                </div>
                
                <div class="container container-4">
                    <p class="dashboard__heading">Sessions</p>
                    <p class="dashboard__data">17</p>
                </div>
                
                <div class="container container-4">
                    <p class="dashboard__heading">Bounce Rate</p>
                    <p class="dashboard__data">21%</p>
                </div>
                
                <div class="container container-4">
                    <p class="dashboard__heading">Session Duration</p>
                    <p class="dashboard__data">0m 00s</p>
                </div>
            </div>
        </section> -->
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