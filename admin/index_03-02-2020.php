<?php include 'head.php'; ?><?php include '../model_base.php'; ?><?php if(empty($_SESSION)): ?><style>        form.form-horizontal {    background: #ccc;    border-radius: 5px;    float: left;    margin: 0 calc((100% - 400px) / 2);    padding: 30px;    width: 400px;  }</style><div class="container">    <!-- <h2>Login</h2> -->    <form class="form-horizontal">        <div class="form-group">            <label class="control-label col-sm-4" for="email">Email:</label>            <div class="col-sm-8">                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">            </div>        </div>        <div class="form-group">            <label class="control-label col-sm-4" for="pwd">Password:</label>            <div class="col-sm-8">                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">            </div>        </div>        <div class="form-group">                    <div class="col-sm-offset-4 col-sm-4">                <button type="submit" class="btn btn-default" id="btnLoginAdmin">Submit</button>            </div>        </div>    </form></div><script>    function validateEmail(sEmail) {        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;        if (filter.test(sEmail)) {            return true;        } else {            return false;        }    }    $(document).ready(function () {        $("body").on("click", "#btnLoginAdmin", function (e) {            e.preventDefault();            var username = $("#email").val();            var pwd = $("#pwd").val();            if (username != "" && pwd != "") {                if (validateEmail(username)) {                    $.ajax({                        "url": urlpath + "admin/action/actionLogin.php",                        "type": "POST",                        "async": false,                        "data": {                            username: username,                            pwd: pwd                        },                        "success": function (data) {                            var data = JSON.parse(data);                            if (data.status == "success") {                                window.location.href = urlpath+"admin/projects.php";                            } else {                                alert(data.msg)                            }                        }                    });                } else {                    alert('Invalid Email Address');                }            } else {                alert("Fill all details");            }        });    });</script><?php else: header("Location:".http_Site.'admin/projects.php'); ?><?php endif; ?></body></html>