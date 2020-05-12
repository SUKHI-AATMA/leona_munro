<?php if((!empty($_REQUEST))&& array_key_exists('name', $_REQUEST)):
  if($_REQUEST['name'] != ''):
  include 'core.php';
  include 'model_base.php';
  $data = Model_Base::query("select * from projects where uniquename = '{$_REQUEST['name']}'");
  if(!empty($data)):
  $documentData = Model_Base::query("select * from project_document where uniquename = '{$_REQUEST['name']}'");
  $images = ($data[0]->images != '') ? explode(',', $data[0]->images) : "";
  $featured_data = Model_Base::query("Select * from projects where featured=1 and status = 1 and uniquename != '{$_REQUEST['name']}' LIMIT 10");
  $reqName = $_REQUEST['name'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'include_social.php'; ?>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <style type="text/css">
    </style>
    <link rel="stylesheet" href="css/style.css?v=1.0">
</head>

<body class="detailsPg">
    <?php include 'include_header.php'; ?>
    <section class="gallery">
        <div class="container">
            <div class="gallery">
                <div class="bigImage"><img class="lazyload" data-src="<?php echo http_Site.'admin/upload/additionalImages/'.trim(preg_replace('/\s+/', ' ', $images[0])); ?>" alt="<?php echo ucwords($data[0]->project_name); ?>" id="bigImg"></div>
                <div class="thumbs">
                    <div class="gallery" id="gallery">
                        <?php if(count($images) > 0): ?>
                        <?php for($i=0;$i<count($images);$i++): ?>
                        <?php $small_images = ($data[0]->small_images != '') ? explode(',', $data[0]->small_images) : ""; 
                        // echo trim($small_images[$i],"");
                        //print_r($small_images); exit(); 
                        ?>
                        <div class="slide"><img class="lazyload" data-src="<?php echo http_Site.'admin/upload/resizedAdditionalImages/'.trim(preg_replace('/\s+/', ' ', $small_images[$i])); ?>" alt="<?php echo ucwords($data[0]->project_name); ?>" data-img="<?php echo http_Site.'admin/upload/additionalImages/'.trim(preg_replace('/\s+/', ' ', $images[$i])); ?>" onclick="openImg(this);"></div>
                        <?php endfor; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="details">
        <div class="container">
            <p class="propertySaleType">Auction</p>
            <p class="propertyTitle"><?php echo ucwords($data[0]->project_name); ?></p>
            <div class="propertyExtraDetails">
                <?php if($data[0]->beds != "" && $data[0]->beds != 0) { ?>
                <p class="bed"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-bed.svg" alt=""><span><?php echo $data[0]->beds; ?></span></p>
                <?php } ?>
                <?php if($data[0]->toilet != "" && $data[0]->toilet != 0) { ?>
                <p class="bath"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-bath.svg" alt=""><span><?php echo $data[0]->toilet; ?></span></p>
                <?php } ?>
                <?php if($data[0]->parking != "" && $data[0]->parking != 0) { ?>
                <p class="garage"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-parking.svg" alt=""><span><?php echo $data[0]->parking; ?></span></p>
                <?php } ?>
                <?php if($data[0]->seating != "" && $data[0]->seating != 0) { ?>
                <p class="living"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-living.svg" alt=""><span><?php echo $data[0]->seating; ?></span></p>
                <?php } ?>
                <?php if($data[0]->carpet_area != "" && $data[0]->carpet_area != 0) { ?>
                <p class="area"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-floorspace.svg" alt=""><span><?php echo $data[0]->carpet_area; ?>m<sup>2</sup></span></p>
                <?php } ?>
                <?php if($data[0]->area != "" && $data[0]->area != 0) { ?>
                <p class="area"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-property-lot-size.svg" alt=""><span><?php echo $data[0]->area; ?>m<sup>2</sup></span></p>
                <?php } ?>
            </div>
            <div class="propertyDesc">
                <?php echo $data[0]->description; ?>
            </div>
            <?php if(!empty($documentData)): ?>
            <div class="propertyDocuments">
                <?php foreach ($documentData as $key => $value) : ?>
                <a href="<?php echo $value->link; ?>" target="_blank" class="document"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-pdf-download.svg" alt=""><?php echo $value->docName; ?></a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php if(!empty($featured_data)): ?>
    <section class="featured viewMoreProperties" data-slides="<?php echo count($featured_data) ?>">
        <div class="container">
            <div class="title">View More Properties</div>
            <div class="featuredList">
                <div class="featured " id="featured">
                    <?php foreach ($featured_data as $key => $value) : ?>
                    <div class="slide">
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
                <div class="links"><a href="listings.php" class="button">View All Properties</a></div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php include 'include_contactSection.php'; ?>
    <?php include 'include_footer.php'; ?>
</body>
</html>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>