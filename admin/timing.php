<?php
include 'head.php';
include '../model_base.php';
if(!empty($_SESSION) && array_key_exists("username", $_SESSION)): 
    $data = Model_Base::query("SELECT * FROM `sessiondates` ORDER BY `sessiondates`.`id` DESC");
?>
<link rel="stylesheet" href="js/jquery.datetimepicker.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.datetimepicker.full.min.js"></script>
  <div class="container">
    <div class="title-wrap">
        <h3>Open house sessions</h3>
    </div>

    <form class="form-horizontal">
        <input type="hidden" name="count" id="countForm" value="1"/>
        
        <?php if(empty($data)): ?>
            <div class="form-row">
                <div class="form-roww">
                    <input type="hidden" class="docId" value="0"/>
                    <div class="col-sm-3">
                    <input type="text" class="form-control datePicker sessionDate"  placeholder="Select date">
                    </div>
                    <div class="col-sm-3">
                    <input type="text" class="form-control datetimepicker sessionFromtime" id="email" placeholder="From time">
                    </div>
                    <div class="col-sm-3">
                    <input type="text" class="form-control datetimepicker sessionTotime" id="email" placeholder="To time">
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="removeImg far fa-trash-alt" style="padding:18px"></a>
                    </div>
                </div>
            </div>
        <?php else: ?>
        <?php foreach ($data as $key => $value) : ?>
            <div class="form-group docs">
                <input type="hidden" class="docId" value="<?php echo $value->id; ?>"/>
                <div class="col-sm-3">
                  <input type="text" class="form-control datePicker sessionDate" value="<?php echo $value->sessionDate; ?>">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control datetimepicker sessionFromtime" id="email" value="<?php echo $value->sessionFromtime; ?>">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control datetimepicker sessionTotime" id="email" value="<?php echo $value->sessionTotime; ?>">
                </div>
                <div class="col-sm-3">
                    <a href="#" class="removeImg far fa-trash-alt" style="font-size: 17px; margin: 8px;"></a>
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
        
        <div class="form-group" id="addDivMore">
            <div class="col-sm-3">
              <a href="#" id="addMore"><span class="far fa-plus-square"></span>&nbsp;&nbsp;&nbsp;Add more</a>
            </div>
        </div>
        

        <div class="form-group form-btn">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" id="btnSaveTime">Save</button>
            </div>
        </div>


    </form>
  </div>
  <script>
  $(document).ready(function() {
    datePickerPlugin();
    
    $("#btnSaveTime").click(function(e){
        e.preventDefault();
        var count = $('.docs').length;
        alert(count)
        if(count > 0){
            var sessionDate =[];
            var sessionFromtime =[];
            var sessionTotime =[];
            var docId =[];
            
            var $docId = $('.docId');
            $docId.each(function () {
                if($(this).val() != ''){
                    docId.push($(this).val());
                }
            });
            
            
            var $linkFile = $('.sessionDate');
            $linkFile.each(function () {
                if($(this).val() != ''){
                    sessionDate.push($(this).val());
                }
            });

            var $imgs = $('.sessionFromtime');
            $imgs.each(function () {
                if($(this).val() != ''){
                    sessionFromtime.push($(this).val());
                }
            });

            var $descp = $('.sessionTotime');
            $descp.each(function () {
                if($(this).val() != ''){
                    sessionTotime.push($(this).val());
                }
            });
            
            if(sessionFromtime.length > 0 && sessionTotime.length > 0 && sessionDate.length > 0){

                    $.ajax({
                        "url": urlpath + "admin/action/actionSession.php",
                        "type": "POST",
                        "async": false,
                        "data": {
                            sessionFromtime: sessionFromtime,
                            sessionTotime: sessionTotime,
                            docId:docId,
                            sessionDate: sessionDate,
                            count: count
                        },
                        "success": function (data) {
                            console.log(data)   
                           // var data = JSON.parse(data);
                            //alert(data.msg);
                            //window.location.href = urlpath+"admin/projects.php";
                        }
                    });
                }else{
                    alert("Please fill all details")
                }
        }
    });
    
    $("body").on("click", "#addMore", function (e) {
            var count = $('.docs').length;
            $("#countForm").val(count+1);

            var formMoreDocs = $('#addDivMore');
            var html =  '          <div class="form-group docs">  '  + 
                        '               <input type="hidden" class="docId" value="0"/>  '  + 
                        '               <div class="col-sm-3">  '  + 
                        '                 <input type="text" class="form-control datePicker sessionDate"  placeholder="Select date">  '  + 
                        '               </div>  '  + 
                        '               <div class="col-sm-3">  '  + 
                        '                 <input type="text" class="form-control datetimepicker sessionFromtime" id="email" placeholder="From time">  '  + 
                        '               </div>  '  + 
                        '               <div class="col-sm-3">  '  + 
                        '                 <input type="text" class="form-control datetimepicker sessionTotime" id="email" placeholder="To time">  '  + 
                        '               </div>  '  + 
                        '               <div class="col-sm-3">  '  + 
                        '                   <a href="#" class="removeImg far fa-trash-alt" style="font-size: 17px; margin: 8px;"></a>  '  + 
                        '               </div>  '  + 
                        '          </div>  ' ; ;             
            $(html).insertBefore(formMoreDocs);
            datePickerPlugin();
        });
        
        $("body").on("click", ".removeImg", function (e) {
            e.preventDefault();
            $(this).parent().parent().remove();
        });
  });
  
  
  function datePickerPlugin(){
    $('.datetimepicker').datetimepicker({
        datepicker:false,
        format:'H:i'
    });
    
    $.datetimepicker.setLocale('de');

    $('.datePicker').datetimepicker({
        i18n:{
         de:{
          months:[
           'Januar','Februar','März','April',
           'Mai','Juni','Juli','August',
           'September','Oktober','November','Dezember',
          ],
          dayOfWeek:[
           "So.", "Mo", "Di", "Mi", 
           "Do", "Fr", "Sa.",
          ]
         }
        },
        timepicker:false,
        format:'d/m/Y',
        minDate:'-1970/01/02'
    });
  }
  </script>
  <?php else: header("Location:".http_Site); ?>
  <?php endif; ?> </body>

  </html>