<?php

include 'head.php';

include '../model_base.php';

if(!empty($_SESSION) && array_key_exists("username", $_SESSION)): 

?>

<div class="container bodyContent">

    <div class="title-wrap">
        <h3 class="title"><span>Create Project</span></h3>
    </div>
    <form>
        <div class="row">
            <label class="" for="email">Project name:</label>
            <input type="text" id="project_name" accept="image/*" placeholder="Enter Project name">
        </div>
        <div class="row">
            <label class="" for="pwd">Profile Image:</label>
            <input type="file" accept="image/*" id="singleprofileImg">
            <div id="divProfileImg" class="thumbs"></div>
            <!-- <img src="../images/loader.svg" alt="" class="loader"> -->
        </div>
        <div class="row">
            <label class="" for="pwd">Large Image:</label>
            <input type="file" id="uploadProfileImg" accept="image/*" name="file[]" multiple="multiple">
            <div id="profileImgProject" class="thumbs"></div>
            <!-- <img src="../images/loader.svg" alt="" class="loader"> -->
        </div>
        <div class="row">
            <label class="" for="pwd">Thumbnail images:</label>
            <input type="file" id="resizedUploadProfileImg" accept="image/*" name="file[]" multiple="multiple">
            <div id="resizedProfileImgProject" class="thumbs"></div>
            <!-- <img src="../images/loader.svg" alt="" class="loader"> -->
        </div>
        <div class="row flex col2">
            <label class="" for="email">Beds:</label>
            <label class="" for="email">Toilet:</label>
            <input type="number" id="project_beds" placeholder="Enter number of beds">
            <input type="number" id="project_toilet" placeholder="Enter number of toilets">
        </div>
        <div class="row flex col2">
            <label class="" for="email">Area:</label>
            <label class="" for="email">Carpet Area:</label>
            <input type="number" id="project_area" placeholder="Enter project area">
            <input type="number" id="project_carpet_area" placeholder="Enter Carpet area">
        </div>
        <div class="row flex col2">
            <label class="" for="email">Living:</label>
            <label class="" for="email">Parking:</label>
            <input type="number" id="project_living" placeholder="Enter number of Living area">
            <input type="number" id="project_parking" placeholder="Enter number of parkings">
        </div>
        <div class="row">
            <label class="" for="pwd">Description:</label>
            <textarea name="description" rows="10" id="description"></textarea>
        </div>
        <div class="row flex col3">
            <label><input type="checkbox" value="1" id="check_featured"><span></span>Featured listing</label>
            <label><input type="checkbox" value="" id="check_sold"><span></span>Sold out</label>
            <label><input type="checkbox" value="" id="draft"><span></span>Keep in draft</label>
        </div>
        <div class="row">
            <label class="" for="email">Map location:</label>
            <input type="text" id="project_map" placeholder="Enter project map location url">
        </div>
        <div class="row">
            <label>Show Interest:</label>
            <div class="row flex col4">
                <label for="negotiation">
                    <input type="radio" name="interest" id="negotiation" value="negotiation"><span></span>negotiation
                </label>
                <label for="auction">
                    <input type="radio" name="interest" id="auction" value="auction"><span></span>auction
                </label>
                <label for="tender">
                    <input type="radio" name="interest" id="tender" value="tender"><span></span>tender
                </label>
                <label for="deadline">
                    <input type="radio" name="interest" id="deadline" value="deadline"><span></span>deadline
                </label>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="button" id="btnCreateProject">Submit</button>
        </div>
    </form>
    <script>
        $(document).ready(function() {

            CKEDITOR.replace('description');

            $("#imgLoaderProfile").hide();

            $("#imgLoaderMulti").hide();
            $("#resizedImgLoaderMulti").hide();

            $("body").on("click", ".removeImg", function(e) {
                e.preventDefault();
                $(this).parent().remove();
            });

            $("#btnCreateProject").click(function(e) {

                e.preventDefault();
                var map = "";
                var error = false;
                if (!$('#draft').is(":checked")) {
                    if ($("#project_name").val() == "") {
                        alert("Please enter Project Name");
                        error = true;
                    } else if ($("#project_beds").val() == "") {
                        alert("Please enter No. of Beds");
                        error = true;
                    }
                } else {
                    if ($("#project_name").val() == "") {
                        alert("Please enter Project Name");
                        error = true;
                    }

                }

                if (document.getElementById("singleprofileImg").files.length > 0) {
                    var profileImgView = document.getElementById("singleprofileImg").files[0]['name'];
                }
                var $imgs = $('img.locationImgView'),

                    arr = [];

                $imgs.each(function() {

                    arr.push($(this).attr('data-resize'));

                });

                var $resizedimgs = $('img.resizedImgView'),

                    resize_arr = [];

                $resizedimgs.each(function() {

                    resize_arr.push($(this).attr('data-resize'));

                });

                // for(var i = 0; i < document.getElementById("uploadProfileImg").files.length ; i++) {
                //     arr.push(document.getElementById("uploadProfileImg").files[i]['name']);
                // }
                // for(var i = 0; i < document.getElementById("resizedUploadProfileImg").files.length ; i++) {
                //     resize_arr.push(document.getElementById("resizedUploadProfileImg").files[i]['name']);
                // }

                var featured = 0;
                var sold = 0;
                var project_name = $("#project_name").val();

                var project_beds = $("#project_beds").val();

                var project_toilet = $("#project_toilet").val();

                var s = $("#project_map").val();
                var n = s.startsWith("<iframe src=");
                if (n) {
                    var html = $.parseHTML(s);
                    map = html[0].src;
                    var project_map = map;
                } else {
                    var project_map = $("#project_map").val();
                }


                var profileImgSmall = $("#profileImgView").data('smaller');

                var project_area = $("#project_area").val();

                var project_parking = $("#project_parking").val();

                var project_living = $("#project_living").val();
                var project_carpet_area = $("#project_carpet_area").val();

                var description = CKEDITOR.instances['description'].getData()

                if ($('#check_featured').is(":checked")) {

                    featured = $("input[type='checkbox']").val();

                }
                var draft = 0;
                if ($('#draft').is(":checked")) {
                    draft = 1;
                }
                if ($('#check_sold').is(":checked")) {

                    sold = 1;

                }
                if ($("input[name='interest']").is(":checked")) {
                    var interest = $("input[name='interest']:checked").val();

                }

                if (!error) {

                    $.ajax({

                        "url": "/admin/action/actionCreateProject.php",

                        "type": "POST",

                        "async": false,

                        "data": {

                            project_name: project_name,

                            project_beds: project_beds,

                            project_toilet: project_toilet,

                            profileImgView: profileImgView,

                            profileImgSmall: profileImgSmall,

                            project_area: project_area,

                            project_parking: project_parking,
                            project_carpet_area: project_carpet_area,

                            project_living: project_living,
                            check_sold: sold,
                            draft: draft,

                            description: description,
                            project_map: project_map,

                            arr: arr,

                            resize_arr: resize_arr,

                            featured: featured,
                            interest: interest

                        },

                        "success": function(data) {
                            // console.log(data);

                            var data = JSON.parse(data);

                            if (data.status == "success") {

                                alert(data.msg)

                                window.location.href = "/admin/documents.php?name=" + data.link;

                            } else {

                                alert(data.msg + ' 1');

                            }

                        }

                    });

                }

            });

            $("#singleprofileImg").change(function() {

                var el = $(this);

                var file = this.files[0];

                var size = this.files[0].size;

                if (size > 50 * 1024 * 1024) {

                    alert("Too large Image. Only image smaller than 2MB can be uploaded.");

                } else {

                    var form = new FormData();
                    // var compressedImg = compress_small(file);
                    form.append("image", file);
                    $("#singleprofileImg").addClass('loader');
                    $.ajax({

                        url: "/admin/action/uploadImg.php",

                        type: "POST",

                        cache: false,

                        contentType: false, // important

                        processData: false, // important

                        data: form,

                        beforeSend: function() {

                            $("#imgLoaderProfile").show();

                        },

                        success: function(data) {

                            var data = JSON.parse(data);

                            if (data.status == "success") {

                                $("#imgLoaderProfile").hide();

                                $("#divProfileImg").html('');

                                $("#divProfileImg").html('<img src="<?php echo http_Site; ?>admin/upload/profileImage/' + data.msg + '" width="50" height="50" id="profileImgView" data-smaller="' + data.msg + '"/>');
                                $("#singleprofileImg").removeClass('loader');
                            } else {

                                alert(data.msg)
                                $("#imgLoaderProfile").hide();

                            }

                        }

                    });

                }

            });

            $("#multiFiles").change(function() {

                var el = $(this);

                var form_data = new FormData();

                var ins = document.getElementById('multiFiles').files.length;

                for (var x = 0; x < ins; x++) {

                    form_data.append("files[]", document.getElementById('multiFiles').files[x]);

                }

                $.ajax({

                    url: urlpath + "admin/action/documentMulti.php",

                    dataType: 'text',

                    cache: false,

                    contentType: false,

                    processData: false,

                    data: form_data,

                    type: 'post',

                    success: function(response) {

                        $("#docUpload").append(response);

                    },

                    error: function(response) {

                        console.log(response)

                    }

                });

            });

            $("#resizedUploadProfileImg").change(function() {

                var el = $(this);

                var form_data = new FormData();

                var ins = document.getElementById('resizedUploadProfileImg').files.length;

                for (var x = 0; x < ins; x++) {

                    form_data.append("files[]", document.getElementById('resizedUploadProfileImg').files[x]);

                }
                $("#resizedUploadProfileImg").addClass('loader');
                $.ajax({

                    url: "/admin/action/resizedMultiImages.php",

                    dataType: 'text',

                    cache: false,

                    contentType: false,

                    processData: false,

                    data: form_data,

                    type: 'post',

                    beforeSend: function() {

                        $("#resizedImgLoaderMulti").show();

                    },

                    success: function(response) {

                        $("#resizedImgLoaderMulti").hide();

                        $("#resizedProfileImgProject").append(response);
                        $("#resizedUploadProfileImg").removeClass('loader');

                    }

                });

            });


            $("#uploadProfileImg").change(function() {

                var el = $(this);

                var form_data = new FormData();

                var ins = document.getElementById('uploadProfileImg').files.length;

                for (var x = 0; x < ins; x++) {

                    form_data.append("files[]", document.getElementById('uploadProfileImg').files[x]);

                }
                $("#uploadProfileImg").addClass('loader');
                $.ajax({

                    url: "/admin/action/imagemulti.php",

                    dataType: 'text',

                    cache: false,

                    contentType: false,

                    processData: false,

                    data: form_data,

                    type: 'post',

                    beforeSend: function() {

                        $("#imgLoaderMulti").show();

                    },

                    success: function(response) {

                        $("#imgLoaderMulti").hide();

                        $("#profileImgProject").append(response);
                        $("#uploadProfileImg").removeClass('loader');

                    }

                });

            });

        });
    </script>

</div>

<?php else: header("Location:".http_Site); ?>

<?php endif; ?>

</body>

</html>



