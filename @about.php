<?php include 'core.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- COMMON TAGS -->
  <title>Leona Munro Property Consultant</title>
  <!-- Search Engine -->
  <meta name="description" content="Leona brings a dynamic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.">
  <meta name="image" content="https://leonamunro.co.nz/images/hm-banner.jpg">
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="Leona Munro Property Consultant">
  <meta itemprop="description" content="    amic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.">
  <meta itemprop="image" content="https://leonamunro.co.nz/images/hm-banner.jpg">
  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <meta name="og:title" content="Leona Munro Property Consultant">
  <meta name="og:description" content="Leona brings a dynamic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.">
  <meta name="og:image" content="https://leonamunro.co.nz/images/hm-banner.jpg">
  <meta name="og:url" content="https://leonamunro.co.nz">
  <meta name="og:site_name" content="Leona Munro Property Consultant">
  <meta name="og:type" content="website">
  <link rel="stylesheet" href="<?php echo http_Site; ?>css/style.css?v=<?php echo version; ?>">
  <link rel="stylesheet" type="text/css" href="css/vendor/slick.css" />
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"> </head>

<body class="about">
  <?php include_once("includes/header.php"); ?>
  <section class="banner about">
    <div class="cont">
      <h2> ABOUT US </h2>
    </div>
    <div class="dwnArr">
      <img src="images/ico-arrow.png" alt=""> </div>
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
  <!-- <section class="team">
    <div class="row">
                <div class="intro">
                  <div class="title">JO</div>
                  <p>From the moment you meet Leona it will be clear this is someone taking a fresh approach to helping people achieve their goals with property. You quickly realize you have found a consultant who will remain passionate and committed throughout all stages of the real estate process.</p>
                </div>
                <div class="pic">
                  <img src="images/jo.jpg" alt=""> </div>
</div> 
<div class="row">
  <div class="pic">
    <img src="images/dummy.jpg" alt=""> </div>
  <div class="intro">
    <div class="title">PLACEHOLDER</div>
    <p>From the moment you meet Leona it will be clear this is someone taking a fresh approach to helping people achieve their goals with property. You quickly realize you have found a consultant who will remain passionate and committed throughout all stages of the real estate process.</p>
  </div>
  <div class="pic mobile">
    <img src="images/dummy.jpg" alt=""> </div>
</div>
  </section>-->

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
  <script type="text/javascript" src="<?php echo http_Site; ?>js/init.js?v=<?php echo version; ?>"></script>
  <script>
  DEFAULTVARS.init();
  </script>
</body>

</html>