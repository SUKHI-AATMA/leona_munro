<?php include '../core.php'; ?>

<head>
    <title>Leona Munro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="https://leonamunro.co.nz/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://leonamunro.co.nz/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://leonamunro.co.nz/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://leonamunro.co.nz/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://leonamunro.co.nz/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://leonamunro.co.nz/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://leonamunro.co.nz/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://leonamunro.co.nz/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://leonamunro.co.nz/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://leonamunro.co.nz/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://leonamunro.co.nz/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://leonamunro.co.nz/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://leonamunro.co.nz/images/icons/favicon-16x16.png">
    <!-- <link rel="manifest" href="https://leonamunro.co.nz/images/icons/manifest.json"> -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://leonamunro.co.nz/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>


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