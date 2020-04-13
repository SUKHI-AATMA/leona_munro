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
    } else {
        document.getElementById('error').innerHTML = '';
        document.getElementById('error').style.opacity = 0;
    }
    if (document.myForm.email.value == "") {
        document.getElementById('error').innerHTML = 'Please provide your email!';
        document.getElementById('error').style.opacity = 1;
        document.myForm.email.focus();
        return false;
    } else if (!validateEmail()) {
        return false;
    } else {
        document.getElementById('error').innerHTML = '';
        document.getElementById('error').style.opacity = 0;
    }

    if (document.myForm.message.value == "" || document.myForm.message.value == undefined) {
        document.getElementById('error').innerHTML = 'Please enter a message';
        document.getElementById('error').style.opacity = 1;
        document.myForm.message.focus();
        return false;
    } else {
        document.getElementById('error').innerHTML = '';
        document.getElementById('error').style.opacity = 0;
    }
    return true;
}

//Gallery Open image 
function openImg(imgs) {
    var expandImg = document.getElementById("bigImg");
    expandImg.src = imgs.dataset.img;
};

function scrollToListing() {
    var elmnt = document.getElementById("listing");
    window.scrollTo({
        'behavior': 'smooth',
        'top': elmnt.offsetTop
    });
}

function loadPropertyBox() {
    var listContent = '';
    var listIndex = 1;
    listingsData.forEach(function(key, value) {
        // console.log(key.id)
        if (listId.indexOf(key.id) == -1 && listIndex < 10) {

            listContent += `<a href="details.php?name=` + key.uniquename + `" data-interest="` + key.interest + `" data-bed="` + key.beds + `" data-bath="` + key.toilet + `" data-living="` + key.seating + `" data-garage="` + key.parking + `" class="activeProp">
                    <div class="propertyBox">
                        <div class="propertyImage"><img src="admin/upload/profileImage/` + key.project_img + `" alt="` + key.project_name + `"></div>
                        <div class="propertySaleType">` + key.interest + `</div>
                        <div class="propertyTitle">` + key.project_name + `</div>
                        <div class="propertyExtraDetails">
                            <p class="bed"><img src="images/svg/icon-bed.svg" alt=""><span>` + key.beds + `</span></p>
                            <p class="bath"><img src="images/svg/icon-bath.svg" alt=""><span>` + key.toilet + `</span></p>
                            <p class="garage"><img src="images/svg/icon-parking.svg" alt=""><span>` + key.parking + `</span></p>
                            <p class="living"><img src="images/svg/icon-living.svg" alt=""><span>` + key.seating + `</span></p>
                        </div>
                    </div>
                </a>`
            listId.push(key.id)
            listIndex++;
        }
    });
    if (listId.length == listingsData.length) {
        document.getElementById('loadMore').classList.add("hide");
    }
    document.getElementById('contentList').insertAdjacentHTML('beforeend', listContent);
}

function sortBySaleType(sortType) {
    var activeProps = document.querySelectorAll('.activeProp');
    var beds = document.getElementById('bed').value;
    var baths = document.getElementById('bath').value;
    var livings = document.getElementById('living').value;
    var garages = document.getElementById('garage').value;
    
    // listingsData contains all data

    var sortedList = [];

    listingsData.forEach(function(index, value){
        console.log(index);
        // if(index)
    });
    
    // var e = document.getElementById("sort");
    // var sortVal = e.options[e.selectedIndex].value;
    console.log(sortVal +' - '+ beds +' - '+ baths +' - '+ livings +' - '+ garages)
    // var restElems = document.querySelectorAll('[data-interest]');
    // switch (sortType) {
    //     case 'sort':
    //         var e = document.getElementById("sort");
    //         var sortVal = e.options[e.selectedIndex].value;
    //         // var elems = activeProps.querySelectorAll('[data-interest="' + sortVal + '"]');
    //         // restElems.forEach(function(index, value) {
    //         //     //     index.classList.add('hide');
    //         //     //     setTimeout(function(){
    //         //     // },200);
    //         //     // index.classList.add('hide');
    //         //     // console.log(value)
    //         // });
    //         activeProps.forEach(function(index, value) {
    //             // setTimeout(function(){
    //             // if(index.a)
    //             console.log(index.getAttribute('data-interest'));
    //             if(index.getAttribute('data-interest') == sortVal)
    //             {
    //                 index.style.display = 'inline';
    //                 index.classList.add('activeProp')
    //             }
    //             else
    //             {
    //                 index.style.display = 'none';
    //                 index.classList.remove('activeProp')
    //             }
    //             //     setTimeout(function(){
    //             //         index.classList.remove('hide');

    //             //     },120)
    //             // },350);// index.classList.add('hide');
    //             // console.log(value)
    //         });
    //         break;
    //     case 'bed':
    //         // console.log(rangeValue);
    //         var elems = document.querySelectorAll('[data-bed="' + rangeValue + '"]');
    //         restElems.forEach(function(index, value) {
    //             //     index.classList.add('hide');
    //             //     setTimeout(function(){
    //             index.style.display = 'none';
    //             index.classList.remove('activeProp')
    //             // },200);
    //             // index.classList.add('hide');
    //             // console.log(value)
    //         });
    //         elems.forEach(function(index, value) {
    //             // setTimeout(function(){
    //             index.style.display = 'inline';
    //             index.classList.add('activeProp');
    //             //     setTimeout(function(){
    //             //         index.classList.remove('hide');

    //             //     },120)
    //             // },350);// index.classList.add('hide');
    //             // console.log(value)
    //         });
    //         break;
    //     case 'bath':
    //         // code block
    //         break;
    //     case 'living':
    //         // code block
    //         break;
    //     case 'garage':
    //         // code block
    //         break;
    //     default:
    //         // code block
    // }


}


// loadPropertyBox();