var mobile = 'false',
    doc = document,
    win = window,
    ww = win.innerWidth || doc.documentElement.clientWidth || doc.body.clientWidth,
    isMobile = (ww > 768) ? false : true,
    fw = getFW(ww),
    initFns = {},
    sliders = new Object(),
    bodyTag = document.getElementsByTagName('body')[0];
var path = window.location.pathname;
var pgName = path.split("/").pop();
// console.log( page );

function getFW(width) {
    var sm = 400,
        md = 900,
        lg = 1400;
    return width < sm ? 150 : width >= sm && width < md ? 200 : width >= md && width < lg ? 300 : 400;
}
window.addEventListener('resize', function() { fw = getFW(ww); });

if (isMobile) {
    var navi = doc.getElementsByTagName('nav')[0];
    navi.addEventListener("click", function(e) {
        navi.classList.contains('active') ? navi.classList.remove('active') : navi.classList.add('active');
    });
    if (document.getElementById('sort') != null) {
        document.getElementById('sort').addEventListener('click', function() {
            document.getElementById('sortDiv').style.display = 'block';
            document.getElementById('sort').style.display = 'none';
        });
    }
}

var options = (isMobile) ? ({
    'testimonial': {
        container: '',
        items: 1,
        slideBy: 1,
        mouseDrag: true,
        controls: true,
        controlsText: ['<img src="images/carousel-arrow-left.svg" width="30px" height="30px">', '<img src="images/carousel-arrow-right.svg" width="30px" height="30px">'],
    },
    'featured': {
        container: '',
        items: 1,
        slideBy: 1,
        mouseDrag: true,
        controls: true,
        controlsText: ['<img src="images/carousel-arrow-left.svg" width="30px" height="30px">', '<img src="images/carousel-arrow-right.svg" width="30px" height="30px">'],
    },
    'gallery': {
        // axis: "horizontal",
        container: '',
        items: 1,
        slideBy: 1,
        mouseDrag: true,
        controls: true,
        controlsText: ['<img src="images/carousel-arrow-left.svg" width="30px" height="30px">', '<img src="images/carousel-arrow-right.svg" width="30px" height="30px">'],
    }
}) : ({
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
        gutter: 30,
        controlsText: ['<img src="images/carousel-arrow-left.svg" width="30px" height="30px">', '<img src="images/carousel-arrow-right.svg" width="30px" height="30px">'],
        controlsPosition: "bottom",
    }
});

window.addEventListener("load", function() {
    if(document.getElementsByClassName('featured').length || document.getElementsByClassName('testimonials').length)
    {
        initSlider();
    }
    var pgNm = document.getElementsByTagName('body')[0].getAttribute('data-page');
    document.getElementById('pageNm').value = pgNm;
    // if(docuemtn.getElementsByClassName('thumbs'))
    // {
    //     var slides = document.getElementsByClassName('tns-slide-active')[0]
    //    vardocuemtn.getElementsByClassName('thumbs')[0] = slides.outerHeight();
    // }
    
});

function initSlider() {
    for (var i in options) {
        var item = options[i];
        item.container = '#' + i;
        // console.log(doc.querySelector(item.container));
        if (doc.querySelector(item.container)) {
            // console.log(item.container);
            sliders[i] = tns(options[i]);
        } else if (i.indexOf('responsive') >= 0) {
            // if (isTestPage && initFns[i]) { initFns[i](); }
        }
        if(document.getElementsByClassName('thumbs').length && !isMobile)
        {
            var slidesList = document.querySelectorAll('.slide'),
            thumbs = document.getElementsByClassName('thumbs')[0],
            slideHeight = thumbs.offsetHeight /2;
            slidesList.forEach(function(elem){
                elem.setAttribute('style',"height:"+slideHeight+'px')
            });
        }
        if(document.getElementsByClassName('featured').length)
        {
            var slideNos = document.getElementsByClassName('featured')[0].getAttribute('data-slides');
            if(slideNos < 4 && !isMobile)
            {
                document.getElementsByClassName('featured')[0].classList.add('lessSlides');
            }
        }
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
    expandImg.style.opacity = '0';
    setTimeout(function() {
        expandImg.src = imgs.dataset.img;

        // console.log(loaded);
        var loadedInterval = setInterval(function() {
            var loaded = expandImg.complete;
            if (loaded) {
                expandImg.style.opacity = '1';
                clearInterval(loadedInterval);
            }
            console.log(loaded);
        }, 100);

    }, 550);
};

function scrollToListing() {
    var elmnt = document.getElementById("listing");
    window.scrollTo({
        'behavior': 'smooth',
        'top': elmnt.offsetTop
    });
}

function loadPropertyBox(dataList) {
    var listContent = '';
    var listIndex = 1;
    // console.log(JSON.parse(dataList));
    if (dataList.length > 0) {
        dataList.forEach(function(key, value) {
            // console.log(key.id)
            if (listId.indexOf(key.id) == -1 && listIndex < 10) {

                listContent += `<a href="details.php?name=` + key.uniquename + `" data-interest="` + key.interest + `" data-bed="` + key.beds + `" data-bath="` + key.toilet + `" data-living="` + key.seating + `" data-garage="` + key.parking + `" class="activeProp">
                        <div class="propertyBox">
                            <div class="propertyImage"><img class="lazyload" data-src="` + urlpath + `admin/upload/profileImage/` + key.project_img + `" alt="` + key.project_name + `"></div>
                            <div class="propertySaleType">` + key.interest + `</div>
                            <div class="propertyTitle">` + key.project_name + `</div>
                            <div class="propertyExtraDetails">
                                <p class="bed"><img class="lazyload" data-src="` + urlpath + `images/svg/icon-bed.svg" alt=""><span>` + key.beds + `</span></p>
                                <p class="bath"><img class="lazyload" data-src="` + urlpath + `images/svg/icon-bath.svg" alt=""><span>` + key.toilet + `</span></p>
                                <p class="garage"><img class="lazyload" data-src="` + urlpath + `images/svg/icon-parking.svg" alt=""><span>` + key.parking + `</span></p>
                                <p class="living"><img class="lazyload" data-src="` + urlpath + `images/svg/icon-living.svg" alt=""><span>` + key.seating + `</span></p>
                            </div>
                        </div>
                    </a>`
                listId.push(key.id)
                listIndex++;
            }
        });
        if (listId.length == dataList.length) {
            if(document.getElementById('loadMore')) {
                document.getElementById('loadMore').classList.add("hide");
            }
        }
        document.getElementById('contentList').insertAdjacentHTML('beforeend', listContent);
    } else {
        document.getElementById('noProperty').classList.add('show');
        if(document.getElementById('loadMore')) {
            document.getElementById('loadMore').classList.add("hide");
        }
    }
    onScrollDiv();
}

function clearSearch() {
    document.getElementById('bed').value = 0;
    document.getElementById('bed').style.background = 'rgb(233, 233, 233)';
    document.getElementById('bath').value = 0;
    document.getElementById('bath').style.background = 'rgb(233, 233, 233)';
    document.getElementById('living').value = 0;
    document.getElementById('living').style.background = 'rgb(233, 233, 233)';
    document.getElementById('garage').value = 0;
    document.getElementById('garage').style.background = 'rgb(233, 233, 233)';
    listId = [];
    document.getElementById('contentList').innerHTML = '';
    if(document.getElementById('loadMore'))
    {
        document.getElementById('loadMore').classList.remove("hide");
    }
    document.getElementById('noProperty').classList.remove('show')
    loadPropertyBox(listingsData)
}

// Get the input field
var searchInput = document.getElementById("autoComp");
if (searchInput) {
    // Execute a function when the user releases a key on the keyboard
    searchInput.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            document.getElementById("searchBtn").click();
        }
    });
}

function sortBySaleType(sortType) {
    var activeProps = document.querySelectorAll('.activeProp');
    var beds = parseInt(document.getElementById('bed').value);
    var baths = parseInt(document.getElementById('bath').value);
    var livings = parseInt(document.getElementById('living').value);
    var garages = parseInt(document.getElementById('garage').value);
    var propName = document.getElementById('autoComp').value;

    // listingsData contains all data
    // console.log(beds +' - '+ baths)
    var sortedList = [];
    // console.log(sortType);
    if (sortType == 'search') {
        // comsole.log('1');
        //Search by property
        clearSearch();
        if(propName != '')
        {
            var params = 'na=' + propName + '&be=0&ba=0&li=0&ga=0';
            fetchData(params);
        }
        else
        {
            loadPropertyBox(listingsData);
        }
    } else {
        // comsole.log('2');
        //Search by sorts
        document.getElementById('noProperty').classList.remove('show');
        document.getElementById('autoComp').value = '';
        if (beds != 0 || baths != 0 || livings != 0 || garages != 0) {
            var params = 'be=' + beds + '&ba=' + baths + '&li=' + livings + '&ga=' + garages + '&na=0';
            fetchData(params);
        }
        if (beds == 0 && baths == 0 && livings == 0 && garages == 0) {
            clearSearch();
        }
        scrollToListing()
    }
    if (isMobile) {
        document.getElementById('sortDiv').style.display = 'none';
        document.getElementById('sort').style.display = 'block';
    }
}

function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false; }
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            var pos = arr[i].toUpperCase().indexOf(val.toUpperCase());
            /*check if the item starts with the same letters as the text field value:*/
            if (pos > -1) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = arr[i].substr(0, pos);
                b.innerHTML += "<strong>" + arr[i].substr(pos, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(pos + val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    });

    function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }

    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }

    function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function(e) {
        closeAllLists(e.target);
    });
}
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
if (pgName == 'listings.php') {
    autocomplete(document.getElementById("autoComp"), searchList);
}

// loadPropertyBox();

function fetchData(params) {
    const Http = new XMLHttpRequest();
    const url = '/admin/action/actionFetchSortBy.php?' + params;
    Http.open("GET", url);
    Http.send();

    Http.onreadystatechange = function(e) {
        // console.log(Http.status)
        if (Http.readyState == 4 && Http.status == 200) {
            // console.log(Http.responseText);
            listId = [];
            document.getElementById('contentList').innerHTML = '';
            var responseData = Http.responseText;
            // console.log(responseData)
            responseData = JSON.parse(responseData);
            loadPropertyBox(responseData);

        }
    }
}

window.addEventListener("scroll", function() { onScrollDiv() });
window.addEventListener("DOMContentLoaded", function() { onScrollDiv() });

function onScrollDiv() {
    var images = document.querySelectorAll('.lazyload');
    var anim = document.querySelectorAll('.animated');
    for (var i = 0, nb = images.length; i < nb; i++) {
        var img = images[i];
        var rect = img.getBoundingClientRect();
        var isVisible = ((rect.top - window.innerHeight) < 500 && (rect.bottom) > -50) ? true : false;

        if (isVisible) {
            if (!img.src) {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                img.classList.remove('lazyload');
            }
        }
    }
    for (var i = 0, nbs = anim.length; i < nbs; i++) {
        var animELe = anim[i];
        var rect = animELe.getBoundingClientRect();
        var isVisible = ((rect.top - window.innerHeight) < 0 && (rect.bottom) > -50) ? true : false;

        // console.log(isVisible);
        if (isVisible) {
            if (animELe.hasAttribute('data-anim')) {
                var classL = animELe.getAttribute('data-anim');
                animELe.classList.add(classL);
                animELe.removeAttribute('data-anim');
            }
        }
    }
}
var readMore = document.getElementsByClassName('readMore')[0];
if (readMore) {
    readMore.addEventListener("click", function(e) {
        readMore.style.display = 'none';
        var mrTxt = document.querySelectorAll('.moreTxt');
        mrTxt.forEach(function(index, value) {
            // console.log(index);
            index.classList.remove('moreTxt');
        });
        var epl = document.querySelectorAll('.eppl');
        epl.forEach(function(index, value) {
            // console.log(index);
            index.classList.add('moreTxt');
        });



        // document.querySelectorAll('.eppl').style.display = 'inline-block';
    });
}

// function isInViewport(elem) {

//     var elementTop = elem.offset().top;
//     var elementBottom = elementTop + elem.outerHeight();

//     var viewportTop = $(window).scrollTop();
//     var viewportBottom = viewportTop + $(window).height();
//     return elementBottom > viewportTop && elementTop < viewportBottom;
// }
// // function lazyLoad() {
// //     $('.lazy').each(function () {
// //         if (isInViewport($(this)) == true) {
// //             $(this).attr('src', $(this).attr('data-src'))
// //             $(this).removeAttr('data-src').removeClass('lazy')
// //         };
// //     })
// // }
// window.addEventListener('scroll', function () {
//     if ($(".alime-portfolio-area").length && $('.lazy').length) {
//         lazyLoad();
//         $('.alime-portfolio').isotope({
//             itemSelector: '.single_gallery_item ',
//             masonry: {
//                 gutter: 0
//             }
//         });
//     }
// });