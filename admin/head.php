<?php include '../core.php'; ?>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <?php $path= (empty($_SESSION))?http_Site:http_Site.'admin/projects.php'; ?>
                <a class="navbar-brand" href="<?php echo $path; ?>">
                    <img src="../images/leona-munro-logo-white.png" alt=""> </a>
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
                <?php endif; ?>
            </ul>
        </div>
    </nav>