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
                <ul class="navbar-nav mr-auto ">
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
                <div class="phone mr-4 	d-none d-lg-block ">
                    <img src="uploud/Adress.svg" alt="ds"> <span>г. Домодедово, ул. Курыжова</span>

                </div>
                <button type="button" class="btn btn--viabr d-none d-lg-block">Выбрать квартиру <img src="uploud/Vector-right.svg" alt="">
                </button>
            </div
        </nav>
    </div>
    <hr>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand mr-auto" href="#"><img src="uploud/2020.svg" alt="main_logo">
                </a>
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
                <a class="zakaz d-none d-lg-block" href="#">Заказать звонок</a>
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
    <div class="carousel-inner slider">
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

<div class="container-fluid">
    <div class="main--filter ">
        <div class="filters--form">
            <div class="form-row">
                <div class="col-lg-6"><span>Выбрать квартиру</span></div>
                <div class="col-lg-6 text-right"><a href="">Показать на карте <img src="uploud/location.svg"
                                                                                   alt=""></a></div>
                <div class="col-12 col-md-4 col-lg">Комнатность
                    <div class="btn-group w-100 button-ck" data-toggle="buttons">
                        <label class="btn btn-outline-secondary">
                            <input type="checkbox">C</label>
                        <label class="btn btn-outline-secondary">
                            <input type="checkbox">1</label>
                        <label class="btn btn-outline-secondary">
                            <input type="checkbox">2</label>
                        <label class="btn btn-outline-secondary">
                            <input type="checkbox">3</label>
                        <label class="btn btn-outline-secondary">
                            <input type="checkbox">4+</label>

                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg">
                    Площадь, м²
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputEmail1" placeholder="от">
                        <input type="text" class="form-control" id="inputEmail1" placeholder="до">
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg">
                    Стоимость,₽
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputEmail2" placeholder="от">
                        <input type="text" class="form-control" id="inputEmail2" placeholder="до">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    Этаж
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="от">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="до">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <div class="form-check" style="padding-top: 10px;">
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox"
                               value="option1"> <span>не первый</span>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox"
                               value="option2"> <span>не последний</span>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="cl">
                        <button type="button" class="btn btn--search w-100">Найти</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-block">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-block">
                    <div class="row no-gutters">
                        <div class="col-lg-6" style="padding: 30px;">
                            <h5>Москва ближе, чем кажется</h5>
                            <p>
                                Современные квартиры недалеко <br> от ставлицы с видомна лес и прекрасный <br> природный
                                ландшафт
                            </p>
                            <span><b>Живи в эко-среде!</b></span>
                            <div class="news-staty">
                                <img src="uploud/attention.svg" alt="">
                                <a href="#">Повышение цен 30.08</a>
                            </div>
                        </div>
                        <div class="col-lg-6"><img style="height: 425px; width: 100%;" src="uploud/fon-logo.jpg"
                                                   alt="ds">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">


                <div class="row">
                    <div class="col-12">

                        <div class="card"
                        ">
                        <img class="card-img-top" src="uploud/Image3.png" alt="Card image cap">
                        <div class="card-body row ">

                            <div class="col-12"><span class="Cost">Стоимость м²</span></div>
                            <div class="col-6"><span class="Price"><b>от 99 9999 руб.</b> </span></div>
                            <div class="col-6 text-center">
                                <button type="button" class="btn btn-mycolor btn-lg">Показать</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="info-block-slider">
        <div class="row">
            <div class="col-lg-5">
                <div class="info-block-slider-left">
                    <div id="Mycarousel" class="carousel slide" data-ride="carousel" data-interval=false>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12"><p>«Южное Домодедово» – это новый жилой комплекс, расположенный
                                            в ближайшем Подмосковье, в городе Балашиха, в 7 км от МКАД по Носовихинскому
                                            шоссе.</p></div>
                                    <div class="col-6">
                                        <div class="col-12 info--1"
                                        <span>CРОК СДАЧИ: </span></div>
                                    <div class="col-12 info--2"
                                    <span>дом сдан</span></div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 info--1"
                                <span>ДОМОВ: </span></div>
                            <div class="col-12 info--2"
                            <span>81 m2</span></div>
                    </div>
                    <div class="col-6">
                        <div class="col-12 info--1"
                        <span>ЭТАЖНОСТЬ: </span></div>
                    <div class="col-12 info--2"
                    <span>3.5</span></div>
            </div>
            <div class="col-6">
                <div class="col-12 info--1"
                <span>ТИП ДОМА: </span></div>
            <div class="col-12 info--2"
            <span>Монолитно-кирпичный</span></div>
    </div>
</div>
</div>
<div class="carousel-item">
    <div class="row">
        <div class="col-12"><p>«Южное Домодедово» – это новый жилой комплекс, расположенный
                в ближайшем Подмосковье, в городе Балашиха, в 7 км от МКАД по Носовихинскому
                шоссе.</p></div>
        <div class="col-6">
            <div class="col-12 info--1"
            <span>CРОК СДАЧИ: </span></div>
        <div class="col-12 info--2"
        <span>дом сдан</span></div>
</div>
<div class="col-6">
    <div class="col-12 info--1"
    <span>ДОМОВ: </span></div>
<div class="col-12 info--2"
<span>81 m2</span></div>
</div>
<div class="col-6">
    <div class="col-12 info--1"
    <span>ЭТАЖНОСТЬ: </span></div>
<div class="col-12 info--2"
<span>3.5</span></div>
</div>
<div class="col-6">
    <div class="col-12 info--1"
    <span>ТИП ДОМА: </span></div>
<div class="col-12 info--2"
<span>Монолитно-кирпичный</span></div>
</div>
</div>
</div>
<div class="carousel-item">
    <div class="row">
        <div class="col-12"><p>«Южное Домодедово» – это новый жилой комплекс, расположенный
                в ближайшем Подмосковье, в городе Балашиха, в 7 км от МКАД по Носовихинскому
                шоссе.</p></div>
        <div class="col-6">
            <div class="col-12 info--1"
            <span>CРОК СДАЧИ: </span></div>
        <div class="col-12 info--2"
        <span>дом сдан</span></div>
</div>
<div class="col-6">
    <div class="col-12 info--1"
    <span>ДОМОВ: </span></div>
<div class="col-12 info--2"
<span>81 m2</span></div>
</div>
<div class="col-6">
    <div class="col-12 info--1"
    <span>ЭТАЖНОСТЬ: </span></div>
<div class="col-12 info--2"
<span>3.5</span></div>
</div>
<div class="col-6">
    <div class="col-12 info--1"
    <span>ТИП ДОМА: </span></div>
<div class="col-12 info--2"
<span>Монолитно-кирпичный</span></div>
</div>
</div>
</div>
<div class="fk">
    <ol class="carousel-indicators block">
        <li data-target="#Mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#Mycarousel" data-slide-to="1"></li>
        <li data-target="#Mycarousel" data-slide-to="2"></li>
    </ol>
    <a class="carousel-control-prev btn--prev" href="#Mycarousel" role="button"
       data-slide="prev">
        <span class="carousel-control-prev-icon btn--icon w-100" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next btn--next" href="#Mycarousel" role="button"
       data-slide="next">
        <span class="carousel-control-next-icon btn--icon w-100" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>


</div>
</div>
<div class="fon-left"></div>
</div>
<div class="col-lg-7">

    <div id="carouselEx" class="carousel slide" data-ride="carousel" data-interval=false>
        <div class="carousel-inner lop">
            <div class="carousel-item active">
                <img src="uploud/image.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="uploud/image.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="uploud/image.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-next next--btn" href="#carouselEx" role="button" data-slide="next">
            <span class="carousel-control-next-icon icon--btn" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="fon-right"></div>
</div>
</div>
</div>
</div>
</div>
<div class="planirovka">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <h3>Планировки</h3>
        </div>
        <div class="col-lg-7">
            <ul class="nav pills" id="pills-tab" role="tablist">
                <li class="col-lg">
                    <a class="col-link active" id="pills-1kv-tab" data-toggle="pill" href="#pills-1kv" role="tab"
                       aria-controls="pills-1kv" aria-selected="true">1-комнатные</a>
                </li>
                <li class="col-lg">
                    <a class="col-link" id="pills-2kv-tab" data-toggle="pill" href="#pills-2kv" role="tab"
                       aria-controls="pills-2kv" aria-selected="false">2-комнатные</a>
                </li>
                <li class="col-lg">
                    <a class="col-link" id="pills-3kv-tab" data-toggle="pill" href="#pills-3kv" role="tab"
                       aria-controls="pills-3kv" aria-selected="false">3-комнатные</a>
                </li>
                <li class="col-lg">
                    <a class="col-link" id="pills-4kv-tab" data-toggle="pill" href="#pills-4kv" role="tab"
                       aria-controls="pills-4kv" aria-selected="false">4-комнатные</a>
                </li>
            </ul>

        </div>
        <div class="col-lg-2 text-right link-kv"><a href="#"><span>Все квартиры <img src="uploud/2131.svg" alt="32W"></span></a></div>
        <div class="col-lg">
            <div class="tab-content tab--content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1kv" role="tabpanel" aria-labelledby="pills-1kv-tab">

                    <!--                    карты-->
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                  </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                    <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                  </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                    <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                  </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                    <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                  </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                    <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>

                    </div>
                    <!--                    карты-->


                </div>
                <div class="tab-pane fade" id="pills-2kv" role="tabpanel" aria-labelledby="pills-2kv-tab">
                    <!--                    карты-->
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>

                    </div>
                    <!--                    карты-->
                </div>
                <div class="tab-pane fade" id="pills-3kv" role="tabpanel" aria-labelledby="pills-3kv-tab">
                    <!--                    карты-->
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>

                    </div>
                    <!--                    карты-->
                </div>
                <div class="tab-pane fade" id="pills-4kv" role="tabpanel" aria-labelledby="pills-4kv-tab">
                    <!--                    карты-->
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top p-4" src="uploud/planirovka.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>1C-26-Л-Д(2.2)</b></h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <small class="text-muted">Проект </small>
                                        <br>
                                        <span><b>Квартал Некрасовка </b></span>
                                    </div>
                                    <div class="col-lg-3"><small class="text-muted">Корпус</small>
                                        <br>
                                        <span>5</span>
                                    </div>
                                    <div class="col-lg-4"><small class="text-muted">Площадь</small>
                                        <br>
                                        <span>26.7 м²</span></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span><b>от 4 419 390 руб.</b></span><br>
                                <small class="text-muted">1 квартира этого типа</small>
                            </div>
                        </div>

                    </div>
                    <!--                    карты-->
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

</body>