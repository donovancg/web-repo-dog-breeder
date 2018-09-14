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
                        <label class="form__label" for="name">Name</label>
                        <input class="form__input" type="text" id="name" name="name" required>
                    </div>

                    <div class="form__group form__group--input">
                        <label class="form__label" for="email">Email</label>
                        <input class="form__input" type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form__group form__group--textarea">
                        <label class="form__label" for="content">Comments</label>
                        <textarea class="form__textarea" name="content" id="content" required></textarea>
                    </div>
                    <input type="submit" value="Submit" name="submit" id="submit" class="form__submit">
                </form>
            </div>
        </section>
    </main>
    <?php include "../php/includes/footerOneStep.php"; ?>
    <script src="../js/navRespond.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
