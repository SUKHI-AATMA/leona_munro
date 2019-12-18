<div class="modal" id="leadForm">
    <a href="javascript:;" class="close"></a>
  <div class="modalBody">
    <div class="wrap">
      <h3 style="">ENTER DETAILS TO DOWNLOAD PDF</h3>
      <div class="mat-div">
        <label for="pdfname" class="mat-label">YOUR NAME</label>
        <input type="text" class="mat-input" id="pdfname">
        <label for="" class="status"></label>
      </div>
      <div class="mat-div">
        <label for="pdfemail" class="mat-label">VALID EMAIL</label>
        <input type="text" class="mat-input" id="pdfemail">
        <label for="" class="status"></label>
      </div>
      <button id="downloadPDF">DOWNLOAD PDF</button>
      <label for="" class="success"></label>
    </div>
  </div>
</div>
<script>
$(document).on('click', '#downloadPDF', function() {
  var pdfname = $("#pdfname").val();
  var pdfemail = $("#pdfemail").val();
  var pdfpropertyIdval = $("#propertyIdval").text();
  if (!pdfname) {
    $("#pdfname").focus().parent().addClass('is-error').children('label.status').html("Please fill the name field").show();
    return false;
  } else {
    $("#pdfname").parent().removeClass('is-error').children('label.status').html('').hide();
  }
  if (!pdfemail) {
    $("#pdfemail").focus().parent().addClass('is-error').children('label.status').html("Please fill the email field").show();
    return false;
  } else if (!DEFAULTVARS.validateEmail(pdfemail)) {
  	$("#pdfemail").focus().parent().addClass('is-error').children('label.status').html("Please enter valid email id").show();
    return false;
  } else {
  	$("#pdfemail").parent().removeClass('is-error').children('label.status').html('').hide();
  }
  data = {
    pdfname: pdfname,
    pdfemail: pdfemail,
    pdfpropertyIdval: pdfpropertyIdval,
  };
  $('#downloadPDF').attr('disabled', true).addClass('send').val('Sending...');
  $.ajax({
    type: "POST",
    url: "includes/email-leadform.php",
    data: data,
    success: function(response) {
      $('#downloadPDF').attr('disabled', false).removeClass('send').val('DOWNLOAD PDF').siblings('label.success').html("THANK YOU! Your pdf will open in a new window.").css({ 'opacity': 1 });
    },
    error: function(response) {
      $('#downloadPDF').attr('disabled', false).removeClass('send').val('DOWNLOAD PDF');
      alert('There was a problem. Please try again');
    },
    complete: function(response) {}
  });
  setTimeout(function(){window.open($('#leadForm').attr('data-href'), '_blank')},500);

}).on('click', '.pdfLink', function(e) {
  e.preventDefault();
  var thhref = $(this).attr('data-href')
  $('#leadForm').show(500);
  $('#leadForm').attr('data-href',thhref);
})
</script>