<?php include '../core.php'; ?>

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css"> -->

    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script> -->
    <script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link rel="stylesheet" href="/css/admin.css">
</head>

<body class="<?php echo pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME); ?>">

    <header>
        <div class="container">
            <div class="logo"><a href="/"><img src="/images/leona-munro-logo-rust.png" alt=""></a></div>
            <nav>
                <ul>
                    <?php if (!empty($_SESSION)): ?>
                    <li><a href="<?php echo http_Site; ?>admin/projects.php">Projects</a></li>
                    <li><a href="<?php echo http_Site.'admin/action/actionLogout.php'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <li></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
<!--     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <?php $path= (empty($_SESSION))?http_Site:http_Site.'admin/projects.php'; ?>
                <a class="navbar-brand" href="<?php echo $path; ?>">
                    <img src="../images/leona-munro-logo-rust.png" alt=""> </a>
            </div>
            
            <ul class="nav navbar-nav navbar-right rhs">
                <?php if (!empty($_SESSION)): ?>
                    <li>
                        <a href="<?php echo http_Site; ?>admin/projects.php">Projects</a>
                    </li>
                    <li>
                        <a href="<?php echo http_Site.'admin/action/actionLogout.php'; ?>">
                            <span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav> -->