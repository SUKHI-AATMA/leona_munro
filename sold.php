<?php include 'core.php'; ?>
<?php include 'model_base.php'; ?>

<?php $data = Model_Base::query("Select * from projects where status = 1 and sold = 1 order by date_added desc");  ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'include_social.php'; ?>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="css/style.css?v=1.0">
</head>

<body>
    <?php include 'include_header.php'; ?>
    <section class="banner listing">
        <div class="container">
            <div class="lftSec">
                <p><span class="animated" data-anim="slideInUp">Committed to Delivering</span><br><span class="animated delay-200s" data-anim="slideInUp">Outstanding Service</span></p>
                <div class="animated delay-400s" data-anim="slideInUp">It’s not just about the result. It’s how you go about getting it.</div>
                <div class="links animated delay-600s" data-anim="slideInUp">
                    <a href="javascript:;" class="button" onclick="scrollToListing(this)">View Properties</a><a href="contact.php" class="secondaryBtn">Contact Me</a>
                </div>
            </div>
            <!-- <div class="rgtSec"><img class="lazyload" data-src="<?php echo http_Site; ?>images/hm-banner.png" alt=""></div> -->
        </div>
    </section>
    <a id="listing" name="listing"></a>
    <section class="listing sold" >
        <div class="container">
            <div class="propertyList">
                <div class="noProperty" id="noProperty">Results not matching your sort criteria. <a href="javascript:;" class="secondaryBtn" onclick="clearSearch()">Clear Search</a></div>
                <div id="contentList">
                    <?php if(!empty($data)): ?>
                    <?php foreach ($data as $key => $value) : ?>

                    <!-- <script>
                        listId.push('<?php echo $value->id; ?>');
                    </script> -->
                    <a href="<?php echo http_Site.'details.php?name='.$value->uniquename; ?>" data-interest="<?php echo $value->interest; ?>" data-bed="<?php echo $value->beds; ?>" data-bath="<?php echo $value->toilet; ?>" data-living="<?php echo $value->seating; ?>" data-garage="<?php echo $value->parking; ?>" class="activeProp animated" data-anim="slideInUp">
                        <div class="propertyBox <?php if($value->sold == '1') echo 'sold' ?>">
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
                    <?php endforeach; ?> 
                    <?php endif; ?>
                </div>
                <!-- <div class="loadMore" id="loadMore"><a href="javascript:;" class="secondaryBtn" onclick="loadPropertyBox(listingsData)"> Load More Listings</a></div> -->
            </div>
        </div>
    </section>
    <?php include 'include_contactSection.php'; ?>
    <?php include 'include_footer.php'; ?>
    
</body>

</html>