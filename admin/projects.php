<?php   include 'head.php';
include '../model_base.php';  
if(!empty($_SESSION) && array_key_exists("username", $_SESSION)): $data = Model_Base::query("Select project_name, uniquename, beds, toilet, parking, seating, sold from projects");?>
<div class="container bodyContent">
    <div class="title-wrap">
        <h3 class="title">
            <span>Projects</span>
            <a href="<?php echo http_Site.'admin/create.php' ?>" class="button" role="button">Add new project</a>
        </h3>
    </div>
    <table id="example" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>Project name <span class="sort"></span></th>
                <th>Beds <span class="sort"></span></th>
                <th>Bathroom <span class="sort"></span></th>
                <th>Garage <span class="sort"></span></th>
                <th>Living <span class="sort"></span></th>
                <th>Sold <span class="sort"></span></th>
                <th>Action</th>
            </tr>
        </thead>

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
                    <?php echo $value->toilet; ?>
                </td>
                <td>
                    <?php echo $value->parking; ?>
                </td>
                <td>
                    <?php echo $value->seating; ?>
                </td>
                <td>
                    <?php echo ($value->sold == 1)?'yes':'no'; ?>
                </td>
                <td>
                    <a href="<?php echo '/admin/edit.php?name='.$value->uniquename; ?>" data-toggle="tooltip" data-placement="top" title="Edit">
                        <span class="icon-edit"></span>
                    </a>
                    <a href="<?php echo '/admin/documents.php?name='.$value->uniquename; ?>" data-toggle="tooltip" data-placement="top" title="PDF" class="" data-uniquename="<?php echo $value->uniquename; ?>">
                        <span class="icon-file-pdf"></span>
                    </a>
                    <a href="#" class="deleteProject" data-toggle="tooltip" data-placement="top" title="Delete" data-uniquename="<?php echo $value->uniquename; ?>">
                        <span class="icon-trash-empty"></span>
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
    $('#example').DataTable({
        paging: false,
    });
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