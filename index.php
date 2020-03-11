<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <!--    <link rel="stylesheet" href="css/new-style.css">-->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Bootstrap CSS -->

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/components/navbar/">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-grid.min.css">
    <!-- Bootstrap CSS -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.nice-select.js"></script>
</head>
<body>
<header>


    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link nav--link" href="#">Проекты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link" href="#">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link" href="#">Офисы продаж</a>
                    </li>
                </ul>
                <div class="phone mr-4">
                    <img src="uploud/Adress.svg" alt="ds"> <span>г. Домодедово, ул. Курыжова</span>

                </div>
                <button type="button" class="btn btn--viabr">Выбрать квартиру <img src="uploud/Vector-right.svg" alt="">
                </button>
            </div
        </nav>
    </div>
    <hr>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand" href="#"><img src="uploud/2687789277888.svg" alt="main_logo">
                </a>
                <ul class="list--logo mr-auto">
                    <li>ЖИЛОЙ КОМПЛЕКС</li>
                    <li><h2>Южное Домодедово</h2></li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link nav--link" href="#">О проекте</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link" href="#">О Квартиры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link" href="#">Условия покупки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link" href="#">Контакты</a>
                    </li>
                </ul>
                <img src="uploud/Vector.svg" alt="vector">
                <a class="mr-auto telephony" href="tel:+7 (495) 228 18 23">+7 (495) 228 18 23</a>
                <a class="zakaz" href="#">Заказать звонок</a>
            </div
        </nav>
    </div>
</header>

<div id="newMycarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators Myindicators">
        <li data-target="#newMycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#newMycarousel" data-slide-to="1"></li>
        <li data-target="#newMycarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="uploud/carusel-block.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="uploud/carusel-block.png" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-item">
            <img src="uploud/carusel-block.png" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

</div>

<div class="section">
    <div class="container-fluid">
        <div class="main--filter ">
            <div class="filters--form">
                <div class="form-row">
                    <div class="col-lg-6"><span>Выбрать квартиру</span></div>
                    <div class="col-lg-6 text-right"><a href="">Показать на карте <img src="uploud/location.svg"
                                                                                       alt=""></a></div>
                    <div class="col-12 col-md-4 col-lg">Комнатность <br>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">C</button>
                            <button type="button" class="btn btn-secondary">1</button>
                            <button type="button" class="btn btn-secondary">2</button>
                            <button type="button" class="btn btn-secondary">3</button>
                            <button type="button" class="btn btn-secondary">4+</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg">
                        Площадь, м²
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="от">
                            <input type="password" class="form-control" id="inputEmail4" placeholder="до">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg">
                        Стоимость,₽
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="от">
                            <input type="password" class="form-control" id="inputEmail4" placeholder="до">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg">
                        Этаж
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="от">
                            <input type="password" class="form-control" id="inputEmail4" placeholder="до">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg">
                        <br>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox"
                                   value="option1"> не первый
                        </div>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox"
                                   value="option1"> не последний
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <br>
                        <button type="button" class="btn btn--search w-100">Найти</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>