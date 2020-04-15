<?php include 'core.php'; ?>
<?php include 'model_base.php'; ?>
<?php $featured_data = Model_Base::query("Select * from projects where featured=1 and status = 1 LIMIT 10"); ?>
<!Doctype html>
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
            <div class="logo"><a href="/"><img class="lazyload" data-src="images/leona-munro-logo-rust.png" alt=""></a></div>
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
    <section class="banner">
        <div class="container">
            <div class="lftSec">
                <p>Exceptional design.<br>
                    Extraordinary service.</p>
            </div>
            <div class="rgtSec"><img class="lazyload" data-src="images/hm-banner.png" alt=""></div>
        </div>
    </section>
    <section class="aboutme">
        <div class="container">
            <div class="lftSec"><img class="lazyload" data-src="images/hm-about-me.jpg" alt=""></div>
            <div class="rgtSec">
                <div class="title">About Me Leona Munro Title Area</div>
                <p>Professionalism and integrity are words often bandied around by real estate agents.</p>
                <p>However, Leona Munro asks to be defined by her actions and her results.</p>
                <p>Leona’s actions and the sales she achieves for her clients speak louder than mere words.</p>
                <p><a href="javascript:;" class="secondaryBtn">Learn More</a></p>
            </div>
        </div>
    </section>
    <?php if(!empty($featured_data)): ?>
    <section class="featured">
        <div class="container">
            <div class="title">My Featured Listing</div>
            <div class="featuredList">
                <div class="featured" id="featured">
                    <?php foreach ($featured_data as $key => $value) : ?>
                    <div class="slide slide-1">
                        <a href="<?php echo http_Site.'details.php?name='.$value->uniquename; ?>">
                            <div class="propertyBox">
                                <div class="propertyImage"><img class="lazyload" data-src="<?php echo http_Site.'admin/upload/profileImage/'.$value->project_img; ?>" alt="<?php echo ucfirst($value->project_name); ?>"></div>
                                <div class="propertySaleType"><?php echo ucwords($value->interest); ?></div>
                                <div class="propertyTitle"><?php echo ucwords($value->project_name); ?></div>
                                <div class="propertyExtraDetails">
                                    <p class="bed"><img class="lazyload" data-src="images/svg/icon-bed.svg" alt=""><span><?php echo $value->beds; ?></span></p>
                                    <p class="bath"><img class="lazyload" data-src="images/svg/icon-bath.svg" alt=""><span><?php echo $value->toilet; ?></span></p>
                                    <p class="garage"><img class="lazyload" data-src="images/svg/icon-parking.svg" alt=""><span><?php echo $value->parking; ?></span></p>
                                    <p class="living"><img class="lazyload" data-src="images/svg/icon-living.svg" alt=""><span><?php echo $value->seating; ?></span></p>
                                    <!-- <p class="area"><img class="lazyload" data-src="images/svg/icon-property-lot-size.svg" alt=""><span>1</span></p> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="selling">
        <div class="container">
            <div class="title">Selling Your Home</div>
            <p>Small paragraph from the selling your home section of the about me page.</p>
            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            <p><a href="javascript:;" class="secondaryBtn">Learn More</a></p>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="title">Testimonials</div>
            <div class="base" id="testimonial">
                <div class="item">
                    <div>
                        <p>“ We felt Leona communicated well with us like a friend would and was honest. We felt comfortable at all times.”</p>
                        <p>- Steve & Barb<span>(10 Windsor Place)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p>“Third time around the block with Leona. Once as a buyer and twice as a seller. Bends over backwards. goes the extra mile and delivers beyond expectations”</p>
                        <p>- Paul & Esther<span>(9 Pencorrow Street)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p>“ We felt Leona communicated well with us like a friend would and was honest. We felt comfortable at all times.”</p>
                        <p>- Steve & Barb<span>(10 Windsor Place)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p>“Third time around the block with Leona. Once as a buyer and twice as a seller. Bends over backwards. goes the extra mile and delivers beyond expectations”</p>
                        <p>- Paul & Esther<span>(9 Pencorrow Street)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p>“ We felt Leona communicated well with us like a friend would and was honest. We felt comfortable at all times.”</p>
                        <p>- Steve & Barb<span>(10 Windsor Place)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p>“Third time around the block with Leona. Once as a buyer and twice as a seller. Bends over backwards. goes the extra mile and delivers beyond expectations”</p>
                        <p>- Paul & Esther<span>(9 Pencorrow Street)</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contactSetion">
        <div class="container">
            <div class="lftSec">
                <h3 class="title">Contact Me</h3>
                <div class="phNo"><a href="tel:027568123">027 568 123</a></div>
                <div class="social">
                    <a href="https://linkedin.com/" class="linkedin"><img class="lazyload" data-src="images/svg/icon-linkedin.svg" alt=""></a>
                    <a href="https://www.skype.com/" class="skype"><img class="lazyload" data-src="images/svg/icon-skype.svg" alt=""></a>
                    <a href="https://twitter.com/" class="twitter"><img class="lazyload" data-src="images/svg/icon-twitter.svg" alt=""></a>
                </div>
            </div>
            <div class="rgtSec">
                <div class="logo"><a href="javascript:;"><img class="lazyload" data-src="images/leona-munro-logo-gray.png" alt=""></a></div>
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
</body>

</html>