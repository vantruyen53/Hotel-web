<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="../UserFE/style.css">

    <link rel="stylesheet" href="../components/mystyle.css">

    <title>Home Page</title>
</head>
<body class="home">

    <?php
        include('../components/navbar.php');
    ?>


    <header>
        <div class="container-fluid text-white position-relative">
            <div class="slogan-jp position-absolute">
                <h1>静けさと素朴さの宿</h1>
            </div>
            <div class="slogan-en text-center position-absolute">
                <h4>A</h4>
                <h4>Haven</h4>
                <h4>of</h4>
                <h4>Tranquility</h4>
                <h4>And</h4>
                <h4>Simplicity</h4>
            </div>
        </div>
    </header>

    <section class="about">
        <div class="container-fluid position-relative px-0 d-flex align-item-center">
            <div class="img position-absolute"><img src="../image/aboutus.png" alt=""></div>
            <div class="content py-5 mx-auto">
                <div class="title text-center mb-5"><h1>ABOUT US</h1><h5>CHERRY BLOSSOM</h5></div>
                <div class="text text-center">
                    <h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing <br>
                        elit. Enim mollitia veniam iure, consequuntur <br>
                        saepe repellat esse alias. Minima, consectetur tempora? <br>
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="serve position-relative">
        <img src="../image/serve-deco.png" alt="" class="position-absolute">
        
        <div class="title text-center text-white ">
            <div class="title-img "><img src="../image/title-serve.png" alt=""></div>
            <h1 >WELCOME</h1>
            <h5>CHERRY BLOSSOM</h5>
        </div>  

        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-6">
                    <div class="img position-relative h-100">
                        <img src="../image/serve1.jpg" alt="" class="h-100 w-100">
                        <div class="overlay">
                            <div class="text text-white">
                                <h2>MEALES</h2>
                                <h5>We offer you a dining experience that combines traditional Japanese cuisine with innovative creativity.</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">

                    <div class="img position-relative h-50">
                        <img src="../image/serve2.jpg" alt="" class="h-100 w-100">
                        <div class="overlay">
                            <div class="text text-white">
                                <h2>TEA CEREMONY</h2>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row h-50">

                        <div class="col-12 col-sm-6">
                            <div class="img position-relative h-50">
                                <img src="../image/serve4.jpg" alt="" class="h-100 w-100 py-3">
                                <div class="overlay">
                                    <div class="text text-white">
                                        <h2>HOT TUB</h2>
                                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="img position-relative h-50">
                                <img src="../image/serve5.webp" alt="" class="h-100 w-100">
                                <div class="overlay">
                                    <div class="text text-white">
                                        <h2>DETERMINATION EXPERIENCE</h2>
                                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="img position-relative h-100 pt-3">
                                <img src="../image/serve3.png " alt="" class="h-100 w-100">
                                <div class="overlay">
                                    <div class="text text-white">
                                        <h2>ENTHUSIASTIC SERVICE</h2>
                                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content text-center text-white">
            <h5>A HOSPITABLE ACCOMMODATION <br>
            WITH TRADITIONAL ATMOSPHERE
            </h5>
        </div>
        <div class="action-booking text-center">
            <a href="../UserFE/contact.php" class="text-decoration-none">CONTACT US</a>
        </div>
    </section>

    <section class="rooms">
        <div class="container-fluid position-relative">
            <div class="title text-center text-dark">
                <h1>ROOMS</h1>
                <h5>CHERRY BLOSSOM</h5>
            </div>
            <div class="room-imgs pb-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="room position-relative w-100 pb-3">
                            <img src="../image/Washitsu.jpg" alt="">
                            <div class="overlay d-flex flex-column text-center align-item-center">
                                <h1>WASHITSU </h1>
                                <h5>Enjoy the traditional Japanese experience</h5>
                            </div>
                        </div>
                        <div class="room position-relative w-100">
                            <img src="../image/Wayo-shitsu.jpg" alt="">
                            <div class="overlay d-flex flex-column text-center align-item-center">
                                <h1>WAYO-SHITSU</h1>
                                <h5>Enjoy the experience of traditional Japanese style combined with the comfort of a Western bed</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="room position-relative w-100 pb-3">
                            <img src="../image/Rotenburo-tsuki-Kyakushitsu.png" alt="">
                            <div class="overlay d-flex flex-column text-center align-item-center">
                                <h1>ROTENBURO-TSUKI-KYAKUSHITSU</h1>
                                <h5>Enjoy a luxurious stay and accommodation with an open-air bath combined with the natural scenery of Japanese style</h5>
                            </div>
                        </div>
                        <div class="room position-relative w-100">
                            <img src="../image/Luxury-Ryokan-Suite.jpg" alt="">
                            <div class="overlay d-flex flex-column text-center">
                                <h1>LUXURY-RYOKAN-SUITE</h1>
                                <h5>A luxury resort featuring multiple spacious rooms, encompassing a large garden and offering a traditional Japanese-style hinoki wood bath.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div> 
    </section>

    <section class="why-should-us position-relative">
        <div class="container-fluid ps-0">
            <div class="row px-0 ">
                <div class="col-12 col-lg-8 d-flex">
                    <div class="img">
                        <img src="../image/whyshouldus1.jpg" alt="">
                    </div>
                    <div class="img">
                        <img src="../image/whyshoudus2.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-4 d-flex ">
                    <div class="title text-center text-white my-auto px-5">
                        <h1>WHY SHOULD US</h1>
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ipsum.</h5>
                    </div>
                </div>
            </div>
            <div class="other-infor d-flex">
                <div class="block-infor mx-auto d-flex">
                    <div class="item text-white px-4 text-center border-start">
                        <div class="img pb-4"><img src="../image/other-infor1.jpg" alt="" class="w-100"></div>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                    </div>
                    <div class="item text-white px-4 text-center border-start">
                        <div class="img pb-4"><img src="../image/other-infor2.jpg" alt="" class="w-100"></div>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                    </div>
                    <div class="item text-white px-4 text-center border-start">
                        <div class="img pb-4"><img src="../image/other-infor3.jpg" alt="" class="w-100"></div>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                    </div>
                    <div class="item text-white px-4 text-center border-start border-end">
                        <div class="img pb-4"><img src="../image/other-infor4.jpg" alt="" class="w-100"></div>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include('../components/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="../components/custom.js"></script>
</body>
</html>