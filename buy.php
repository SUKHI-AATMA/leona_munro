<?php include 'core.php'; ?>
<?php include 'model_base.php'; ?>
<?php $data = Model_Base::query("Select * from projects where status = 1 and sold = 0 order by featured desc LIMIT 9");  ?>
<!-- Select * from projects where status = 1 and sold = 0 order by featured desc -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- COMMON TAGS -->
  <meta charset="utf-8">
  <title>Leona Munro Property Consultant</title>
  <!-- Search Engine -->
  <meta name="description" content="Leona brings a dynamic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.">
  <meta name="image" content="https://leonamunro.co.nz/images/hm-banner.jpg">
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="Leona Munro Property Consultant">
  <meta itemprop="description" content="Leona brings a dynamic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.">
  <meta itemprop="image" content="https://leonamunro.co.nz/images/hm-banner.jpg">
  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <meta name="og:title" content="Leona Munro Property Consultant">
  <meta name="og:description" content="Leona brings a dynamic approach to real estate in Dunedin. Throughout every stage of the sales process, she’ll remain committed to making sure you achieve the absolute best outcome.">
  <meta name="og:image" content="https://leonamunro.co.nz/images/hm-banner.jpg">
  <meta name="og:url" content="https://leonamunro.co.nz">
  <meta name="og:site_name" content="Leona Munro Property Consultant">
  <meta name="og:type" content="website">

  
  <link rel="stylesheet" href="<?php echo http_Site; ?>css/style.css?ver=<?php echo date("h:i:sa"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo http_Site; ?>css/vendor/slick.css" />
  <link rel="shortcut icon" type="image/png" href="<?php echo http_Site; ?>images/favicon.png" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.17.0/lazyload.min.js"></script>
  <script>  var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
});</script>
</head>

<body class="listing">
  <?php include_once("includes/header.php"); ?>
  <section class="listing">
    <div class="sort">
      <div class="dropdown">
        <button class="dropbtn">Sort Listings</button>
        <div class="dropdown-content">
          <a href="#" class="selectSortBy" data-select="date">LATEST</a>
          <a href="#" class="selectSortBy" data-select="bedLow">BEDROOMS (LOW)</a>
          <a href="#" class="selectSortBy" data-select="bedHigh">BEDROOMS (HIGH)</a>
          <a href="#" class="selectSortBy" data-select="areaLow">AREA (LOW)</a>
          <a href="#" class="selectSortBy" data-select="areaHigh">AREA (HIGH)</a>
        </div>
      </div>
    </div>
    <div class="list" id="productListingDiv">
      <?php if(!empty($data)): ?>
      <?php foreach ($data as $key => $value) : ?>
      <div class="box">
        <a href="<?php echo http_Site.'details/'.$value->uniquename; ?>">
          <div class="img">
            <img class="lazy" src="images/spacer.gif" data-src="<?php echo http_Site.'admin/upload/profileImage/'.$value->project_img; ?>" alt="<?php echo ucfirst($value->project_name); ?>"> </div>
          <div class="cont">
            <div class="stName">
              <?php echo ucfirst($value->project_name); ?> </div>
            <div class="amenities">
              <?php if($value->beds !=0): ?>
              <span class="bed">
                <?php echo $value->beds; ?> </span>
              <?php endif; ?>
              <?php if($value->toilet !=0): ?>
              <span class="toilet">
                <?php echo $value->toilet; ?> </span>
              <?php endif; ?>
              <?php if($value->area !=0): ?>
              <span class="area">
                <?php echo $value->area; ?> m2</span>
              <?php endif; ?> </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?> </div>
    <a href="#" class="loadMore" id="btnLoadMore">LOAD MORE</a>
    <?php endif; ?> </section>

  <section class="listing carou">
    <div class="carousel">
      <?php $moreProducts = Model_Base::query("Select * FROM projects where sold = 1 and status = 1 ORDER BY id DESC"); ?>
      <?php if(count($moreProducts) < 9): ?>
      <?php $moreProducts = Model_Base::query("Select * FROM projects where sold = 1 and status = 1 ORDER BY id DESC"); ?>
      <?php endif; ?>
      <?php if(!empty($moreProducts)): ?>
      <?php foreach ($moreProducts as $key => $value) : ?>
      <div>
        <div class="boxSold">
          <a href="<?php echo http_Site.'details/'.$value->uniquename; ?>">
            <span class="sold">SOLD</span>
            <div class="img">
              <img src="<?php echo http_Site.'admin/upload/profileImage/'.$value->project_img; ?>" alt="<?php echo $value->project_name; ?>"> </div>
            <div class="cont">
              <div class="stName">
                <?php echo ucfirst($value->project_name); ?> </div>
              <div class="amenities">
                <span class="bed">
                  <?php echo $value->beds; ?> </span>
                <span class="toilet">
                  <?php echo $value->toilet; ?> </span>
                <span class="area">
                  <?php echo $value->area; ?>sqm </span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
      <?php endif; ?> </div>
  </section>
  <?php include_once("includes/footer.html"); ?>
  <?php include_once("includes/common-scripts.html"); ?>
  <script type="text/javascript" src="<?php echo http_Site; ?>js/vendor/slick.min.js?v=<?php echo version; ?>"></script>
  <script type="text/javascript" src="<?php echo http_Site; ?>js/init.js?v=<?php echo version; ?>"></script>
  <script>
  DEFAULTVARS.init();
  var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
});
  </script>
</body>

</html>