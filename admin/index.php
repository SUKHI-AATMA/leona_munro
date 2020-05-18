<?php ob_start();
include 'head.php'; ?>
<?php include '../model_base.php'; ?>
<?php if(empty($_SESSION)): ?>
<div class="container bodyContent">
    <!-- <h2>Login</h2> -->
    <form>
        <div class="form-group"> <label class="control-label col-sm-4" for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group"> <label class="control-label col-sm-4" for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="form-group formBtn">
            <button type="submit" class="button" id="btnLoginAdmin">Submit</button>
        </div>
    </form>
</div>
<script>
function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    } else {
        return false;
    }
}
$(document).ready(function() {
    $("body").on("click", "#btnLoginAdmin", function(e) {
        e.preventDefault();
        var username = $("#email").val();
        var pwd = $("#pwd").val();
        if (username != "" && pwd != "") {
            if (validateEmail(username)) {
                $.ajax({
                    "url": "/admin/action/actionLogin.php",
                    "type": "POST",
                    "async": false,
                    "data": {
                        username: username,
                        pwd: pwd
                    },
                    "success": function(data) {
                        var data = JSON.parse(data);
                        if (data.status == "success") {
                            window.location.href = "/admin/projects.php";
                        } else {
                            alert(data.msg)
                        }
                    }
                });
            } else {
                alert('Invalid Email Address');
            }
        } else {
            alert("Fill all details");
        }
    });
});
</script>
<?php else:
 header("Location:/admin/projects.php"); ?>
<?php endif;
ob_end_flush();
 ?>
</body>

</html>