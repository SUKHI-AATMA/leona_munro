<?php

include 'head.php';

include '../model_base.php';

$check =0;
if(!empty($_SESSION) && array_key_exists("username", $_SESSION)):

    if(!empty($_GET) && array_key_exists('name', $_GET)):

        if($_GET["name"] != ""):

            $data = Model_Base::query("Select * from projects where uniquename='{$_GET["name"]}'");

            $documentData = Model_Base::query("Select * from project_document where uniquename='{$_GET["name"]}'");

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
  <div class="container bodyContent">
    <div class="title-wrap">    
      <h3 class="title">Project Documents :<?php echo ucwords($data[0]->project_name); ?> </h3>
    </div>
    <form>
      <input type="hidden" name="count" id="countForm" value="1" data-projectname="<?php echo $data[0]->uniquename; ?>" />
      <?php if(empty($documentData)): ?>
        
          <div class="row col3 docs">
            <div class="">
              <input type="file" id="videoUploadFile" class="form-control documentUpload">
              <input type="hidden" class="linkFile" id="docFileVal_0" id="docFileVal_0" value=""> </div>
            <div class="">
              <input type="text" class="form-control txtFile" id="docText_0" placeholder="Enter Document name"> </div>
            <div class="">
              <textarea class="form-control descpFile" id="docDescp_0" placeholder="Enter short description" rows="1"></textarea>
            </div>
            <div></div>
          </div>
        
      <?php else: ?>
      <?php foreach ($documentData as $key => $value) : ?>
      <div class="row docs">
        <div >
          <input type="file" class="form-control documentUpload">
          <input type="hidden" class="linkFile" id="docFileVal_<?php echo $key; ?>" value="<?php echo $value->link; ?>"> </div>
        <div >
          <input type="text" class="form-control txtFile" value="<?php echo $value->docName; ?>">

        </div>
        <div >
          <textarea class="form-control descpFile" rows="1"><?php echo $value->description; ?> </textarea>
        </div>
        <div>
          <a href='<?php echo $value->link; ?>' target="_blank">View document</a>&nbsp;|&nbsp;<a href="javascript:;" class="removeImg" data-uniquename="<?php echo $value->uniquename; ?>"><span class="icon-trash-empty"></span>Remove</a>
        </div>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
      
      <div class="row" id="addDivMore">
          <a href="javascript:;"  class="button" id="btnSaveDocs">Save</a>&nbsp;&nbsp;&nbsp;
          <a href="javascript:;" id="addMore" class="secondaryBtn"><span class="icon-plus"></span>&nbsp;Add more</a>&nbsp;
          <a href="<?php echo http_Site.'admin/projects.php'; ?>" class="linkBtn" role="button">Upload document later</a>
      </div>
    </form>
    <script>
    $(document).ready(function() {
      $("#btnSaveDocs").on('click',function(e) {
      console.log(123);
        e.preventDefault();
        var count = $('.docs').length;
        var projectname = $('#countForm').data('projectname');
        var doc = [];
        var txt = [];
        var descp = [];
       // var vidFileLength = $("#videoUploadFile")[0].files.length;

        if (count > 0) {
          var $linkFile = $('.linkFile');
          $linkFile.each(function() {
            console.log($(this).val())
            if ($(this).val() != '') {
              doc.push($(this).val());
            }
          });
          var $imgs = $('.txtFile');
          $imgs.each(function() {
            // console.log($(this).val())
            if ($(this).val() != '') {
              txt.push($(this).val());
            }
          });
          var $descp = $('.descpFile');
          $descp.each(function() {
            // console.log($(this).val())
            if ($(this).val() != '') {
              descp.push($(this).val());
            }
          });
          // console.log(doc.length > 0 && txt.length > 0 && descp.length > 0);
          if (doc.length > 0 && txt.length > 0 && descp.length > 0) {
            $.ajax({
              "url":   "/admin/action/actionDocument.php",
              "type": "POST",
              "async": false,
              "data": {
                doc: doc,
                txt: txt,
                descp: descp,
                projectname: projectname,
                count: count
              },
              "success": function(data) {
                var data = JSON.parse(data);
                alert(data.msg);
                location.reload(true)
                // window.location.href = "/admin/projects.php";
              }
            });
          } else {
            alert("Please fill all details to upload document")
          }
        }
        
      });
      $("body").on("change", ".documentUpload", function(e) {
        var el = $(this);
        var count = $('.docs').length - 1;
        var file = this.files[0];
        var size = this.files[0].size;
        // if (size > 2 * 1024 * 1024) {
        if (size > 50 * 1024 * 1024) {
          alert("Too large file. Only file smaller than 50MB can be uploaded.");
        } else {
          var form = new FormData();
          form.append("fileToUpload", file);
          // $.ajax({
          //   url: urlpath + "admin/action/fileExist.php",
          //   type: "POST",
          //   data: { fname: file.name, pname: 'doc' },
          //   success: function(data) {
          //     if (data == true) {
          //       console.log(1);
          //       alert('File with this name alreay exists.');
          //       return false;
          //     } else {
          //       console.log(2);
                // el.addClass('loader');
                $('#btnSaveDocs').css({'opacity': 0.5});
                $.ajax({
                  url: "/admin/action/uploadDocumentPrj.php",
                  type: "POST",
                  cache: false,
                  contentType: false, // important
                  processData: false, // important
                  data: form,
                  success: function(data) {
                    var data = JSON.parse(data);
                    //console.log(data);
                    if (data.status == "success") {
                      $("#docFileVal_" + count).val("/admin/documents/" + data.msg);
                    } else {
                      alert(data.msg)
                    }
                    // el.removeClass('loader');
                    $('#btnSaveDocs').css({'opacity': 1});
                  }
                });
          //     }
          //   }
          // });
        }
      });
      $("body").on("click", "#addMore", function(e) {
        var count = $('.docs').length;
        $("#countForm").val(count + 1);
        var formMoreDocs = $('#addDivMore');
        // var html = '   <div class="form-row docs">  ' + '                 <div class="col-sm-3">  ' + '                 <input type="file" class="form-control documentUpload">  ' + '                 <input type="hidden" class="linkFile" name="docFileVal_' + count + '" id="docFileVal_' + count + '" value="">  ' + '               </div>  ' + '               <div class="col-sm-3">  ' + '                 <input type="text" class="form-control txtFile" id="docText_' + count + '" placeholder="Enter Document name">  ' + '               </div>  ' + '               <div class="col-sm-5">  ' + '                   <textarea class="form-control descpFile" id="docDescp_' + count + '" placeholder="Enter short description" rows="1"></textarea>  ' + '               </div>  ' + '               <div class="col-sm-1">  ' + '                   <a href="#" class="removeImg far fa-trash-alt" style="font-size: 17px; margin: 8px;"></a>  ' + '               </div>  ' + '          </div>  ';

        var html = '<div class="row docs"><div> <input type="file" class="form-control documentUpload"> <input type="hidden" class="linkFile" name="docFileVal_' + count + '" id="docFileVal_' + count + '" value=""> </div><div> <input type="text" class="form-control txtFile" id="docText_' + count + '" placeholder="Enter Document name"> </div><div> <textarea class="form-control descpFile" id="docDescp_' + count + '" placeholder="Enter short description" rows="1"></textarea> </div><div> <a href="#" class="removeImg" data-uniquename=""><span class="icon-trash-empty"></span>Remove</a> </div></div>';
        $(html).insertBefore(formMoreDocs);
      });
      $("body").on("click", ".removeImg", function(e) {
        e.preventDefault();
        var uniquename = $(this).data("uniquename");
        if (uniquename != '') {
          var check = confirm("Are you sure to delete this Document?");
          if (check) {
                $.ajax({
                    "url": "/admin/action/actionDeleteDocument.php",
                    "type": "POST",
                    "async": false,
                    "data": { uniquename: uniquename },
                    "success": function(data) {
                        var data = JSON.parse(data);
                        if (data.status == "success") {
                            alert(data.msg);
                            // window.location.href = "/admin/projects.php";
                            $(this).parent().parent().remove();

                        } else { alert(data.msg); }
                    }
                });
            }
        }
        else
        {
          $(this).parent().parent().remove();
        }
        if($('.docs').length == 0)
        {
          $('#addMore').trigger('click');
        }
      });
    });
    </script>
  </div>
  <?php else: header("Location:".http_Site); ?>
  <?php endif; ?> </body>

  </html>
