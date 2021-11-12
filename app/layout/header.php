<!DOCTYPE html>
<html lang="es">
<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Jaguarpack Compras express">
    <meta name="keywords" content="Compras express, entregas, rapido">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="shortcut icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../css/animate.css" />
    <link rel="stylesheet" href="../css/owl.carousel.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <!-- Header section -->
    <header class="header-section clearfix sticky" id="menu">
        <div class="container-fluid">
            <a href="home.php" class="logosticky" id="logo">
                <img src="../img/logo-blanco.png" alt="" id="logotipo">
            </a>
            <div class="responsive-bar-sistema"><i class="fa fa-bars"></i></div>
            <nav class="main-menu">
                <ul class="menu-sistema">
                    <li class="nav-item dropdown">
                        <a class="dark nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <?php echo $Usuario?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="php/logout.php">Cerrar Sesion</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header section end -->