<?php include 'core.php'; ?>
<?php include 'model_base.php'; ?>
<?php $featured_data = Model_Base::query("Select * from projects where featured=1 and status = 1 LIMIT 10"); ?>
<?php $data = Model_Base::query("Select * from projects where status = 1 and sold = 0 order by featured desc LIMIT 9");  ?>
<?php $dataAll = Model_Base::query("Select * from projects where status = 1 and sold = 0 order by featured desc ");  ?>
<script type="text/javascript">
    var listingsData = <?php echo json_encode($dataAll); ?>;
    var listId = [];
    var searchList = []
    listingsData.forEach(function(index,value){
        searchList.push(index.project_name);
    })
    // console.log(listingsData);
</script>
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
            <div class="logo"><a href="/"><img class="lazyload" data-src="<?php echo http_Site; ?>images/leona-munro-logo-rust.png" alt=""></a></div>
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
    <section class="banner listing">
        <div class="container">
            <div class="lftSec">
                <p>Committed to Delivering<br>Outstanding Service</p>
                <div>It’s not just about the result. It’s how you go about getting it.</div>
                <div class="links">
                    <a href="javascript:;" class="button" onclick="scrollToListing(this)">View Properties</a><a href="contact.php" class="secondaryBtn">Contact Me</a>
                </div>
            </div>
            <!-- <div class="rgtSec"><img class="lazyload" data-src="<?php echo http_Site; ?>images/hm-banner.png" alt=""></div> -->
        </div>
    </section>
    <?php if(!empty($featured_data)): ?>
    <section class="featured listing">
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
    <a id="listing" name="listing"></a>
    <section class="search">
        <div class="container">
            <div class="s"><input type="text" placeholder="Search address of property" id="autoComp"><button onclick="sortBySaleType('search')"></button></div>
        </div>
    </section>
    <section class="listing" >
        <div class="container">
            <div class="sort">
                <div class="dropdown">
                    <label class="custom-select" for="sort">
                        <select id="sort" name="options" onchange="sortBySaleType('sort')">
                            <option value="">
                                Sort results
                            </option>
                            <option value="negotiation">
                                Negotiation
                            </option>
                            <option value="auction">
                                Auction
                            </option>
                            <option value="tender">
                                Tender
                            </option>
                            <option value="deadline">
                                Deadline
                            </option>
                        </select>
                    </label>
                </div>
                <div class=" range sortBed"><label for="">Bed</label>
                    <div class="range-slider">
                        <p class="range_vals"><span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>+</span></p>
                        <input class="range-slider__range" type="range" value="0" min="0" max="6" id='bed'>
                        <span class="range-slider__value">100</span>
                    </div>
                </div>
                <div class=" range sortBath"><label for="">Bath</label>
                    <div class="range-slider">
                        <p class="range_vals"><span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>+</span></p>
                        <input class="range-slider__range" type="range" value="0" min="0" max="6" id='bath'>
                        <span class="range-slider__value">100</span>
                    </div>
                </div>
                <div class=" range sortLiving"><label for="">Living</label>
                    <div class="range-slider">
                        <p class="range_vals"><span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>+</span></p>
                        <input class="range-slider__range" type="range" value="0" min="0" max="6" id='living'>
                        <span class="range-slider__value">100</span>
                    </div>
                </div>
                <div class=" range sortGarage"><label for="">Garage</label>
                    <div class="range-slider">
                        <p class="range_vals"><span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>+</span></p>
                        <input class="range-slider__range" type="range" value="0" min="0" max="6" id='garage'>
                        <span class="range-slider__value">100</span>
                    </div>
                </div>
                <div class="dropdown"><label class="custom-select" for="land"><select id="land" name="options">
                            <option value="">
                                Land Space
                            </option>
                            <option value="1">
                                Option 1
                            </option>
                            <option value="2">
                                Option 2
                            </option>
                            <option value="3">
                                Option 3
                            </option>
                            <option value="4">
                                Option 4
                            </option>
                        </select></label></div>
                <div class="dropdown"><label class="custom-select" for="floor"><select id="floor" name="options">
                            <option value="">
                                Floor Space
                            </option>
                            <option value="1">
                                Option 1
                            </option>
                            <option value="2">
                                Option 2
                            </option>
                            <option value="3">
                                Option 3
                            </option>
                            <option value="4">
                                Option 4
                            </option>
                        </select></label></div>
                <div class="links"><a href="javascript:;" class="button" onclick="sortBySaleType()">View Properties</a><a href="javascript:;" class="secondaryBtn" onclick="clearSearch()">Clear Search</a></div>
            </div>
            <div class="propertyList">
                <div class="noProperty" id="noProperty">Results not matching your sort criteria. <a href="javascript:;" class="secondaryBtn" onclick="clearSearch()">Clear Search</a></div>
                <div id="contentList">
                    <?php if(!empty($data)): ?>
                    <?php foreach ($data as $key => $value) : ?>
                    <script>
                        listId.push('<?php echo $value->id; ?>');
                    </script>
                    <a href="<?php echo http_Site.'details.php?name='.$value->uniquename; ?>" data-interest="<?php echo $value->interest; ?>" data-bed="<?php echo $value->beds; ?>" data-bath="<?php echo $value->toilet; ?>" data-living="<?php echo $value->seating; ?>" data-garage="<?php echo $value->parking; ?>" class="activeProp">
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
                    <?php endforeach; ?> 
                    <?php endif; ?>
                </div>
                <div class="loadMore" id="loadMore"><a href="javascript:;" class="secondaryBtn" onclick="loadPropertyBox(listingsData)"> Load More Listings</a></div>
            </div>
        </div>
    </section>
    <section class="contactSetion">
        <div class="container">
            <div class="lftSec">
                <h3 class="title">Contact Me</h3>
                <div class="phNo"><a href="tel:027568123">027 568 123</a></div>
                <div class="social">
                    <a href="https://linkedin.com/" class="linkedin"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-linkedin.svg" alt=""></a>
                    <a href="https://www.skype.com/" class="skype"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-skype.svg" alt=""></a>
                    <a href="https://twitter.com/" class="twitter"><img class="lazyload" data-src="<?php echo http_Site; ?>images/svg/icon-twitter.svg" alt=""></a>
                </div>
            </div>
            <div class="rgtSec">
                <div class="logo"><a href="javascript:;"><img class="lazyload" data-src="<?php echo http_Site; ?>images/leona-munro-logo-gray.png" alt=""></a></div>
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
    <script src="js/range-slider.js"></script>
</body>

</html>