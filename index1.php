<?php include 'core.php'; ?>
<?php include 'model_base.php'; ?>
<?php $featured_data = Model_Base::query("Select * from projects where featured=1 and status = 1 LIMIT 10"); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- COMMON TAGS -->
  <title>Leona Munro Property Consultant</title>
  <!-- Search Engine -->
  <meta name="description" content="Leona brings a dynamic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.">
  <meta name="image" content="http://Leonamunro.co.nz/images/hm-banner.jpg">
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="Leona Munro Property Consultant">
  <meta itemprop="description" content="Leona brings a dynamic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.">
  <meta itemprop="image" content="http://Leonamunro.co.nz/images/hm-banner.jpg">
  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <meta name="og:title" content="Leona Munro Property Consultant">
  <meta name="og:description" content="Leona brings a dynamic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.">
  <meta name="og:image" content="http://Leonamunro.co.nz/images/hm-banner.jpg">
  <meta name="og:url" content="http://Leonamunro.co.nz">
  <meta name="og:site_name" content="Leona Munro Property Consultant">
  <meta name="og:type" content="website">


  <link rel="stylesheet" href="<?php echo http_Site; ?>css/style.css?v=<?php echo version; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo http_Site; ?>css/vendor/slick.css" />
  <link rel="shortcut icon" type="image/png" href="<?php echo http_Site; ?>images/favicon.png"> 
</head>

<body>
  <?php include_once("includes/header.php"); ?>
  <section class="banner">
    <div class="cont">
      <h2>PROPERTY CONSULTANT</h2>
    </div>
    <div class="dwnArr">
      <img src="<?php echo http_Site; ?>images/dwnArr.png" alt=""> </div>
  </section>
  <section class="Leona">
    <div class="info">
      <div class="img">
        <img src="images/Leona.jpg" alt="Leona Munro"> </div>
      <div class="cont">
        <h1>Leona Munro</h1>
        <p>Leona brings a dynamic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.</p>
        <p>Every home and every homeowner is different, so expect a customised marketing strategy that’s a perfect fit for you. As a vendor, you’ll know you’re getting access to the latest proven techniques in real estate from a team of experts, from digital marketing and social media to home staging and design.</p>
        <p>With a passion and eye for presentation, Leona goes the extra distance towards helping you present your home at its best. First impressions count, and sometimes it’s the little extras that will really wow a potential buyer. Even if you’re only just starting to think of selling, now is a great time to seek Leona’s insider knowledge on what will help you attain a top price for your property.</p>
        <p>Consistently ranked on the monthly leaderboard for sales at Metro Realty, her track record and outstanding testimonials speak for themselves. In today’s fast market, choose experience and dedication for a stand-out sale and a friendly, seamless sales process. </p>
<!--         <p>From the moment you meet Leona it will be clear this is someone taking a fresh approach to helping people achieve their goals with property. You quickly realize you have found a consultant who will remain passionate and committed throughout all stages of the real estate process.</p>
        <p>Leona is a salesperson who thrives on surpassing expectations, her integrity, professionalism and dedication to her clients is unquestionable. Leona’s contagious energy and enthusiasm will give your property an edge throughout the marketing process. Being born and raised in Dunedin gives Leona a sound knowledge and passion for the Dunedin real estate market.</p> -->
        <p>
          <img src="images/awards/award1.png" alt="">
          <img src="images/awards/award2.png" alt=""><br>
          <img src="images/awards/award7.png" alt="">
          <img src="images/awards/award3.png" alt="">
        </p>
      </div>
    </div>
  </section>
  <?php if(!empty($featured_data)): ?>
  <section class="listing carou featured">
    <h2>Featured Listings</h2>
    <div class="featuredCarousel">
      <?php foreach ($featured_data as $key => $value) : ?>
      <div>
        <a href="<?php echo http_Site.'details/'.$value->uniquename; ?>">
          <div class="box">
            <div class="img">
              <img src="<?php echo http_Site.'admin/upload/profileImage/'.$value->project_img; ?>" alt="<?php echo ucfirst($value->project_name); ?>"> </div>
            <div class="cont">
              <div class="stName">
                <?php echo ucwords($value->project_name); ?> </div>
              <div class="amenities">
                <span class="bed">
                  <?php echo $value->beds; ?> </span>
                <span class="toilet">
                  <?php echo $value->toilet; ?> </span>
                <span class="area">
                  <?php echo $value->area; ?> sqm </span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?> </div>
    <a href="buy.php" class="more button">SEE MORE</a>
  </section>
  <?php endif; ?>
  <section class="whyMe">
    <div class="cont">
      <div class="box">
        <div class="img">
          <img src="<?php echo http_Site; ?>images/svg/heart.svg" alt=""> </div>
        <div class="cont">
          <div class="title">Passion for Presentation</div>
          <div class="desc">Presenting your property at its full potential attracts buyers who will fall in love with it.</div>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="<?php echo http_Site; ?>images/svg/ribbion.svg" alt=""> </div>
        <div class="cont">
          <div class="title">A Proven Top Seller</div>
          <div class="desc">Consistently ranked as one of Metro Realty's top agents for sales.</div>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="<?php echo http_Site; ?>images/svg/check.svg" alt=""> </div>
        <div class="cont">
          <div class="title">The Extra Mile</div>
          <div class="desc">Whatever’s required for a hassle-free sale with the best price, we can do it.</div>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="<?php echo http_Site; ?>images/svg/star.svg" alt=""> </div>
        <div class="cont">
          <div class="title">A Team of Experts</div>
          <div class="desc">Professional marketing, staging, design consultation, renovation, maintenance and more.</div>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="<?php echo http_Site; ?>images/svg/camera.svg" alt=""> </div>
        <div class="cont">
          <div class="title">The Latest in Digital Marketing</div>
          <div class="desc">Today’s marketing channels cover much more than just newspaper ads - think social media, video & 3D imagery.</div>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="<?php echo http_Site; ?>images/svg/pin.svg" alt=""> </div>
        <div class="cont">
          <div class="title">Dunedin Born and Bred</div>
          <div class="desc">No matter where you are, Leona can offer detailed real estate insights into your local area.</div>
        </div>
      </div>
    </div>
  </section>
  <section class="subscribe">
    <div class="centerCont">
      <div class="cont">
        <h3>Let’s start the conversation</h3>
        <p>Receive updates about new houses and
          <br class="desktop">locations in and around Dunedin.</p>
      </div>
      <div class="form">
        <form action="" method="post">
        <input type="text" id="txtFirstSubscribe" placeholder="First Name*">
        <input type="text" id="txtLastSubscribe" placeholder="Last Name*">
        <input type="email" id="txtEmailSubscribe" placeholder="Email*">
        <button id="btnSubscribeEmail">Subscribe</button>
        <label for="" class="success"></label>
        </form>
        
        
      </div>
    </div>
  </section>
  <section class="instagram">
    <h2>Instagram</h2>
    <div id="instafeed"></div>
  </section>
  <section class="contactForm">
    <div class="title">Contact</div>

    <div class="wrap">
      <div class="mat-div">
        <label for="name" class="mat-label">YOUR NAME</label>
        <input type="text" class="mat-input" id="name">
        <label for="" class="status"></label>
      </div>
      <div class="mat-div">
        <label for="email" class="mat-label">VALID EMAIL</label>
        <input type="text" class="mat-input" id="email">
        <label for="" class="status"></label>
      </div>
      <div class="mat-div">
        <label for="number" class="mat-label">YOUR MESSAGE</label>
        <textarea class="mat-input" id="message" rows="7"></textarea>
        <label for="" class="status"></label>
      </div>
      <button id="submit">SEND MESSAGE</button>
      <label for="" class="success"></label>
    </div>
  </section>
  <?php include_once("includes/footer.html"); ?>
  <?php include_once("includes/common-scripts.html"); ?>
  <script type="text/javascript" src="<?php echo http_Site; ?>js/vendor/instafeed.min.js?v=<?php echo version; ?>"></script>
  <script type="text/javascript" src="<?php echo http_Site; ?>js/vendor/slick.min.js?v=<?php echo version; ?>"></script>
  <script type="text/javascript" src="<?php echo http_Site; ?>js/init.js?v=<?php echo version; ?>"></script>
  <script>
  DEFAULTVARS.init();
  </script>
</body>

</html>