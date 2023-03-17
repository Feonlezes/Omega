<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omega</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="./assets/js/bootstrap.js" defer></script>
    <script src="./assets/js/jquery-3.3.1.min.js" defer></script>
    <script src="./assets/js/script.js" defer></script>
</head>
<body>
<!-- header -->
<header class="header__bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a href="index.php"><img src="assets/images/logo.png" alt="logo" class="header__logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="">О нас</a></li>
                            <li class="nav-item"><a class="nav-link" href="afisha.php">Афиша</a></li>
                            <li class="nav-item"><a class="nav-link" href="find.php">Где нас найти?</a></li>
                        </ul>
                        <div class="d-flex" id="btnLoginReg">
                            <? if($_SESSION['true'] == true): ?>
                                <a href="cart.php"><button class="btn btn-primary btn__left" id="btnCart">В корзину</button></a>
                                <a href="logout.php"><button class="btn btn-primary btn__left" id="btnExit">Выйти</button></a>
                            <? else: ?>
                                <a href="login.php"><button class="btn btn-primary btn__left" id="btnLogin">Войти</button></a>
                                <a href="reg.php"><button class="btn btn-primary btn__left" id="">Зарегестрироваться</button></a>
                            <? endif; ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
<!-- end header -->