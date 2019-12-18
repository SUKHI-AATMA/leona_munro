<?php if((!empty($_REQUEST))&& array_key_exists('name', $_REQUEST)): ?>
<?php if($_REQUEST['name'] != ''): ?>
<?php include 'core.php'; ?>
<?php include 'model_base.php'; ?>
<?php $data = Model_Base::query("select * from projects where uniquename = '{$_REQUEST['name']}'"); ?>
<?php if(!empty($data)): ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title>Leona Munro</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="<?php echo http_Site; ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo http_Site; ?>css/vendor/slick.css" />
  <link rel="shortcut icon" type="image/png" href="<?php echo http_Site; ?>images/favicon.png"> </head>

<body>
  <?php include_once("includes/header.html"); ?>
  <section class="details">
    <h1>123 Streetname Street, Suburb</h1>
    <p class="amenities">
      <span class="bed">
        <span class="img">
          <img src="images/ico-bed.svg" alt=""> </span>
        <span class="txt">4</span>
      </span>
      <span class="toilet">
        <span class="img">
          <img src="images/ico-washroom.svg" alt=""> </span>
        <span class="txt">2</span>
      </span>
      <span class="area">
        <span class="img">
          <img src="images/ico-area.svg" alt=""> </span>
        <span class="txt">170m2</span>
      </span>
      <span class="living">
        <span class="img">
          <img src="images/ico-living.svg" alt=""> </span>
        <span class="txt">1</span>
      </span>
      <span class="parking">
        <span class="img">
          <img src="images/ico-car.svg" alt=""> </span>
        <span class="txt">2</span>
      </span>
    </p>
    <div class="images">
      <div class="bigImg">
        <img src="<?php echo http_Site; ?>images/big-image.jpg" class="active" alt="">
        <img src="<?php echo http_Site; ?>images/big-image.jpg" alt=""> </div>
      <div class="carousel">
        <div>
          <a href="javascript:;" data-img="big-image.jpg">
            <img src="<?php echo http_Site; ?>images/thumbnail.jpg" alt=""> </a>
        </div>
        <div>
          <a href="javascript:;" data-img="big-image.jpg">
            <img src="<?php echo http_Site; ?>images/thumbnail.jpg" alt=""> </a>
        </div>
        <div>
          <a href="javascript:;" data-img="big-image.jpg">
            <img src="images/thumbnail.jpg" alt=""> </a>
        </div>
        <div>
          <a href="javascript:;" data-img="big-image.jpg">
            <img src="images/thumbnail.jpg" alt=""> </a>
        </div>
        <div>
          <a href="javascript:;" data-img="big-image.jpg">
            <img src="images/thumbnail.jpg" alt=""> </a>
        </div>
        <div>
          <a href="javascript:;" data-img="big-image.jpg">
            <img src="images/thumbnail.jpg" alt=""> </a>
        </div>
      </div>
    </div>
    <div class="description">
      <p>This wonderfully charming 3 double bedroom home sits proudly elevated and perfectly positioned for hours of sun. </p>
      <p>Enter through entrancing front double gates that sit proud from the street and are the first clue upon arrival that this is a fully fenced and very safe property. Walking up the drive you will feel a sense of calm and serenity from the beautiful old oak trees that shelter the first patch of lawn, perfect for many family activities and fun. Notice the off-street parking for at least 4 cars as well as storage galore that comes with a large basement/workshop area – perfect for those inclined to tinker! </p>
      <p>Continuing up the landscaped stone stairs you will be wooed by the beautifully established gardens (recently groomed by substantial arborist works) that surround this property, which offer both serene privacy and a lovely outlook.</p>
      <p>A real sense of home will be felt as you enter through the character wooden front door and head through to the modern and spacious family living area, with feature gas fire as a center piece and heating source for this space. The tidy family sized kitchen looks over the dining area and out to the gardens, French doors create the option of open or separate spaces between the living and dining. Recent renovations to this home have been completed to a very high standard and include new paint throughout, two new Fujitsu heat pumps, gas hot water system and a full electrical upgrade. A new and beautifully luxurious bathroom with separate shower and free standing bath is also part of my client’s recent hard work and is a real centrally located asset to this home. </p>
      <p>One of my favorite things about this property is the abundance of beautiful garden areas; whether you want to pick some veggies for dinner, choose the most delicious looking apples off the tree, kick a ball on the lawn or simple sit and read a book in privacy this 1500m2 plus back yard gives you and your family all those options. Bonus too is an extra utility room perfect for extra space or storage options.</p>
      <p>A family home with such tranquil settings and quality renovations are seldom found only minutes from town. This is truly something special and I suggest you inquire.</p>
      <p>
    </div>
    <div class="pdf">
      <div class="pdfbox">
        <a href="javascript:;">
          <div class="img">
            <img src="images/ico-pdf.png" alt=""> </div>
          <div class="cont">
            <div class="title">House PDF 1</div>
            <div class="desc">Donec facilisis tortor ut lorem ipsum dolor sit amet...</div>
          </div>
        </a>
      </div>
      <div class="pdfbox">
        <a href="javascript:;">
          <div class="img">
            <img src="images/ico-pdf.png" alt=""> </div>
          <div class="cont">
            <div class="title">House PDF 1</div>
            <div class="desc">Donec facilisis tortor ut lorem ipsum dolor sit amet...</div>
          </div>
        </a>
      </div>
      <div class="pdfbox">
        <a href="javascript:;">
          <div class="img">
            <img src="images/ico-pdf.png" alt=""> </div>
          <div class="cont">
            <div class="title">House PDF 1</div>
            <div class="desc">Donec facilisis tortor ut lorem ipsum dolor sit amet...</div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="form">
    <div class="title">Enquire about this property</div>
    <div class="propertyId">Property Name / ID</div>
    <div class="wrap">
      <div class="mat-div">
        <label for="name" class="mat-label">YOUR NAME</label>
        <input type="text" class="mat-input" id="name"> </div>
      <div class="mat-div">
        <label for="email" class="mat-label">VALID EMAIL</label>
        <input type="text" class="mat-input" id="email"> </div>
      <div class="mat-div">
        <label for="number" class="mat-label">PHONE NUMBER</label>
        <input type="text" class="mat-input" id="number"> </div>
      <button>SEND MESSAGE</button>
    </div>
  </section>
  <section class="listing carou">
    <div class="carousel">
      <div>
        <div class="box">
          <div class="img">
            <img src="images/listing-dummy.png" alt=""> </div>
          <div class="cont">
            <div class="stName">123 Streetname Street </div>
            <div class="amenities">
              <span class="bed">2 </span>
              <span class="toilet">2 </span>
              <span class="area">1500sqm </span>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="box">
          <div class="img">
            <img src="images/listing-dummy.png" alt=""> </div>
          <div class="cont">
            <div class="stName">123 Streetname Street </div>
            <div class="amenities">
              <span class="bed">2 </span>
              <span class="toilet">2 </span>
              <span class="area">1500sqft </span>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="box">
          <div class="img">
            <img src="images/listing-dummy.png" alt=""> </div>
          <div class="cont">
            <div class="stName">123 Streetname Street </div>
            <div class="amenities">
              <span class="bed">2 </span>
              <span class="toilet">2 </span>
              <span class="area">1500sqft </span>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="box">
          <div class="img">
            <img src="<?php echo http_Site; ?>images/listing-dummy.png" alt=""> </div>
          <div class="cont">
            <div class="stName">123 Streetname Street </div>
            <div class="amenities">
              <span class="bed">2 </span>
              <span class="toilet">2 </span>
              <span class="area">1500sqm </span>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="box">
          <div class="img">
            <img src="<?php echo http_Site; ?>images/listing-dummy.png" alt=""> </div>
          <div class="cont">
            <div class="stName">123 Streetname Street </div>
            <div class="amenities">
              <span class="bed">2 </span>
              <span class="toilet">2 </span>
              <span class="area">1500sqft </span>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="box">
          <div class="img">
            <img src="<?php echo http_Site; ?>images/listing-dummy.png" alt=""> </div>
          <div class="cont">
            <div class="stName">123 Streetname Street </div>
            <div class="amenities">
              <span class="bed">2 </span>
              <span class="toilet">2 </span>
              <span class="area">1500sqft </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button>SEE MORE</button>
  </section>
  <?php include_once("includes/footer.html"); ?>
  <?php include_once("includes/common-scripts.html"); ?>
  <script type="text/javascript" src="<?php echo http_Site; ?>js/vendor/slick.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.carousel').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 4,
      slidesToScroll: 1,
      nextArrow: '<img src="images/arrow.svg" class="next" alt="Next">',
      prevArrow: '<img src="images/arrow.svg" class="prev" alt="Previous">',
      responsive: [{
          breakpoint: 1400,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
          }
        }, {
          breakpoint: 1100,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
          }
        }, {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  });
  </script>
  <script>
  $(window).on('load', function() {
    $('.bigImg').height($('.bigImg img.active').outerHeight(true))
  }).on('resize', function() {
    $('.bigImg').height($('.bigImg img.active').outerHeight(true))
  });
  $(".mat-input").focus(function() {
    $(this).parent().addClass("is-active is-completed");
  });
  $(".mat-input").focusout(function() {
    if ($(this).val() === "") {
      $(this).parent().removeClass("is-completed");
      $(this).parent().removeClass("is-active");
      $(this).parent().addClass("is-error");
    } else {
      $(this).parent().addClass("is-completed");
      $(this).parent().addClass("is-active");
      $(this).parent().removeClass("is-error");
    }
  })
  </script>
  <!-- <script src="js/index.js"></script>

    <script>

    INDEX.init()

    </script> -->
</body>

</html>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>