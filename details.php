<?php if((!empty($_REQUEST))&& array_key_exists('name', $_REQUEST)): ?>
<?php if($_REQUEST['name'] != ''): ?>
<?php include 'core.php'; ?>
<?php include 'model_base.php'; ?>
<?php $data = Model_Base::query("select * from projects where uniquename = '{$_REQUEST['name']}'"); ?>
<?php if(!empty($data)): ?>
<?php $documentData = Model_Base::query("select * from project_document where uniquename = '{$_REQUEST['name']}'"); ?>
<!doctype html>
<html lang="en">

<head>
  <script type="text/javascript">
    console.log(<?php $documentData ?>);
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- COMMON TAGS -->
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


  <link rel="stylesheet" href="<?php echo http_Site; ?>css/style.css?124">
  <link rel="stylesheet" type="text/css" href="<?php echo http_Site; ?>css/vendor/slick.css" />
  <link rel="shortcut icon" type="image/png" href="<?php echo http_Site; ?>images/favicon.png"> </head>

<body class="details">
  <?php include_once("includes/header.php"); ?>
  <section class="details">
    <h1>
      <?php echo ucwords($data[0]->project_name); ?> </h1>
    <?php $images = ($data[0]->images != '') ? explode(',', $data[0]->images) : ""; ?>
    <div class="images">
      <div class="bigImg">
        <div class="lds-ellipsis">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="zoom popup" data-href="<?php echo http_Site.'admin/upload/additionalImages/'.$images[0]; ?>">
          <span class="span1">
            <span class="span2"> </span>
          </span>
        </div>
        <img src="<?php echo http_Site.'admin/upload/additionalImages/'.$images[0]; ?>" class="active" alt="<?php echo ucwords($data[0]->project_name); ?>">
        <img src="" class="dummy" alt="">
      </div>
      <div class="carousel">
        <!--
        <div>
          <a href="javascript:;" data-img="<?php echo http_Site.'admin/upload/additionalImages/'.$data[0]->project_img; ?>" class="tabImg">
            <img src="<?php echo http_Site.'admin/upload/resizedAdditionalImages/'.$data[0]->project_img; ?>" alt="<?php echo ucwords($data[0]->project_name); ?>"> </a>
        </div>
        -->
        <?php if(count($images) > 0): ?>
        <?php for($i=0;$i<count($images);$i++): ?>
        <?php $small_images = ($data[0]->small_images != '') ? explode(',', $data[0]->small_images) : ""; //print_r($small_images); exit(); ?>
        <div>
          <a href="javascript:;" data-img="<?php echo http_Site.'admin/upload/additionalImages/'.$images[$i]; ?>" class="tabImg">
            <img src="<?php echo http_Site.'admin/upload/resizedAdditionalImages/'.$small_images[$i]; ?>" alt="<?php echo ucwords($data[0]->project_name); ?>"> </a>
        </div>
        <?php endfor; ?>
        <?php endif; ?> </div>
    </div>
    <div class="amenitiesTable mobile">
      <div class="row">
        <div class="col">
          <img src="<?php echo http_Site; ?>images/svg/bed.svg" alt=""> </div>
        <div class="col">
          <img src="<?php echo http_Site; ?>images/svg/bathroom.svg" alt=""> </div>
        <div class="col">
          <img src="<?php echo http_Site; ?>images/svg/floorarea.svg" alt=""> </div>
        <div class="col">
          <img src="<?php echo http_Site; ?>images/svg/landarea.svg" alt=""> </div>
        <div class="col">
          <img src="<?php echo http_Site; ?>images/svg/living.svg" alt=""> </div>
        <div class="col">
          <img src="<?php echo http_Site; ?>images/svg/car.svg" alt=""> </div>
      </div>
      <div class="row">
        <div class="col">
          <?php echo $data[0]->beds; ?> </div>
        <div class="col">
          <?php echo $data[0]->toilet; ?> </div>
        <div class="col">
          <?php echo $data[0]->carpet_area; ?> m2</div>
        <div class="col">
          <?php echo $data[0]->area; ?> m2</div>
        <div class="col">
          <?php echo $data[0]->seating; ?> </div>
        <div class="col">
          <?php echo $data[0]->parking; ?> </div>
      </div>
    </div>
    <p class="amenities desktop">
      <?php
          if($data[0]->beds != "") {
              ?>
        <span class="bed">
          <span class="img">
            <img src="<?php echo http_Site; ?>images/svg/bed.svg" alt=""> </span>
          <span class="txt">
            <?php echo $data[0]->beds; ?> </span>
        </span>
        <?php
          }
        ?>
          <?php
      if($data[0]->toilet != "") {
      ?>
            <span class="toilet">
              <span class="img">
                <img src="<?php echo http_Site; ?>images/svg/bathroom.svg" alt=""> </span>
              <span class="txt">
                <?php echo $data[0]->toilet; ?> </span>
            </span>
            <?php
       }
        ?>
              <?php
      if($data[0]->carpet_area != "") {
      ?>
                <span class="area">
                  <span class="img">
                    <img src="<?php echo http_Site; ?>images/svg/floorarea.svg" alt=""> </span>
                  <span class="txt">
                    <?php echo $data[0]->carpet_area; ?> m2</span>
                </span>
                <?php
      }
        ?>
                  <?php
      if($data[0]->area != "") {
      ?>
                    <span class="area">
                      <span class="img">
                        <img src="<?php echo http_Site; ?>images/svg/landarea.svg" alt=""> </span>
                      <span class="txt">
                        <?php echo $data[0]->area; ?> m2</span>
                    </span>
                    <?php
      }
        ?>
                      <?php
          if($data[0]->seating != "") {
              ?>
                        <span class="living">
                          <span class="img">
                            <img src="<?php echo http_Site; ?>images/svg/living.svg" alt=""> </span>
                          <span class="txt">
                            <?php echo $data[0]->seating; ?> </span>
                        </span>
                        <?php
}
?>
                        <?php
          if($data[0]->parking != "") {
              ?>
                          <span class="parking">
                            <span class="img">
                              <img src="<?php echo http_Site; ?>images/svg/car.svg" alt=""> </span>
                            <span class="txt">
                              <?php echo $data[0]->parking; ?> </span>
                          </span>
                          <?php
          }
        ?>
    </p>
    <div class="description">
      <?php echo $data[0]->description; ?> </div>
    <?php if(!empty($documentData)): ?>
    <div class="pdf">
      <?php foreach ($documentData as $key => $value) : ?>
      <div class="pdfbox">
        <a href="" data-href="<?php echo $value->link; ?>" class="pdfLink" target="_blank'">
          <div class="img">
            <img src="<?php echo http_Site; ?>images/pdf.svg" alt=""> </div>
          <div class="cont">
            <div class="title">
              <?php echo $value->docName; ?> </div>
            <div class="desc">
              <?php echo $value->description; ?> </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?> </div>
    <?php endif; ?> </section>
  <?php
    if($data[0]->project_map != "") {
        ?>
    <section class="map">
      <iframe src="<?php echo $data[0]->project_map; ?>" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <?php
    }
  ?>
      <section class="form">
        <div class="title">Enquire about this property</div>
        <div class="propertyId" id="propertyIdval">
          <?php echo ucwords($data[0]->project_name); ?> </div>
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
            <label for="number" class="mat-label">PHONE NUMBER</label>
            <input type="text" class="mat-input" id="number">
            <label for="" class="status"></label>
          </div>
          <div class="mat-div">
            <label for="number" class="mat-label">YOUR MESSAGE</label>
            <textarea class="mat-input" id="message" rows="7"></textarea>
            <label for="" class="status"></label>
          </div>
          <button id="submitProp">SEND MESSAGE</button>
          <label for="" class="success"></label>
        </div>
      </section>
      <section class="listing carou">
        <div class="carousel">
          <?php $moreProducts = Model_Base::query("Select * FROM projects where uniquename <> '{$_REQUEST["name"]}' and status = 1 ORDER BY id DESC LIMIT 10"); ?>
          <?php if(count($moreProducts) < 9): ?>
          <?php $moreProducts = Model_Base::query("Select * FROM projects where sold = 1 AND uniquename <> '{$_REQUEST["name"]}' and status = 1 ORDER BY id DESC LIMIT 10"); ?>
          <?php endif; ?>
          <?php if(!empty($moreProducts)): ?>
          <?php foreach ($moreProducts as $key => $value) : ?>
          <div>
            <div class="box">
              <a href="<?php echo http_Site.'details/'.$value->uniquename; ?>">
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
        <a href="/buy" class="button">SEE MORE</a>
      </section>
      <?php include_once("includes/modal.php"); ?>

      <?php include_once("includes/footer.html"); ?>
      <?php include_once("includes/common-scripts.html"); ?>
      <script type="text/javascript" src="<?php echo http_Site; ?>js/vendor/slick.min.js?v=<?php echo version; ?>"></script>
      <script type="text/javascript" src="<?php echo http_Site; ?>js/init.js?v=<?php echo version; ?>"></script>
      <script>
      DEFAULTVARS.init();
      </script>
      <?php include_once("includes/leadform.php"); ?>
</body>

</html>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>