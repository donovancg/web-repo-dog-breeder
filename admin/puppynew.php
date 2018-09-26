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
        </div>
    </section>
    <section class="section-main">
        <section class="section-puppy-add">
            <div class="add">
                <h3 class="add__heading">Add a Puppy</h3>
                <form action="../php/add.php" method="post">
                    <div class="add__group">
                        <label class="add__label" for="name">Name: </label>
                        <input class="add__input" type="text" name="name" id="name">
                    </div>

                    <div class="add__group">
                        <label class="add__label" for="price">Price: </label>
                        <input class="add__input" type="number" name="price" id="price">
                    </div>

                    <div class="add__group">
                        <label class="add__label" for="description">Description: </label>
                        <textarea name="description" id="description" class="add__textarea"></textarea>
                    </div>

                    <div class="add__group">
                        <label class="add__label" for="status">Status: </label>
                        <select name="status" id="status" class="add__select">
                            <option value="Available" class="add__option">Available</option>
                            <option value="Reserved" class="add__option">Reserved</option>
                            <option value="Sold" class="add__option">Sold</option>
                        </select>
                    </div>

                    <div class="add__group">
                        <label class="add__label" for="birthdate">Birthdate: </label>
                        <input class="add__input" type="text" name="birthdate" id="birthdate">
                    </div>

                    <div class="add__group">
                        <label class="add__label" for="gender">Gender: </label>
                        <select name="gender" id="gender" class="add__select" required>
                            <option value="">Select</option>
                            <option value="Male" class="add__option">Male</option>
                            <option value="Female" class="add__option">Female</option>
                        </select>
                    </div>

                    <div class="add__group">
                        <label class="add__label" for="breed">Breed: </label>
                        <input class="add__input" type="text" name="breed" id="breed">
                    </div>

                    <div class="add__group">
                        <label class="add__label" for="video">Video (URL): </label>
                        <input class="add__input" type="text" name="video" id="video">
                    </div>

                    <input type="submit" value="Create" class="add__submit" name="submit">
                    
                </form>
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