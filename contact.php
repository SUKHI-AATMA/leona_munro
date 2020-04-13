<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Leona Munro</title>
    <meta name="description" content="Leona Munro">
    <meta name="author" content="Leona Munro">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css"> -->
    <style type="text/css">
    </style>
    <link rel="stylesheet" href="css/style.css?v=1.0">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo"><a href="/"><img src="<?php echo http_Site; ?>images/leona-munro-logo-rust.png" alt=""></a></div>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="listings.php">Listings</a></li>
                    <li><a href="about.php">About Me</a></li>
                    <li><a href="contact.php" class="button">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="banner contactBanner">
        <div class="container">
            <div class="lftSec">
                <p>Contact Me</p>
                <div>Make your next move</div>
                <div class="links">
                    <a href="javascript:;"><img src="<?php echo http_Site; ?>images/svg/icon-contact-phone.svg" alt=""></a>
                    <a href="javascript:;"><img src="<?php echo http_Site; ?>images/svg/icon-contact-email.svg" alt=""></a>
                </div>
            </div>
            <div class="rgtSec"><img src="<?php echo http_Site; ?>images/cn-banner.jpg" alt=""></div>
        </div>
    </section>
    <section class="banner meetingbanner">
        <img src="<?php echo http_Site; ?>images/cn-banner-meeting.jpg" alt="">
    </section>
    <section class="contactSetion">
        <div class="container">
            <div class="lftSec">
                <h3 class="title">Contact Me</h3>
                <div class="phNo"><a href="tel:027568123">027 568 123</a></div>
                <div class="social">
                    <a href="https://linkedin.com/" class="linkedin"><img src="<?php echo http_Site; ?>images/svg/icon-linkedin.svg" alt=""></a>
                    <a href="https://www.skype.com/" class="skype"><img src="<?php echo http_Site; ?>images/svg/icon-skype.svg" alt=""></a>
                    <a href="https://twitter.com/" class="twitter"><img src="<?php echo http_Site; ?>images/svg/icon-twitter.svg" alt=""></a>
                </div>
            </div>
            <div class="rgtSec">
                <div class="logo"><a href="javascript:;"><img src="<?php echo http_Site; ?>images/leona-munro-logo-gray.png" alt=""></a></div>
                <div class="form">
                    <form action="email.php" name="myForm" onsubmit="return(validate());" method="get">
                        <p>
                            <label for="name">Name</label><input name="name" id="name" type="text">
                        </p>
                        <p>
                            <label for="email">Email</label><input name="email" id="email" type="text">
                        </p>
                        <p>
                            <label for="message">Message</label><textarea name="message" id="message" cols="30" rows="5"></textarea>
                        </p>
                        <p><input type="submit" class="button" id="submitContactForm" value="Contact Me"><label for="" class="error" id="error"></label></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="copy">© Copyright Leona Munro <script>
                document.write(new Date().getFullYear())
                </script>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/range-slider.js"></script>
</body>

</html>