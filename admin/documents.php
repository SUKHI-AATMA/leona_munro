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
  <div class="container">
    <h3>Project Documents :
      <?php echo ucwords($data[0]->project_name); ?> </h3>
    <p></p>
    <form class="form-horizontal">
      <input type="hidden" name="count" id="countForm" value="1" data-projectname="<?php echo $data[0]->uniquename; ?>" />
      <?php if(empty($documentData)): ?>
      <div class="form-group docs">
        <div class="col-sm-3">
          <input type="file" class="form-control documentUpload">
          <input type="hidden" class="linkFile" id="docFileVal_0" id="docFileVal_0" value=""> </div>
        <div class="col-sm-3">
          <input type="text" class="form-control txtFile" id="docText_0" placeholder="Enter Document name"> </div>
        <div class="col-sm-3">
          <textarea class="form-control descpFile" id="docDescp_0" placeholder="Enter short description" rows="1"></textarea>
        </div>
      </div>
      <?php else: ?>
      <?php foreach ($documentData as $key => $value) : ?>
      <div class="form-group docs">
        <div class="col-sm-3">
          <input type="file" class="form-control documentUpload">
          <input type="hidden" class="linkFile" id="docFileVal_<?php echo $key; ?>" value="<?php echo $value->link; ?>"> </div>
        <div class="col-sm-3">
          <input type="text" class="form-control txtFile" value="<?php echo $value->docName; ?>">

        </div>
        <div class="col-sm-3">
          <textarea class="form-control descpFile" rows="1">
            <?php echo $value->description; ?> </textarea>
        </div>
        <div class="col-sm-3">
          <a href='<?php echo $value->link; ?>'>[ DOCUMENT ]</a> 
          <a href="#" class="removeImg far fa-trash-alt">Remove</a>
        </div>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
      <div class="form-group" id="addDivMore">
        <div class="col-sm-3">
          <a href="#" id="addMore">
            <span class="far fa-plus-square"></span>&nbsp;&nbsp;&nbsp;Add more</a>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-primary" id="btnSaveDocs">Save</button>&nbsp;&nbsp;&nbsp;
          <a href="<?php echo http_Site.'admin/projects.php'; ?>" class="btn btn-info" role="button">Upload document later</a>
        </div>
      </div>
    </form>
    <script>
    $(document).ready(function() {
      $("#btnSaveDocs").click(function(e) {
        e.preventDefault();
        var count = $('.docs').length;
        var projectname = $('#countForm').data('projectname');
        var doc = [];
        var txt = [];
        var descp = [];
        if (count > 0) {
          var $linkFile = $('.linkFile');
          $linkFile.each(function() {
            if ($(this).val() != '') {
              doc.push($(this).val());
            }
          });
          var $imgs = $('.txtFile');
          $imgs.each(function() {
            if ($(this).val() != '') {
              txt.push($(this).val());
            }
          });
          var $descp = $('.descpFile');
          $descp.each(function() {
            if ($(this).val() != '') {
              descp.push($(this).val());
            }
          });
          if (doc.length > 0 && txt.length > 0 && descp.length > 0) {
            $.ajax({
              "url": "/admin/action/actionDocument.php",
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
                window.location.href = "/admin/projects.php";
              },
              error: function(data) {
                  alert(data);
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
                $.ajax({
                  url:  "/admin/action/uploadDocumentPrj.php",
                  type: "POST",
                  cache: false,
                  contentType: false, // important
                  processData: false, // important
                  data: form,
                  success: function(data) {
                    //console.log(data);
                    var data = JSON.parse(data);
                    if (data.status == "success") {
                      $("#docFileVal_" + count).val(urlpath + "admin/documents/" + data.msg);
                    } else {
                      alert(data.msg)
                    }
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
        var html = '   <div class="form-group docs">  ' + '                 <div class="col-sm-3">  ' + '                 <input type="file" class="form-control documentUpload">  ' + '                 <input type="hidden" class="linkFile" name="docFileVal_' + count + '" id="docFileVal_' + count + '" value="">  ' + '               </div>  ' + '               <div class="col-sm-3">  ' + '                 <input type="text" class="form-control txtFile" id="docText_' + count + '" placeholder="Enter Document name">  ' + '               </div>  ' + '               <div class="col-sm-3">  ' + '                   <textarea class="form-control descpFile" id="docDescp_' + count + '" placeholder="Enter short description" rows="1"></textarea>  ' + '               </div>  ' + '               <div class="col-sm-3">  ' + '                   <a href="#" class="removeImg far fa-trash-alt" style="font-size: 17px; margin: 8px;"></a>  ' + '               </div>  ' + '          </div>  ';
        $(html).insertBefore(formMoreDocs);
      });
      $("body").on("click", ".removeImg", function(e) {
        e.preventDefault();
        $(this).parent().parent().remove();
      });
    });
    </script>
  </div>
  <?php else: header("Location:".http_Site); ?>
  <?php endif; ?> </body>

  </html>
