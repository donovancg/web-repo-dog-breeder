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
        <section class="section-contact">
            <h2 class="heading-secondary">Contact Us</h2>
            <div class="contact">
                <form action="../php/mail.php" class="contact__form form" method="post">
                    <div class="form__group form__group--input">
                        <label class="form__label" for="name">Name <span class="u-color-red">*</span></label>
                        <input class="form__input" type="text" id="name" name="name" maxlength="250" required>
                    </div>

                    <div class="form__group form__group--input">
                        <label class="form__label" for="email">Email <span class="u-color-red">*</span></label>
                        <input class="form__input" type="email" id="email" name="email" maxlength="250" required>
                    </div>
                    
                    <div class="form__group form__group--textarea">
                        <label class="form__label" for="content">Comments <span class="u-color-red">*</span></label>
                        <textarea class="form__textarea" name="content" id="content" maxlength="2000" required></textarea>
                    </div>
                    <input type="submit" value="Submit" name="submit" id="submit" class="form__submit">
                </form>
                <p class="result" style="text-align: center; padding-bottom: 2rem;"><?php
                if(isset($_GET['s'])) {
                    if($_GET['s'] == '1') {
                        echo "The message has been successfully sent.";
                    } else {
                        echo "An error occurred. Please try again.";
                    }
                }
                ?></p>
            </div>
        </section>
    </main>
    <?php include "../php/includes/footerOneStep.php"; ?>
    <script src="../js/navRespond.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
