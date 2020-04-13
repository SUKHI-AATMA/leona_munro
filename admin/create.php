<?php

include 'head.php';

include '../model_base.php';

if(!empty($_SESSION) && array_key_exists("username", $_SESSION)): 

?>

<div class="container">

    <div class="title-wrap">
        <h3>Create Project</h3>
    </div>

    <form class="form-horizontal">

        <div class="form-row">  
            <div class="form-group">        
                <div class="col-sm-6">
                    <label class="control-label" for="email">Project name:</label>
                    <input type="text" class="form-control" id="project_name" accept="image/*" placeholder="Enter Project name">
                </div>
            </div>
        </div>

        <div class="form-row">   
            <div class="form-group">
                <div class="col-sm-6">
                    <label class="control-label" for="pwd">Profile Image:</label>
                </div>
                <div class="flex col-m-12">
                    <div class="col-sm-6">
                        <input type="file" class="form-control" accept="image/*" id="singleprofileImg">
                        (Dimension:350 * 250)
                    </div>
                    <div class="col-sm-6" id="imgLoaderProfile"><img src="../images/loader.svg" alt=""></div>
                </div>
            </div> 
        </div>

        <div class="form-row"> 
            <div class="form-group">
                <div class="col-sm-6"></div>
                <div class="col-sm-6" id="divProfileImg"></div>
            </div>
        </div>

        <div class="form-row"> 
            <div class="form-group">
                <div class="col-sm-6">
                    <label class="control-label" for="pwd">Large Image:</label>
                </div>
                <div class="flex col-m-12">
                    <div class="col-sm-6">          
                        <input type="file" class="form-control" id="uploadProfileImg" accept="image/*" name="file[]" multiple="multiple">(Dimension:1900 * 1000)
                    </div>
                    <div class="col-sm-6" id="imgLoaderMulti">
                        <img src="../images/loader.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
            
        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-6"></div>
                <div class="col-sm-6" id="profileImgProject"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-6">
                    <label class="control-label" for="pwd">Thumbnail images:</label>
                </div>
                <div class="flex col-m-12">
                    <div class="col-sm-6">          
                        <input type="file" class="form-control" id="resizedUploadProfileImg" accept="image/*" name="file[]" multiple="multiple">
                        (Dimension:350 * 200)
                    </div>
                    <div class="col-sm-6" id="resizedImgLoaderMulti">
                        <img src="../images/loader.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-6"></div>
                <div class="col-sm-6" id="resizedProfileImgProject"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-roww">
                <div class="col-md-6">
                    <label class="control-label col-sm-12" for="email">Beds:</label>
                    <input type="number" class="form-control" id="project_beds" placeholder="Enter number of beds">
                </div>
                <div class="col-md-6"> 
                    <label class="control-label col-sm-12" for="email">Toilet:</label>
                    <input type="number" class="form-control" id="project_toilet" placeholder="Enter number of toilets">
                </div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-roww">
                <div class="col-md-6">
                    <label class="control-label" for="email">Area:</label>
                    <input type="number" class="form-control" id="project_area" placeholder="Enter project area">
                </div> 
                <div class="col-md-6">
                    <label class="control-label col-sm-2" for="email">Carpet Area:</label>
                    <input type="number" class="form-control" id="project_carpet_area" placeholder="Enter Carpet area">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-roww">
                <div class="col-md-6">
                    <label class="control-label" for="email">Living:</label>
                    <input type="number" class="form-control" id="project_living" placeholder="Enter number of Living area">
                </div> 
                <div class="col-md-6">
                    <label class="control-label col-sm-2" for="email">Parking:</label>
                    <input type="number" class="form-control" id="project_parking" placeholder="Enter number of parkings">
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label" for="pwd">Description:</label>
                    <textarea class="form-control" name="description" rows="10" id="description"></textarea>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-roww">
                <div class="checkbox col-sm-4">
                    <label><input type="checkbox" value="1" id="check_featured"><span></span>Featured listing</label>
                </div>
                <div class="checkbox col-sm-4">
                    <label><input type="checkbox" value="" id="check_sold"><span></span>Sold out</label>
                </div>
                <div class="checkbox col-sm-4">
                    <label><input type="checkbox" value="" id="draft"><span></span>Keep in draft</label>
                </div>
            </div>
        </div>

        
        <div class="form-group">
            <div class="col-sm-6">
                <label class="control-label" for="email">Map location:</label>
                <input type="text" class="form-control" id="project_map" placeholder="Enter project map location url">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label" for="email">Show Interest:</label>
                    <div class="radio-wrap flexwrap">
                        <label for="">
                            <input type="radio" name="interest" value="negotiation"><span></span>negotiation
                        </label>
                        <label for="">
                            <input type="radio" name="interest" value="auction"><span></span>auction 
                        </label>
                        <label for="">
                            <input type="radio" name="interest" value="tender"><span></span>tender
                        </label> 
                        <label for="">
                            <input type="radio" name="interest" value="deadline"><span></span>deadline
                        </label>   
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group form-btn"> 
            <div class="col-sm-12">
                <button type="submit" class="btn btn-default" id="btnCreateProject">Submit</button>
            </div>
        </div>

    </form>


    <script>

    $(document).ready(function () {

        CKEDITOR.replace('description');

        $("#imgLoaderProfile").hide();

        $("#imgLoaderMulti").hide();
        $("#resizedImgLoaderMulti").hide();
        

        

        $("body").on("click", ".removeImg", function(e) {

            e.preventDefault();

            $(this).parent().remove();

        });

        

        $("#singleprofileImg").change(function(){

            var el = $(this);

            var file = this.files[0];

            var size = this.files[0].size;

            if (size > 50 * 1024 * 1024) {

                alert("Too large Image. Only image smaller than 2MB can be uploaded.");

            } else {

                var form = new FormData();
                // var compressedImg = compress_small(file);
                form.append("image", file);

                $.ajax({

                    url:  "/admin/action/uploadImg.php",

                    type: "POST",

                    cache: false,

                    contentType: false, // important

                    processData: false, // important

                    data: form,

                    beforeSend: function() {

                        $("#imgLoaderProfile").show();

                    },

                    success: function (data) {
                        
                        var data = JSON.parse(data);

                        if (data.status == "success") {

                            $("#imgLoaderProfile").hide();

                            $("#divProfileImg").html('');

                            $("#divProfileImg").html('<img src="<?php echo http_Site; ?>admin/upload/profileImage/'+data.msg+'" width="50" height="50" id="profileImgView" data-smaller="'+data.msg+'"/>');

                        } else {

                            alert(data.msg)
                            $("#imgLoaderProfile").hide();

                        }

                    }

                });

            }

        });

        

        $("#btnCreateProject").click(function(e){

            e.preventDefault();
            var map ="";
            var error = false;
            if(!$('#draft').is(":checked")) {
                if($("#project_name").val() == "") {
                alert("Please enter Project Name");
                error = true;
                } else if($("#project_beds").val() == "") {
                    alert("Please enter No. of Beds");
                    error = true;
                }
            } else {
                if($("#project_name").val() == "") {
                alert("Please enter Project Name");
                error = true;
                }
                
            }
            
            if(document.getElementById("singleprofileImg").files.length > 0){
            var profileImgView = document.getElementById("singleprofileImg").files[0]['name'];    
            }
            
            
            

            var $imgs = $('img.locationImgView'),

            arr = [];

            $imgs.each(function () {

                arr.push($(this).attr('data-resize'));

            });
            
            var $resizedimgs = $('img.resizedImgView'),

            resize_arr = [];

            $resizedimgs.each(function () {

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
            var project_name =$("#project_name").val();

            var project_beds =$("#project_beds").val();

            var project_toilet =$("#project_toilet").val();
            
            var s = $("#project_map").val();
        var n = s.startsWith("<iframe src="); 
        if(n){
            var html = $.parseHTML( s );
            map = html[0].src;
var project_map = map;
        } else {
var project_map = $("#project_map").val();
}

            
            var profileImgSmall =$("#profileImgView").data('smaller');

            var project_area =$("#project_area").val();

            var project_parking =$("#project_parking").val();

            var project_living =$("#project_living").val();
            var project_carpet_area =$("#project_carpet_area").val();

            var description = CKEDITOR.instances['description'].getData()

            if ($('#check_featured').is(":checked")){

               featured = $("input[type='checkbox']").val();

            }
            var draft = 0; 
            if($('#draft').is(":checked")) {
                draft = 1;
            }
            if ($('#check_sold').is(":checked")) {

                sold = 1;

            }
             if ($("input[name='interest']").is(":checked")){
                var interest = $("input[name='interest']:checked").val();

            }

            if (!error) {

                $.ajax({

                    "url": "/admin/action/actionCreateProject.php",

                    "type": "POST",

                    "async": false,

                    "data": {

                        project_name: project_name,

                        project_beds:project_beds,

                        project_toilet:project_toilet,

                        profileImgView:profileImgView,

                        profileImgSmall:profileImgSmall,

                        project_area:project_area,

                        project_parking:project_parking,
                        project_carpet_area:project_carpet_area,

                        project_living:project_living,
                        check_sold: sold,
                        draft: draft,

                        description:description,
                        project_map:project_map,

                        arr:arr,

                        resize_arr:resize_arr,

                        featured:featured,
                        interest:interest

                    },

                    "success": function (data) {
                       // console.log(data);

                        var data = JSON.parse(data);

                        if (data.status == "success") {

                            alert(data.msg)

                            window.location.href = "/admin/documents.php?name="+data.link;

                        } else {

                           alert(data.msg)

                        }

                    }

                });

            } 

        });

        

        $("#multiFiles").change(function(){

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

                success: function (response) {

                    $("#docUpload").append(response);

                },

                error: function (response) {

                    console.log(response)

                }

            });

        });

        $("#resizedUploadProfileImg").change(function(){

            var el = $(this);

            var form_data = new FormData();

            var ins = document.getElementById('resizedUploadProfileImg').files.length;

            for (var x = 0; x < ins; x++) {

                form_data.append("files[]", document.getElementById('resizedUploadProfileImg').files[x]);

            }

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

                success: function (response) {

                    $("#resizedImgLoaderMulti").hide();

                    $("#resizedProfileImgProject").append(response);

                }

            });

        });


        $("#uploadProfileImg").change(function(){

            var el = $(this);

            var form_data = new FormData();

            var ins = document.getElementById('uploadProfileImg').files.length;

            for (var x = 0; x < ins; x++) {

                form_data.append("files[]", document.getElementById('uploadProfileImg').files[x]);

            }

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

                success: function (response) {

                    $("#imgLoaderMulti").hide();

                    $("#profileImgProject").append(response);

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



