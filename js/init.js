var sortby = "";
var VALIDATIONS = {
  validateEmail: function(input) {
    var email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return email.test(input);
  },
  validateTeleNumber: function(input) {
    var phoneno = /^\d{10}$/;
    return phoneno.test(input);
  },
  validateName: function(input) {
    var name = /^[a-zA-Z .]{2,30}$/;
    return name.test(input);
  },
  validatePassword: function(input) {
    var password = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    return password.test(input);
  },
  validateConfirmPassword: function(input1, input2) {
    return (input1 == input2);
  },
  validateNumber: function(input) {
    var num = /^ *[0-9]+ *$/;
    return num.test(input);
  },
  validatePAN: function(input) {
    var pan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
    return pan.test(input);
  }
}
var DEFAULTVARS = {
  winWidth: $(window).width(),
  winWidthOuter: $(window).outerWidth(),
  winHei: $(window).height(),
  mobBreakpoint: 768,
  tabBreakPoint: 990,
  init: function() {
    DEFAULTVARS.events();
    var imageWidth = $('.bigImg img.active').outerWidth(),
      imageHeight = $('.bigImg img.active').outerHeight();
    if (imageWidth / imageHeight >= 1) {
      $('.bigImg img.active').css({ width: '100%' })
    } else if (imageWidth / imageHeight < 1) {
      $('.bigImg img.active').css({ height: '100%' })
    }
    //Siddharth Vinchurkar https://leonamunro.co.nz/#access_token=31945929.6f87b93.aa42e8db1ee34afa950971253023c208
    if ($('#instafeed').length) {
      var userFeed = new Instafeed({
        get: 'user',
        userId: '4063023554',
        accessToken: '4063023554.bea8162.856fe463f1a24eaaa9e55ac818390f96',
        resolution: 'standard_resolution',
        limit: 20,
        template: '<div><a href="{{link}}" target="_blank"><img src="{{image}}" /><span class="overlay"><span>{{likes}} Likes</span> <span>{{comments}} Comments</span></span></a></div>',
        after: function() {
          $('#instafeed').slick({
            arrows: true,
            dots: false,
            infinite: true,
            speed: 300,
            autoplay: false,
            slidesToShow: 5,
            slidesToScroll: 5,
            lazyLoad: 'ondemand',
            nextArrow: '<img src="images/arrow.svg" class="next" alt="Next">',
            prevArrow: '<img src="images/arrow.svg" class="prev" alt="Previous">',
            responsive: [{
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: false
                }
              }, {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: false
                }
              }, {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              }, {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  centerMode: true,
                  arrows: false
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });
        }
      });
      userFeed.run();
    }
    if ($('.featuredCarousel').length) {
      $('.featuredCarousel').slick({
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
              slidesToScroll: 1,
              centerMode: true,
              arrows: false
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    }
    if ($('.carousel').length) {
      $('.carousel').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: '<img src="../images/arrow.svg" class="next" alt="Next">',
        prevArrow: '<img src="../images/arrow.svg" class="prev" alt="Previous">',
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
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            arrows: false
          }
        }]
      });
    }
    if ($('.testimonialCarou').length) {
      $('.testimonialCarou').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000
      });
    }
  },
  events: function() {
    $(document).ready(function(){
      ($('#productListingDiv .box').length > 9) ? $('#btnLoadMore').show() : $('#btnLoadMore').hide();
    }).on("focus", ".mat-input", function() {
      $(this).parent().addClass("is-active is-completed");
    }).on("focusout", ".mat-input", function() {
      if ($(this).val() === "") {
        $(this).parent().removeClass("is-completed");
        $(this).parent().removeClass("is-active");
        $(this).parent().addClass("is-error");
      } else {
        $(this).parent().addClass("is-completed");
        $(this).parent().addClass("is-active");
        $(this).parent().removeClass("is-error");
      }
    }).on("click", ".hamburger", function() {
      if ($(this).hasClass('is-active')) {
        console.log(1)
        $(this).siblings('.mobileNav').css({ right: '150%' });
      } else {
        console.log(2)
        $(this).siblings('.mobileNav').css({ right: '7%' });
      }
      $(this).toggleClass('hamburger--slider is-active');
    }).on('click', '#submit', function(e) {
      e.preventDefault();
      DEFAULTVARS.formSubmit();
    }).on('click', '.tabImg', function() {
      if ($(window).width() > 767) {
        // $('.bigImg').addClass('loading');
        var imgurl = $(this).attr('data-img');
        $.ajax({
          url: imgurl,
          success: function(result) {
            $('.bigImg img.active').fadeOut('100', function() {
              $('.bigImg img.active').attr('src', '');
              $('.bigImg img.dummy').attr('src', imgurl);
              setTimeout(function() {
                var imageWidth = $('.bigImg img.dummy').outerWidth(),
                  imageHeight = $('.bigImg img.dummy').outerHeight();
                console.log($('.bigImg img.dummy').attr('src'));
                if (imageWidth / imageHeight >= 1) {
                  $('.bigImg img.active').css({ width: '100%', height: 'auto' })
                } else if (imageWidth / imageHeight < 1) {
                  $('.bigImg img.active').css({ width: 'auto', height: '100%' })
                }
                $('.bigImg .zoom').attr({ 'data-href': imgurl });
                $('.bigImg img.active').attr({ 'src': imgurl }).fadeIn('500');
              }, 500)
              // $('.bigImg').removeClass('loading');
            });
          }
        });
      } else {
        // var imgurl = $(this).attr('data-img');
        // $.ajax({
        //   url: imgurl,
        //   success: function(result) {
        //     $('.modalBody img').attr('src',imgurl).attr('alt',$(this).attr('data-alt'));
        //     $('.modal.zoomPopup').fadeIn(500);
        //     // $('.bigImg img.active').fadeOut('100', function() {
        //     //   // $('.bigImg .zoom').attr({ 'data-href': imgurl });
        //     //   // $('.bigImg img.active').attr({ 'src': imgurl }).fadeIn('500');
        //     //   // $('.bigImg').removeClass('loading');
        //     // });
        //   }
        // });
      }
    }).on('click', '#submitProp', function(e) {
      e.preventDefault();
      DEFAULTVARS.formSubmitProp();
    }).on('click', "#btnSubscribeEmail", function(e) {
      e.preventDefault();
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      var subscribeFirstName = $("#txtFirstSubscribe").val();
      var subscribeLastName = $("#txtLastSubscribe").val();
      var subscribeEmail = $("#txtEmailSubscribe").val();
      if (subscribeFirstName != "") {} else {
        alert('Enter First Name');
        $("#txtFirstSubscribe").focus();
        return false;
      }
      if (subscribeLastName != "") {} else {
        alert('Enter Last Name');
        $("#txtLastSubscribe").focus();
        return false;
      }
      if (subscribeEmail == "") {
        alert('Enter Email Address');
        $("#txtEmailSubscribe").focus();
        return false;
      } else if (reg.test(subscribeEmail) != true) {
        alert('Invalid Email Address');
        return false;
      } else {}
      $.ajax({
        "url": urlpath + "includes/subscribe.php?v="+version,
        "type": "POST",
        "async": false,
        "data": {
          subscribeFirstName: subscribeFirstName,
          subscribeLastName: subscribeLastName,
          subscribeEmail: subscribeEmail
        },
        "success": function(data) {
          var data = JSON.parse(data);
          if (data.status == "subscribed") {
            $('#btnSubscribeEmail').siblings('label.success').html('You are subscribed to the list.').css({ 'opacity': 1 })
          } else if(data.status == "400" && data.title=="Member Exists") {
            $('#btnSubscribeEmail').siblings('label.success').html('You have already subscribed to the list.').css({ 'opacity': 1 })
          }
        }
      });
    }).on("click", "#btnLoadMore", function(e) {
      e.preventDefault();
      //$(this).remove();
      var count = $(".box").length;
      console.log(sortby);
      console.log(count);
      if (count > 0) {
        $.ajax({
          "url": urlpath + "admin/action/actionLoadMore.php?v="+version,
          "type": "POST",
          "data": {
            count: count,
            sortby: sortby
          },
          "success": function(data) {
            console.log(data);
            var data = JSON.parse(data);
            if (data.status == "success") {
              if(data.loadMore == "success") {
                 $("#btnLoadMore").show();
              } else if(data.loadMore == "failed") {
                 $("#btnLoadMore").hide();
              }
              $("#productListingDiv").append(data.msg)
            } else {
              //$("#btnLoadMore").hide();
            }
          }
        });
      }
    }).on('click', ".selectSortBy", function(e) {
      e.preventDefault();
      sortby = $(this).data("select");
      if (sortby != "") {
        $.ajax({
          "url": urlpath + "admin/action/actionSortBy.php?v="+version,
          "type": "POST",
          "async": false,
          "data": {
            sortby: sortby
          },
          "success": function(data) {
            var data = JSON.parse(data);
            if (data.status == "success") {
              $("#productListingDiv").html('');
              $("#btnLoadMore").hide();
              $("#productListingDiv").html(data.msg);
            } else {
              $("#btnLoadMore").hide();
            }
          }
        });
      }
    }).on('click', '.methods ul li a', function(e) {
      e.preventDefault();
      $(this).parent('li').addClass('active').siblings('li').removeClass('active')
      $('.tabCont div').slideUp(300);
      $('.tabCont div').eq($(this).parent('li').index()).delay(300).slideDown(300)
    }).on('click', '.modal .close', function() {
      $('.modal').fadeOut(500);
    }).on('click', '.popup', function(e) {
      e.preventDefault();
      $('.modalBody img').attr('src', $(this).attr('data-href')).attr('alt', $(this).attr('data-alt'));
      $('.modal.zoomPopup').fadeIn(500);
      if ($('.modalBody img').height() > $('.modalBody').height()) { 
        $('.modalBody img').css({ width: 'auto', height: $('.modalBody').height() });
      }
      if (location.pathname == '/sell') { 
        if($(window).width() > 768)
        {
          $('.modalBody').css({ height: '90%' }).find('img').css({ height: '100%' });
        }
        else
          {  $('.modalBody').css({ height: 'auto' }).find('img').css({ width: '100%',height: 'auto' });}
      }
    }).on('click', '.accordian h3', function() {
      $(this).addClass('active').siblings('h3').removeClass('active');
      $(this).next('div').slideDown(500).siblings('div').slideUp(500);
    });
  },
  validateEmail: function(input) {
    var email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return email.test(input);
  },
  formSubmit: function() {
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
    if (!name) {
      $("#name").focus().parent().addClass('is-error').children('label.status').html("Please fill the name field").show();
      return false;
    } else {
      $("#name").parent().removeClass('is-error').children('label.status').html('').hide();
    }
    if (!email) {
      $("#email").focus().parent().addClass('is-error').children('label.status').html("Please fill the email field").show();
      return false;
    } else if (!DEFAULTVARS.validateEmail(email)) {
      $("#email").focus().parent().addClass('is-error').children('label.status').html("Please enter valid email id").show();
      return false;
    } else {
      $("#email").parent().removeClass('is-error').children('label.status').html('').hide();
    }
    if (!message) {
      $("#message").focus().parent().addClass('is-error').children('label.status').html("Please enter a message").show();
      return false;
    } else {
      $("#message").parent().removeClass('is-error').children('label.status').html('').hide();
    }
    data = {
      name: name,
      email: email,
      message: message,
    };
    $('#submit').attr('disabled', true).addClass('send').val('Sending...');
    (location.pathname !='/sell') ? emailURL = "includes/email.php?v="+version : emailURL = "includes/email-sell.php?v="+version;
    $.ajax({
      type: "POST",
      url: emailURL,
      data: data,
      success: function(response) {
        $('#submit').attr('disabled', false).removeClass('send').val('SEND MESSAGE');
        $('label.success').html("THANK YOU! We will get in touch with you shortly.").css({ 'opacity': 1 });
      },
      error: function(response) {
        $('#submit').attr('disabled', false).removeClass('send').val('SEND MESSAGE');
        alert('There was a problem. Please try again');
      },
      complete: function(response) {}
    });
  },
  formSubmitProp: function() {
    var name = $("#name").val();
    var mobile = $("#number").val();
    var email = $("#email").val();
    var message = $("#message").val();
    var propertyIdval = $('#propertyIdval').text();
    if (!name) {
      $("#name").focus().parent().addClass('is-error').children('label.status').html("Please fill the name field").show();
      return false;
    } else {
      $("#name").parent().removeClass('is-error').children('label.status').html('').hide();
    }
    if (!email) {
      $("#email").focus().parent().addClass('is-error').children('label.status').html("Please fill the email field").show();
      return false;
  } else if (!DEFAULTVARS.validateEmail(email)) {
      $("#email").focus().parent().addClass('is-error').children('label.status').html("Please enter valid email id").show();
      return false;
    } else {
      $("#email").parent().removeClass('is-error').children('label.status').html('').hide();
    }
    if (!mobile) {
      $("#number").focus().parent().addClass('is-error').children('label.status').html("Please fill the phone no field").show();
      return false;
    } else {
      $("#number").parent().removeClass('is-error').children('label.status').html('').hide();
    }
    if (!message) {
      $("#message").focus().parent().addClass('is-error').children('label.status').html("Please enter a message").show();
      return false;
    } else {
      $("#message").parent().removeClass('is-error').children('label.status').html('').hide();
    }
    console.log(1);
    data = {
      name: name,
      mobile: mobile,
      email: email,
      message: message,
      propertyIdval: propertyIdval,
    };
    $('#submitProp').attr('disabled', true).addClass('send').val('Sending...');
    $.ajax({
      type: "POST",
      url: "includes/email-buy.php?v="+version,
      data: data,
      success: function(response) {
        $('#submitProp').attr('disabled', false).removeClass('send').val('SEND MESSAGE');
        $('label.success').html("THANK YOU! We will get in touch with you shortly.").css({ 'opacity': '1' });
      },
      error: function(response) {
        $('#submitProp').attr('disabled', false).removeClass('send').val('SEND MESSAGE');
        alert('There was a problem. Please try again');
      },
      complete: function(response) {}
    });
  }
};
var INDEX = {}