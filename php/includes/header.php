<?php include "php/variables.php"; ?>
<?php include "php/includes/db.php"; ?>
<header class="header">
        <div class="header__bar">
            <img src="img/logo.png" alt="Savannah May's Puppies in Paradise" class="header__img" onclick="window.open('./, '_self'');">
            <p class="header__heading"><?php echo $tag_line; ?></p>
        </div>
        <div class="header__sticky-respond">
            <nav class="nav" id="js--nav">
                <img src="img/favicon.png" alt="favicon" class="nav__img">
                <!-- <img src="img/logo-sticky.png" alt="Logo for Savannah May Puppies" class="nav__img--sticky"> -->
                <a href="./" class="nav__link">Home</a>
                <a href="puppies/" class="nav__link">Puppies</a>
                <a href="about/" class="nav__link">Meet the Family</a>
                <a href="meet-the-parents/" class="nav__link">Meet the Parents</a>
                <a href="contact/" class="nav__link">Contact</a>
                <a href="shipping/" class="nav__link">Information</a>
                <a href="javascript:void(0);" class="nav__link nav__link--icon" id="js--nav-icon"><i class="fas fa-bars"></i></a>
            </nav>
        </div>
        
    </header>