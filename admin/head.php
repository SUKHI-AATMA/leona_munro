<?php include '../core.php'; ?>

<!DOCTYPE html>

<html lang="en">



<head>

    <title>Admin</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>

    <!-- <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script> -->

    <script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">    
    
    <!-- <style>
      .navbar-brand>img {
        width: 100px;
      }
      .navbar-brand {
        padding: 6px 30px 6px 20px;
      }
      .navbar-inverse .navbar-nav>li>a {
        color: #fff;
      }
      table a {
        color: #000;
      }
      h3.title {
        border-bottom: 1px solid #000;
        margin: 0 0 30px;
        padding: 30px 0 10px;
      }
      h3.title span {
        display: inline-block;
        padding: 4px 0px;
      }
      h3 a {
        float: right;
      }
      input,
      select {
        width: auto;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      }
      table {
        font-size: 14px !important;
      }
      .lds-ellipsis {
        /*display: none;*/
        position: relative;
        width: 64px;
        height: 64px;
        margin: 0;
        z-index: 10;
      }

      .lds-ellipsis div {
        position: absolute;
        top: 27px;
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background: #000;
        animation-timing-function: cubic-bezier(0, 1, 1, 0);
      }

      .lds-ellipsis div:nth-child(1) {
        left: 6px;
        animation: lds-ellipsis1 0.6s infinite;
      }
      .lds-ellipsis div:nth-child(2) {
        left: 6px;
        animation: lds-ellipsis2 0.6s infinite;
      }
      .lds-ellipsis div:nth-child(3) {
        left: 26px;
        animation: lds-ellipsis2 0.6s infinite;
      }
      .lds-ellipsis div:nth-child(4) {
        left: 45px;
        animation: lds-ellipsis3 0.6s infinite;
      }

      @keyframes lds-ellipsis1 {
        0% {
          transform: scale(0);
        }
        100% {
          transform: scale(1);
        }
      }
      @keyframes lds-ellipsis3 {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(0);
        }
      }
      @keyframes lds-ellipsis2 {
        0% {
          transform: translate(0, 0);
        }
        100% {
          transform: translate(19px, 0);
        }
      }

      .checkbox input[type=checkbox],
      .checkbox-inline input[type=checkbox],
      .radio input[type=radio],
      .radio-inline input[type=radio] {
          position: relative;
          float: left;
          line-height: 1;
          height: 20px;
          margin: 0px 10px 0 0;
      }

      .checkbox label,
      .radio label {
          padding: 0;
      }

      a#addMore {
          text-decoration: none;
      }
      a#addMore:before {
          padding: 0 10px 0 0;
      }
      .navbar {
        margin: 10px;
      }

    </style> -->

</head>



<body>

    <nav class="navbar navbar-inverse">

        <div class="container-fluid">

            <div class="navbar-header">

                <?php $path= (empty($_SESSION))?http_Site:http_Site.'admin/projects.php'; ?>

                <a class="navbar-brand" href="<?php echo $path; ?>">

                    <img src="../images/Leona-munro.png" alt=""> </a>

            </div>

            <?php if (!empty($_SESSION)): ?>

            <ul class="nav navbar-nav lhs">

                <li>

                    <a href="<?php echo http_Site; ?>admin/projects.php">Projects</a>

                </li>

                <!--        <li>

          <a href="<?php echo http_Site; ?>subscribe.php">Subscribe</a>

        </li>

        <li>

          <a href="<?php echo http_Site; ?>timing.php">Working Hrs.</a>

        </li>-->

                <!--<li><a href="<?php echo http_Site; ?>article.php">Articles</a></li>-->

            </ul>

            <?php endif; ?>

            <ul class="nav navbar-nav navbar-right rhs">

                <?php if (empty($_SESSION)): ?>

                <li>

                    <!-- <a href="<?php echo http_Site; ?>">



            <span class="glyphicon glyphicon-log-in"></span>Login</a> -->

                </li>

                <?php else: ?>

                <li>

                    <a href="<?php echo http_Site.'admin/action/actionLogout.php'; ?>">

                        <span class="glyphicon glyphicon-log-out"></span> Logout</a>

                </li>

                <?php endif; ?> </ul>

        </div>

    </nav>