<?php include 'core.php'; ?>
<?php include 'model_base.php'; ?>
<?php 
    $featured_data = Model_Base::query("Select * from projects where featured=1 and status = 1 order by date_added desc LIMIT 10");
?>

<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
     <?php include 'include_social.php'; ?>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="css/style.css?v=1.0">
    
</head>

<body>
    <?php include 'include_header.php'; ?>
    <section class="banner">
        <div class="container">
            <div class="lftSec">
                <p><span class="animated delay-500s" data-anim="slideInUp">Exceptional results.</span><br>
                    <span class="animated delay-700s" data-anim="slideInUp">Extraordinary service.</span></p>
            </div>
            <div class="rgtSec"><img class="animated delay-500s" data-anim="fadeIn" src="<?php echo http_Site; ?>images/hm-banner.png" alt=""></div>
        </div>
    </section>
    <section class="aboutme">
        <div class="container">
            <div class="lftSec"><img class="animated delay-500s" data-anim="fadeIn" src="<?php echo http_Site; ?>images/hm-about-me.jpg" alt=""><a href="about.php" class="secondaryBtn mobile">Learn More</a></div>
            <div class="rgtSec">
                <div class="title animated delay-300s" data-anim="slideInUp">About Leona</div>
                <p class="animated delay-500s" data-anim="slideInUp">Professionalism and integrity are words often bandied around by real estate agents. However, Leona Munro asks to be defined by her actions and her results.</p>
                <p class="animated delay-700s" data-anim="slideInUp">Leona's actions and the sales she achieves for her clients speak louder than mere words. She is a Ray White multi-award winning agent recognised time-and-again for her exceptional customer service and attention to detail. This means whether you're a seller or a buyer working with Leona is a collaborative process rewarded with outstanding results.</p>
                <p class="animated delay-900s" data-anim="slideInUp"><a href="about.php" class="secondaryBtn desktop">Learn More</a></p>
            </div>
        </div>
    </section>
    <?php if(!empty($featured_data)): ?>
    <section class="featured" data-slides="<?php echo count($featured_data) ?>">
        <div class="container">
            <div class="title animated delay-900s" data-anim="slideInUp">Featured Listings</div>
            <div class="featuredList animated delay-900s" data-anim="slideInUp">
                <div class="featured" id="featured">
                    <?php foreach ($featured_data as $key => $value) : ?>
                    <div class="slide slide-1">
                        <a href="<?php echo http_Site.'details.php?name='.$value->uniquename; ?>">
                            <div class="propertyBox">
                                <div class="propertyImage"><img class="lazyload" data-src="<?php echo http_Site.'admin/upload/profileImage/'.$value->project_img; ?>" alt="<?php echo ucfirst($value->project_name); ?>"></div>
                                <div class="propertySaleType"><?php echo ucwords($value->interest); ?></div>
                                <div class="propertyTitle"><?php echo ucwords($value->project_name); ?></div>
                                <div class="propertyExtraDetails">
                                    <p class="bed"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-bed.svg" alt=""><span><?php echo $value->beds; ?></span></p>
                                    <p class="bath"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-bath.svg" alt=""><span><?php echo $value->toilet; ?></span></p>
                                    <p class="garage"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-parking.svg" alt=""><span><?php echo $value->parking; ?></span></p>
                                    <p class="living"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-living.svg" alt=""><span><?php echo $value->seating; ?></span></p>
                                    <!-- <p class="area"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-property-lot-size.svg" alt=""><span>1</span></p> -->
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
            <div class="title animated" data-anim="slideInUp">Selling Your Home</div>
            <p class="animated" data-anim="slideInUp">Leona and Mike follow up every single open home visitor. They provide detailed information packs at the open home and work with potential buyers to ensure they are in a good position to make an offer. Weekly reports with feedback throughout the open home and sales process ensure sellers receive buyer feedback and clear guidance on value of their property.</p>
            <p class="animated" data-anim="slideInUp"><a href="contact.php" class="secondaryBtn">Learn More</a></p>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="title animated" data-anim="slideInUp">Testimonials</div>
            <div class="base" id="testimonial">
                <div class="item">
                    <div>
                        <p data-anim="slideInUp" class="animated">“Leona was very friendly and went out of her way to be helpful to us at a very stressful time. If all agents were like her there wouldn't be any negative comments made about real estate.”</p>
                        <p data-anim="slideInUp" class="animated">- Merlin & Dianne<span>(13A Forfar Street)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p data-anim="slideInUp" class="animated">“Third time around the block with Leona. Once as a buyer and twice as a seller. Bends over backwards, goes the extra mile and delivers beyond expectations.”</p>
                        <p data-anim="slideInUp" class="animated">- Paul & Esther<span>(9 Pencorrow Street)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p data-anim="slideInUp" class="animated">“Leona was very friendly and went out of her way to be helpful to us at a very stressful time. If all agents were like her there wouldn't be any negative comments made about real estate.”</p>
                        <p data-anim="slideInUp" class="animated">- Merlin & Dianne<span>(13A Forfar Street)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p data-anim="slideInUp" class="animated">“Third time around the block with Leona. Once as a buyer and twice as a seller. Bends over backwards, goes the extra mile and delivers beyond expectations.”</p>
                        <p data-anim="slideInUp" class="animated">- Paul & Esther<span>(9 Pencorrow Street)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p data-anim="slideInUp" class="animated">“Leona was very friendly and went out of her way to be helpful to us at a very stressful time. If all agents were like her there wouldn't be any negative comments made about real estate.”</p>
                        <p data-anim="slideInUp" class="animated">- Merlin & Dianne<span>(13A Forfar Street)</span></p>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <p data-anim="slideInUp" class="animated">“Third time around the block with Leona. Once as a buyer and twice as a seller. Bends over backwards, goes the extra mile and delivers beyond expectations.”</p>
                        <p data-anim="slideInUp" class="animated">- Paul & Esther<span>(9 Pencorrow Street)</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'include_contactSection.php'; ?>
    <?php include 'include_footer.php'; ?>
</body>

</html>