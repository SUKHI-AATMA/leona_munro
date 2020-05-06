<section class="contactSetion">
    <div class="container">
        <div class="lftSec">
            <h3 class="title">Contact Me</h3>
            <div class="phNo"><a href="tel:027568123">027 568 123</a></div>
            <div class="social">
                <a href="https://linkedin.com/" class="linkedin"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-linkedin.svg" alt=""></a>
                <a href="https://facebook.com/" class="facebook"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-fb.svg" alt=""></a>
                <a href="https://instagram.com/" class="instagram"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-insta.svg" alt=""></a>
            </div>
        </div>
        <div class="rgtSec">
            <div class="logo"><a href="/"><img class="lazyload" data-src="<?php echo http_Site; ?>images/leona-munro-logo-gray.png" alt=""></a></div>
            <div class="form">
                <form action="email.php" name="myForm" onsubmit="return(validate());" method="POST">
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