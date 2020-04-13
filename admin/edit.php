<?php
include 'head.php';
include '../model_base.php';
$check =0;
if(!empty($_SESSION) && array_key_exists("username", $_SESSION)):
    if(!empty($_GET) && array_key_exists('name', $_GET)):
        if($_GET["name"] != ""):
            $data = Model_Base::query("Select * from projects where uniquename='{$_GET["name"]}'");
            if(empty($data)):
                $check=1;
            endif;
        else:
            $check=1;
        endif;
    else:
        $check=1;
    endif;
    if($check == 1):
        header('Location:'.http_Site);
    endif;
    ?>
<div class="container">
    <div class="title-wrap">
        <h3>Edit Project</h3>
    </div>
    <form class="form-horizontal">
        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-6">
                    <label class="control-label" for="email">Project name:</label>
                    <input type="text" class="form-control" id="project_name" value="<?php echo $data[0]->project_name; ?>">
                    <input type="hidden" id="project_uniquename" value="<?php echo $data[0]->uniquename; ?>">
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
                        <input type="file" class="form-control" id="singleprofileImg">
                        <span class="caption">(Dimension:350 * 250)</span>
                    </div>
                    <div class="col-sm-6" id="imgLoaderProfile"><img src="../images/loader.svg" alt=""></div>
                </div>
            </div>
        </div>
        <?php
        if($data[0]->project_img != "") {
        ?>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-10" id="divProfileImg">
                <img src="<?php echo http_Site." admin/upload/profileImage/".$data[0]->project_img; ?>" width="150" height="150" id="profileImgView" data-smaller="
                <?php echo http_Site."".$data[0]->project_img_small; ?>" />
            </div>
        </div>
        <?php
      }
?>
        <input type="hidden" id='existingProfileImage' value="<?php echo $data[0]->project_img; ?>" />
        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-6">
                    <label class="control-label" for="pwd">Large Image:</label>
                </div>
                <div class="flex col-m-12">
                    <div class="col-sm-6">
                        <input type="file" class="form-control" id="uploadProfileImg" name="file[]" multiple="multiple">
                        <span class="caption">(Dimension:1900 * 1000)</span>
                    </div>
                    <div class="col-sm-6" id="imgLoaderMulti">
                        <img src="../images/loader.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id='existingAdditionalImage' value="<?php echo $data[0]->images; ?>" />
        <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" id="profileImgProject">
                <?php if($data[0]->images !=""): ?>
                <?php
                    $imageData = explode(',', $data[0]->images);
                    $resize_imageData = explode(',', $data[0]->small_images);
                    for($i=0; $i<count($imageData); $i++):
                ?>
                <div class="col-sm-3">
                    <div class="edit-img-wrap">
                        <img src="<?php echo http_Site." admin/upload/additionalImages/".$imageData[$i]; ?>" class="locationImgView" data-resize="
                        <?php echo $imageData[$i]; ?>" width="150" height="150" />
                        <a href="#" class="removeImg" data-toggle="tooltip" data-placement="top" title="Delete">
                            <span class="far fa-trash-alt"></span>
                        </a>
                    </div>
                </div>
                <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-6">
                    <label class="control-label" for="pwd">Thumbnail Images:</label>
                </div>
                <div class="flex col-m-12">
                    <div class="col-sm-6">
                        <input type="file" class="form-control" id="resizedUploadProfileImg" name="file[]" multiple="multiple">
                        <span class="caption">(Dimension:350 * 200)</span>
                    </div>
                    <div class="col-sm-6" id="resizedImgLoaderMulti">
                        <img src="../images/loader.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id='existingResizedAdditionalImage' value="<?php echo $data[0]->small_images; ?>" />
        <div class="form-row">
            <div class="form-group" style="margin:0">
                <div class="col-sm-6"></div>
                <div class="col-sm-6" id="resizedProfileImgProject"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-8" id="resizedMoreImages">
                    <?php if($data[0]->small_images !=""): ?>
                    <?php
                      $resize_imageData = explode(',', $data[0]->small_images);
                      for($i=0; $i<count($resize_imageData); $i++):
                  ?>
                    <div class="col-sm-3">
                        <div class="edit-img-wrap">
                            <img src="<?php echo http_Site." admin/upload/resizedAdditionalImages/".$resize_imageData[$i]; ?>" class="resizedImgView" data-resize="
                            <?php echo $resize_imageData[$i]; ?>" width="150" height="150" />
                            <a href="#" class="removeImg" data-toggle="tooltip" data-placement="top" title="Delete">
                                <span class="far fa-trash-alt"></span>
                            </a>
                        </div>
                    </div>
                    <?php endfor; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-roww">
                <div class="col-md-6">
                    <label class="control-label col-sm-12" for="email">Beds:</label>
                    <input type="number" class="form-control" id="project_beds" value="<?php echo $data[0]->beds; ?>">
                </div>
                <div class="col-md-6">
                    <label class="control-label col-sm-12" for="email">Toilet:</label>
                    <input type="number" class="form-control" id="project_toilet" value="<?php echo $data[0]->toilet; ?>">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-roww">
                <div class="col-md-6">
                    <label class="control-label col-sm-12" for="email">Area:</label>
                    <input type="number" class="form-control" id="project_area" value="<?php echo $data[0]->area; ?>">
                </div>
                <div class="col-md-6">
                    <label class="control-label col-sm-12" for="email">Carpet area:</label>
                    <input type="number" class="form-control" id="project_carpet_area" value="<?php echo $data[0]->carpet_area; ?>">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-roww">
                <div class="col-md-6">
                    <label class="control-label col-sm-12" for="email">Living:</label>
                    <input type="number" class="form-control" id="project_living" value="<?php echo $data[0]->seating; ?>">
                </div>
                <div class="col-md-6">
                    <label class="control-label col-sm-12" for="email">Parking:</label>
                    <input type="number" class="form-control" id="project_parking" value="<?php echo $data[0]->parking; ?>">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label" for="pwd">Description:</label>
                    <textarea class="form-control" name="description" rows="10" id="description">
                <?php echo $data[0]->description; ?>
              </textarea>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-roww">
                <div class="checkbox col-sm-4">
                    <label>
                        <input type="checkbox" value="<?php echo $data[0]->featured; ?>" id="check_featured" <?php echo ($data[0]->featured == 1)?"checked":""; ?> >
                        <span></span>Featured listing
                    </label>
                </div>
                <div class="checkbox col-sm-4">
                    <label>
                        <input type="checkbox" value="<?php echo $data[0]->sold; ?>" id="check_sold" <?php echo ($data[0]->sold == 1)?"checked":""; ?> ><span></span>Sold out
                    </label>
                </div>
                <div class="checkbox col-sm-4">
                    <?php
              $isDraft = false;
              if($data[0]->draft == 1 || $data[0]->draft == "1") {
                  ?>
                    <label><input type="checkbox" checked="true" id="draft"><span></span>Keep in draft</label>
                    <?php
              } else {
                  ?>
                    <label><input type="checkbox" id="draft"><span></span>Keep in draft</label>
                    <?php
              }
              ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6">
                <label class="control-label col-sm-12" for="email">Map location:</label>
                <input type="text" class="form-control" id="project_map" value="<?php echo $data[0]->project_map; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label" for="email">Show Interest:</label>
                    <div class="radio-wrap flexwrap">
                        <label for="">
                            <input type="radio" name="interest" value="negotiation" <?php echo ($data[0]->interest)=='negotiation' ? "checked" : ""; ?>> <span></span> Negotiation
                        </label>
                        <label for="">
                            <input type="radio" name="interest" value="auction" <?php echo ($data[0]->interest)=='auction' ? "checked" : ""; ?>><span></span>Auction
                        </label>
                        <label for="">
                            <input type="radio" name="interest" value="tender" <?php echo ($data[0]->interest)=='tender' ? "checked" : ""; ?>><span></span>Tender
                        </label>
                        <label for="">
                            <input type="radio" name="interest" value="deadline" <?php echo ($data[0]->interest)=='deadline' ? "checked" : ""; ?>><span></span>Deadline
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group form-btn">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" id="btnCreateProject">Save</button>
            </div>
        </div>
    </form>
    <script>
    $(document).ready(function() {
        CKEDITOR.replace('description');
        $("#imgLoaderProfile").hide();
        $("#imgLoaderMulti").hide();
        $("#resizedImgLoaderMulti").hide();
        $("#singleprofileImg").change(function() {
            var el = $(this);
            var file = this.files[0];
            var size = this.files[0].size;
            if (size > 50 * 1024 * 1024) {
                alert("Too large Image. Only image smaller than 50MB can be uploaded.");
            } else {
                var form_data = new FormData();
                form_data.append("image", file);
                $.ajax({
                    url: urlpath + "admin/action/uploadImg.php",
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    beforeSend: function() {
                        $("#imgLoaderProfile").show();
                    },
                    success: function(data) {
                        var data = JSON.parse(data);
                        if (data.status == "success") {
                            $("#imgLoaderProfile").hide();
                            $("#divProfileImg").html('<img src="<?php echo http_Site; ?>admin/upload/profileImage/' + data.msg + '" width="50" height="50" id="profileImgView" data-smaller="' + data.smallimg + '"/>');
                        } else {
                            alert(data.msg)
                            //alert(data)
                        }
                    }
                });
            }
        });
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
            var $imgs = $('img.locationImgView');
            var profileImgSmall = $("#profileImgView").data('smaller');
            arr = [];
            resize_arr = [];
            var featured = '';
            var sold = '';
            var project_name = $("#project_name").val();
            var project_beds = $("#project_beds").val();
            var project_toilet = $("#project_toilet").val();
            if (document.getElementById("singleprofileImg").files.length > 0) {
                var profileImgView = document.getElementById("singleprofileImg").files[0]['name'];
            } else {
                var profileImgView = $("#existingProfileImage").val();
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
            var project_area = $("#project_area").val();
            var project_uniquename = $("#project_uniquename").val()
            var project_parking = $("#project_parking").val();
            var project_carpet_area = $("#project_carpet_area").val();
            var project_living = $("#project_living").val();
            var s = $("#project_map").val();
            var n = s.startsWith("<iframe src=");
            if (n) {
                var html = $.parseHTML(s);
                map = html[0].src;
                var project_map = map;
            } else {
                var project_map = $("#project_map").val();
            }
            var description = CKEDITOR.instances['description'].getData()
            if ($('#check_featured').is(":checked")) {
                featured = 1;
            }
            if ($('#check_sold').is(":checked")) {
                sold = 1;
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
                    "url": "/admin/action/actionSaveProject.php",
                    "type": "POST",
                    "async": false,
                    "data": {
                        project_name: project_name,
                        project_beds: project_beds,
                        project_toilet: project_toilet,
                        project_area: project_area,
                        project_map: project_map,
                        profileImgView: profileImgView,
                        project_carpet_area: project_carpet_area,
                        profileImgSmall: profileImgSmall,
                        project_uniquename: project_uniquename,
                        project_parking: project_parking,
                        project_living: project_living,
                        description: description,
                        arr: arr,
                        resize_arr: resize_arr,
                        featured: featured,
                        draft: draft,
                        check_sold: sold,
                        interest: interest
                    },
                    "success": function(data) {
                        // console.log(data)
                        var data = JSON.parse(data);
                        if (data.status == "success") {
                            alert(data.msg)
                            window.location.href = urlpath + "admin/projects.php";
                        } else {
                            alert(data.msg)
                        }
                    }
                });
            }
        });
        $("#uploadProfileImg").change(function() {
            var el = $(this);
            var form_data = new FormData();
            var ins = document.getElementById('uploadProfileImg').files.length;
            for (var x = 0; x < ins; x++) {
                form_data.append("files[]", document.getElementById('uploadProfileImg').files[x]);
                console.log(document.getElementById('uploadProfileImg').files[x]);
            }
            $.ajax({
                url: urlpath + "admin/action/imagemulti.php",
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
            $.ajax({
                url: urlpath + "admin/action/resizedMultiImages.php",
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
                    $("#resizedMoreImages").append(response);
                }
            });
        });
        $("#multiFiles").change(function() {
            var el = $(this);
            var form_data = new FormData();
            var ins = document.getElementById('multiFiles').files.length;
            for (var x = 0; x < ins; x++) {
                form_data.append("files[]", document.getElementById('multiFiles').files[x]);
            }
            $.ajax({
                url: urlpath + "admin/action/image.php",
                dataType: 'text', // what to expect back from the PHP script
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
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
  </div>
<?php else: header("Location:".http_Site); ?>
<?php endif; ?>
</body>
</html>