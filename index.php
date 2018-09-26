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
                    <h2 class="heading-secondary">Welcome to Savannah May’s.</h2>
                    <h3 class="heading-secondary">The home of some very spoiled babies.</h3>
                    
                </div>
                
            </div>
        </section>
        <section class="section-about-home">
            <h2 class="heading-secondary about__header">About My Puppies</h2>
            <div class="about">
            <p class="about__p">We specialize in Yorkiepoos, which make great, loyal friends and perfect travel companions. The puppies I have for sale are precious!They have beautiful Yorkiepoo coats, tiny faces, and small ears. Just look at all my Yorkiepoo pictures and you will see the quality. My Yorkies and Parti Color Yorkies are calm and love a lap to be on and just to be with you. They are very sweet and snuggly!</p>
            </div>
        </section>
        
        <div class="section-divide"></div>

        <section class="section-info-home">
            <h2 class="heading-secondary info__header">Information</h2>
            <div class="info">
                <h3 class="heading-tertiary info__head">Payment</h3>
                <p class="info__p">We accept all major credit cards. The prices do not include any delivery arrangements, tax, and credit card fees. ALL MY YORKIEPOO PUPPIES ARE SOLD AS PETS ONLY.</p>

                <br>

                <h3 class="heading-tertiary info__head">Waiting list</h3>

                <p class="info__p">Our waiting list is designed for those who are serious about making our puppies an addition to their family. If the puppy you want is not among the current litter, your choice is preserved on the waiting list.</p>
                <p class="info__p">For more information, please look at my <a href="shipping/">Information</a> page.</p>
                
                <br>

                <p class="info__p">**Important**<br>Understand that these puppies are our babies. We want every puppy to find a home that is a perfect match for them and their new family. On selection day, if you are not able to select the puppy that you connect with, you can move up on the list for the next litter, or we will gladly refund your deposit. It’s your choice. We don't want anyone feeling as if they have to settle for a puppy simply because they have a deposit invested. All our puppies are adorable, precious, and very intelligent. They turn heads everywhere they go! If you don't feel it’s a perfect match for you, then it most likely isn't for the pup. After a puppy is selected, the deposit is forfeited if the purchase is not completed. We typically select puppies when they are about five weeks old.</p>

                <br>

                <p class="info__p">In the unlikely event the home is no longer suitable for the puppy, please contact us. We will gladly assist with rehoming the puppy. Placing one of our puppies in a shelter is never an option; please contact us instead.</p>
            </div>
        </section>
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






<!--
**Important**
Understand that our puppies are our babies. We want every puppy to find a home that is a perfect match for them and their new family. On selection day, if you are not able to select the puppy that you connect with you can move up on the list for the next litter or we will gladly refund your deposit. Your choice. We don't want anyone feeling as if they have to settle for a puppy simply because they have a deposit invested. Our puppies are all adorable, precious, and very intelligent. They turn heads everywhere they go so if you don't feel its a perfect match for you then it most likely isn't for the pup. After a puppy is selected the deposit is forfeited if purchase is not completed. We typically select puppies around week 5 after birth.

In the unlikely event the home is no longer suitable for the puppy, please contact us. We will help gladly assist with rehoming the puppy. Placing one of our puppies in a shelter is never a option, please contact us instead.


We primarily use American Airlines to ship the puppies by air. If we can't make connections using America, we then ship with Delta or Continental Airlines. Delta and Continental are higher in price. The puppies are shipped in an
airline-approved crate with food and water. They will arrive with their registration, shot record, health
guarantee and a large puppy kit taped onto their carrier.

Both airlines ship using same-day shipping that is safe and secure for the puppies. Both airlines offer priority shipping. If the puppies do travel in the cargo area, however, it is pressurized and at the same temperature and has the same air filtered in as the passengers breathe. Having shipped puppies for over 10 years, we have never had a negative incident.

When sent priority, your puppy doesn't have as much "sitting around" time while waiting for processing. They are guaranteed to be taken immediately off the plane with no long holding periods before, during or after the flight. They are hand delivered to each counter. We do not sedate the puppies before travel as it is not recommended by our veterinarian.

Most families report that the puppy was made available to them between 15 to 30 minutes from the time the plane arrived.
When your puppy arrives, he/she may be picked up in the cargo pickup area or behind the counter of the ticket desk. The airlines does require some form of identification before they will release the puppy to the new owner. After you pick up your puppy and have returned home, we would ask that you call us to let us know how the puppy is doing.

All puppies must be a minimum of 8 weeks old before they travel to their new home, even if you pick the puppy up in person.
It must be at least 20 degrees above (F) but not hotter than 85 degrees at any point in their trip to their new home. Snub nose puppies cannot fly above 75 degrees.

We make all the shipping arrangements. We search for the shortest available flight. We try to make the arrangements 2 weeks in advance, if possible. We will email the flight arrival information (airline, day of shipment, flight number, air bill number and time of arrival) as soon as they have been confirmed to us by the airline, along with the cost of shipping so you can send payment for shipping when you send the balance due on your puppy. Flight time and numbers are subject to change without notice. If they do, we will call you immediately after the puppy has been put on the flight with the changes and all information you will need to pick up your puppy.

Puppies shipped through airlines are guaranteed by the airline with an additional $10 charge, which is minimal. We
suggest insuring your puppy for the value of the puppy. If you want insurance on your puppy, let us know as that has to be done before the puppy is placed on the airplane.

The cost of the trip varies with areas and airlines. The normal fee is around $289.00 to $350.00 (depending on weight, size
of cage, and airline).

Included with shipment of each puppy is its certified health certificate, vaccination and worming record, registration, puppy food, chew toy, 1 year Health Guarantee, and Pet carrier with food and water dish. (Pet Carrier is only included when shipping by air)


-->