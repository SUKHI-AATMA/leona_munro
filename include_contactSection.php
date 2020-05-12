<section class="contactSetion">
    <div class="container">
        <div class="lftSec">
            <h3 class="title animated" data-anim="slideInUp">Contact Me</h3>
            <div class="phNo animated delay-200s" data-anim="slideInUp"><a href="tel:0274550378">027 455 0378</a></div>
            <div class="social">
                <a href="https://www.linkedin.com/in/leona-munro-6b0a1473/" class="linkedin animated delay-400s" data-anim="slideInUp"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-linkedin.svg" alt=""></a>
                <a href="https://www.facebook.com/RWLeona/" class="facebook animated delay-500s" data-anim="slideInUp"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-fb.svg" alt=""></a>
                <a href="https://www.instagram.com/rwleonamunro/" class="instagram animated delay-600s" data-anim="slideInUp"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-insta.svg" alt=""></a>
            </div>
        </div>
        <div class="rgtSec">
            <div class="logo animated" data-anim="fadeIn"><a href="/"><img class="lazyload" data-src="<?php echo http_Site; ?>images/leona-munro-logo-gray.png" alt=""></a></div>
            <div class="form">
                <form action="email.php" name="myForm" onsubmit="return(validate());" method="POST">
                    <input id="pageNm" name="pageNm" type="hidden" value="">
                    <p class="animated delay-200s" data-anim="slideInUp">
                        <label for="name">Name</label><input name="name" id="name" type="text">
                    </p>
                    <p class="animated delay-400s" data-anim="slideInUp">
                        <label for="email">Email</label><input name="email" id="email" type="text">
                    </p>
                    <p class="animated delay-600s" data-anim="slideInUp">
                        <label for="message">Message</label><textarea name="message" id="message" cols="30" rows="5"></textarea>
                    </p>
                    <p class="animated delay-800s" data-anim="slideInUp"><input type="submit" class="button" id="submitContactForm" value="Contact Me"><label for="" class="error" id="error"></label></p>
                </form>
            </div>
        </div>
    </div>
</section>