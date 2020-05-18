<?php include 'core.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'include_social.php'; ?>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="css/style.css?v=1.0">
</head>

<body data-page="Contact">
    <?php include 'include_header.php'; ?>
    <section class="banner contactBanner">
        <div class="container">
            <div class="lftSec">
                <p class="animated" data-anim="slideInUp">Contact Me</p>
                <div class="animated delay-200s" data-anim="slideInUp">Make your next move</div>
                <div class="links">
                    <a href="tel:0274550378" class="animated delay-400s" data-anim="fadeIn"><img src="<?php echo http_Site; ?>images/svg/icon-contact-phone.svg" alt=""></a>
                    <a href="mailto:leona.munro@raywhite.com" class="animated delay-600s" data-anim="fadeIn"><img src="<?php echo http_Site; ?>images/svg/icon-contact-email.svg" alt=""></a>
                </div>
            </div>
            <div class="rgtSec"><img class="lazyload animated" data-anim="fadeIn" data-src="<?php echo http_Site; ?>images/cn-banner.jpg" alt=""></div>
        </div>
    </section>
    <section class="banner meetingbanner">
        <img  class="lazyload animated" data-anim="fadeIn" data-src="<?php echo http_Site; ?>images/cn-banner-meeting.jpg" alt="">
    </section>
    <?php include 'include_contactSection.php'; ?>
    <?php include 'include_footer.php'; ?>
</body>

</html>