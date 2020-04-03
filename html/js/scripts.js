var mobile = 'false',
    doc = document,
    win = window,
    ww = win.innerWidth || doc.documentElement.clientWidth || doc.body.clientWidth,
    fw = getFW(ww),
    initFns = {},
    sliders = new Object(),
    bodyTag = document.getElementsByTagName('body')[0];

function getFW(width) {
    var sm = 400,
        md = 900,
        lg = 1400;
    return width < sm ? 150 : width >= sm && width < md ? 200 : width >= md && width < lg ? 300 : 400;
}
window.addEventListener('resize', function() { fw = getFW(ww); });
var options = {
    'testimonial': {
        container: '',
        items: 2,
        slideBy: 1,
        mouseDrag: true,
        controlsText: ['<img src="images/carousel-arrow-left.svg" width="30px" height="30px">', '<img src="images/carousel-arrow-right.svg" width="30px" height="30px">'],
    },
    'featured': {
        container: '',
        items: 3,
        slideBy: 1,
        mouseDrag: true,
        controlsText: ['<img src="images/carousel-arrow-left.svg" width="30px" height="30px">', '<img src="images/carousel-arrow-right.svg" width="30px" height="30px">'],
    },
    'gallery': {
        axis: "vertical",
        container: '',
        items: 2,
        slideBy: 1,
        mouseDrag: true,
        controlsText: ['<img src="images/carousel-arrow-left.svg" width="30px" height="30px">', '<img src="images/carousel-arrow-right.svg" width="30px" height="30px">'],
        controlsPosition: "bottom"
    }
};
for (var i in options) {
    var item = options[i];
    item.container = '#' + i;
    if (doc.querySelector(item.container)) {
        // console.log(item.container);
        sliders[i] = tns(options[i]);
    } else if (i.indexOf('responsive') >= 0) {
        if (isTestPage && initFns[i]) { initFns[i](); }
    }
}

function validateEmail() {
    var emailID = document.myForm.email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");

    if (atpos < 1 || (dotpos - atpos < 2)) {
        document.getElementById('error').innerHTML = 'Please enter correct email ID';
        document.getElementById('error').style.opacity = 1;
        document.myForm.email.focus();
        // console.log(123);
        return false;
    } else {
        // console.log(1234);

        return true;
    }
}

function validate() {

    if (document.myForm.name.value == "") {
        document.getElementById('error').innerHTML = "Please provide your name!";
        document.getElementById('error').style.opacity = 1;
        document.myForm.name.focus();
        return false;
    }
    else
    {
        document.getElementById('error').innerHTML = '';
        document.getElementById('error').style.opacity = 0;
    }
    if (document.myForm.email.value == "") {
        document.getElementById('error').innerHTML = 'Please provide your email!';
        document.getElementById('error').style.opacity = 1;
        document.myForm.email.focus();
        return false;
    } else if(!validateEmail()) {
        return false;
    }
    else {
        document.getElementById('error').innerHTML = '';
        document.getElementById('error').style.opacity = 0;
    }

    if (document.myForm.message.value == "" || document.myForm.message.value == undefined) {
        document.getElementById('error').innerHTML = 'Please enter a message';
        document.getElementById('error').style.opacity = 1;
        document.myForm.message.focus();
        return false;
    }
    else {
        document.getElementById('error').innerHTML = '';
        document.getElementById('error').style.opacity = 0;
    }
    return true;
}

//Gallery Open image 
if(bodyTag.className == 'detailsPg')
{
    function openImg(imgs){
        var expandImg = document.getElementById("bigImg");
        expandImg.src = imgs.src;
    };
}