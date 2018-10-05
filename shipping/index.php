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
            <p class="info__p">I primarily use American Airlines to ship the puppies by air. If I can't make connections using American, I then ship with Delta or Continental Airlines. Delta and Continental are higher in price. The puppies are shipped in an airline-approved crate with food and water. They will arrive with their registration, shot record, health guarantee and a large puppy kit taped onto their carrier. </p><p class="info__p"> Both airlines ship using same-day shipping that is safe and secure for the puppies. Both airlines offer priority shipping. If the puppies do travel in the cargo area, however, it is pressurized and at the same temperature and has the same air filtered in as the passengers breathe. Having shipped puppies for over 10 years, I have never had a negative incident. </p><p class="info__p"> When sent priority, your puppy doesn't have as much "sitting around" time while waiting for processing. They are guaranteed to be taken immediately off the plane with no long holding periods before, during or after the flight. They are hand delivered to each counter. I do not sedate the puppies before travel as it is not recommended by my veterinarian. </p><p class="info__p"> Most families report that the puppy was made available to them between 15 to 30 minutes from the time the plane arrived. When your puppy arrives, he/she may be picked up in the cargo pickup area or behind the counter of the ticket desk. The airlines does require some form of identification before they will release the puppy to the new owner. After you pick up your puppy and have returned home, I would ask that you call us to let us know how the puppy is doing. </p><p class="info__p"> All puppies must be a minimum of 8 weeks old before they travel to their new home, even if you pick the puppy up in person. It must be at least 20 degrees above (F) but not hotter than 85 degrees at any point in their trip to their new home. Snub nose puppies cannot fly above 75 degrees. </p><p class="info__p"> I make all the shipping arrangements. I search for the shortest available flight. I try to make the arrangements 2 weeks in advance, if possible. I will email the flight arrival information (airline, day of shipment, flight number, air bill number and time of arrival) as soon as they have been confirmed to us by the airline, along with the cost of shipping so you can send payment for shipping when you send the balance due on your puppy. Flight time and numbers are subject to change without notice. If they do, I will call you immediately after the puppy has been put on the flight with the changes and all information you will need to pick up your puppy. </p><p class="info__p"> Puppies shipped through airlines are guaranteed by the airline with an additional $10 charge, which is minimal. I suggest insuring your puppy for the value of the puppy. If you want insurance on your puppy, let us know as that has to be done before the puppy is placed on the airplane. The cost of the trip varies with areas and airlines. The normal fee is around $289.00 to $350.00 (depending on weight, size of cage, and airline). </p><p class="info__p"> Included with shipment of each puppy is its certified health certificate, vaccination and worming record, registration, puppy food, chew toy, 1 year Health Guarantee, and Pet carrier with food and water dish. (Pet Carrier is only included when shipping by air)</p>
            </div>
        </section>
    </main>
    <?php include "../php/includes/footerOneStep.php"; ?>
    
    <script src="../js/imgSelect.js"></script>
    <script src="../js/navRespond.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>

