<?php include 'head.php'; ?>
<?php if(!empty($_SESSION) && array_key_exists("username", $_SESSION)): ?>
<?php include '../model_base.php'; ?>
<?php  $data = Model_Base::query("SELECT * FROM subscribes ORDER BY  id DESC"); ?>
<div class="container">
  <h3 class="title"><span>Subscribe</span></h3>
  <p></p>
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Sr.no</th>
        <th>Email</th>
        <th>Subscribed Date</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Sr.no</th>
        <th>Email</th>
        <th>Subscribed Date</th>
      </tr>
    </tfoot>
    <tbody>
      <?php if(!empty($data)): ?>
      <?php foreach ($data as $key => $value) : ?>
      <tr>
        <td>
          <?php echo count($data)-$key; ?>
        </td>
        <td>
          <?php echo $value->email; ?>
        </td>
        <td>
          <?php echo date("d-m-Y",  strtotime($value->date_added)); ?>
        </td>
      </tr>
      <?php endforeach; ?>
      <?php endif; ?> </tbody>
  </table>
</div>
<script>
$(document).ready(function() {
  $('#example').DataTable();
});
</script>
<?php else: header("Location:".http_Site); ?>
<?php endif; ?> </body>

</html>