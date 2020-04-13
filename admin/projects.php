<?php   include 'head.php';
include '../model_base.php';  
if(!empty($_SESSION) && array_key_exists("username", $_SESSION)): $data = Model_Base::query("Select project_name, uniquename, beds, area, featured, date_added, status from projects");?>
<div class="container">
    <div class="title-wrap">
        <h3 class="title">
            <span>Projects</span>
            <a href="<?php echo http_Site.'admin/create.php' ?>" class="btn btn-default" role="button">Add new project</a>
        </h3>
    </div>
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>Project name</th>
                <th>Beds</th>
                <th>Area</th>
                <th>Featured</th>
                <th>Date added</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Sr.no</th>
                <th>Project name</th>
                <th>Beds</th>
                <th>Area</th>
                <th>Featured</th>
                <th>Date added</th>
                <th>Action</th>
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
                    <?php echo $value->project_name; ?>
                </td>
                <td>
                    <?php echo $value->beds; ?>
                </td>
                <td>
                    <?php echo $value->area; ?>
                </td>
                <td>
                    <?php echo ($value->featured == 1)?'yes':'no'; ?>
                </td>
                <td>
                    <?php echo date('d-m-Y',strtotime($value->date_added)); ?>
                </td>
                <td>
                    <a href="<?php echo '/admin/edit.php?name='.$value->uniquename; ?>" style=" font-size: 16px;" data-toggle="tooltip" data-placement="top" title="Edit">
                        <span class="far fa-edit"></span>
                    </a>
                    <a href="#" class="deleteProject" style="float: right; font-size: 16px;" data-toggle="tooltip" data-placement="top" title="Delete" data-uniquename="<?php echo $value->uniquename; ?>">
                        <span class="far fa-trash-alt"></span>
                    </a>
                    <a href="<?php echo '/admin/documents.php?name='.$value->uniquename; ?>" style=" font-size: 16px;" data-toggle="tooltip" data-placement="top" title="PDF" class="" data-uniquename="<?php echo $value->uniquename; ?>">
                        <span class="far fa-file-pdf"></span>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
    $(document).on('click', ".deleteProject", function(e) {
        e.preventDefault();
        var uniquename = $(this).data("uniquename");
        var check = confirm("Are you sure to delete this project?");
        if (check) {
            if (uniquename != '') {
                $.ajax({
                    "url": "/admin/action/actionDeleteProject.php",
                    "type": "POST",
                    "async": false,
                    "data": { uniquename: uniquename },
                    "success": function(data) {
                        var data = JSON.parse(data);
                        if (data.status == "success") {
                            alert(data.msg);
                            window.location.href = "/admin/projects.php";
                        } else { alert(data.msg); }
                    }
                });
            }
        }
    });
});


$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>
<?php else: header("Location:".http_Site); ?>
<?php endif; ?>
</body>

</html>