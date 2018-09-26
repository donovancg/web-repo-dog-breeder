<?php include "../php/includes/db.php"; ?>
<?php

$query_delivery = "SELECT content FROM pagecontent WHERE page='Shipping'";
$result_delivery = mysqli_query($connect, $query_delivery);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../php/includes/metaLinks.php"; ?>
    <link rel="stylesheet" href="../css/style.css">
    <title>Information &ndash; Savannah May Puppies</title>
</head>
<body>
    <?php include "../php/includes/headerOneStep.php"; ?>
    <main>
        <section class="section-info">
            <h2 class="heading-secondary">Delivery Information</h2>
            <div class="info">
                <?php
                
                while($row_delivery = mysqli_fetch_assoc($result_delivery)) {
                    echo $row_delivery['content'];
                }
                
                ?>
            </div>
        </section>
    </main>
    <?php include "../php/includes/footerOneStep.php"; ?>
    
    <script src="../js/imgSelect.js"></script>
    <script src="../js/navRespond.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>

