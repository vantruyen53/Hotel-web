<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="/HotelWeb/UserFE/style.css">

    <link rel="stylesheet" href="/HotelWeb/components/mystyle.css">

    <title>Stay</title>
</head>
<body class="stay">

    <?php
        include('../components/navbar.php');
    ?>

    <header class="position-relative ">
        <div class="container position-relative d-flex justify-content-end align-items-center h-100">
            <div class="title text-white w-50 text-start">
                 <div class="sub">CHERRY BLOSSOM HOTEL'S ROOMS</div>
                <div class="main-title1">ENJOY</div>
                <div class="main-title2">YOUR TRIP</div>
            </div>
        </div>
    </header>

    <section>

         <!-- Link-room  -->
        <div class="type-of-room">
            <ul class="list-unstyled position-relative d-flex justify-content-center gap-5">
                <li><a href="#washitu" class="text-decoration-none position-relative">WASHITSU</a></li>
                <li><a href="#wayo-shitsu" class="text-decoration-none position-relative">WAYO-SHITSU</a></li>
                <li><a href="#rotenburo-tsuki-kyakushitsu" class="text-decoration-none position-relative">ROTENBURO-TSUKI-KYAKUSHITSU</a></li>
                <li><a href="#luxury-ryokan-suite" class="text-decoration-none position-relative">LUXURY-RYOKAN-SUITE</a></li>
            </ul>
        </div>
       
    </section>


    <!-- Room-infor -->
    <main class="room-list">
        <!-- WASHITSU -->
        <div class="container washitu  p-5  rounded-3" id="washitu">
            <div class="title text-center">WASHITSU</div>
            <div class="ro51 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/Washitsu.jpg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> 2 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 1 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 1 Big bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 1 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 1 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 30 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i> Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                        <input type="hidden" name="room-total" class="room-total" value="">

                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">200</span></button>
                </div>
            </div>

            <div class="ro52 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro52.png" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> 2 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 1 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 1 Big bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 1 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 1 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 30 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i> Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">200</span></button>
                </div>
            </div>

            <div class="ro53 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro53.webp" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> 2 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 1 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 1 Big bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 1 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 1 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 30 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i> Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                        
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">200</span></button>
                </div>
            </div>

            <div class="ro54 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro54.jpg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> 2 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 1 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 1 Big bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 1 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 1 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 30 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i> Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">200</span></button>
                </div>
            </div>
        </div>

        <!-- WAYO-SHITSU -->
        <div class="container wayo-shitsu my-5 p-5  rounded-3" id="wayo-shitsu">
            <div class="title text-center">WAYO SHITSU</div>
            <div class="ro61 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/wayo-shitsu.jpg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 4 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 1 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 1 Double bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 2 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 2 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 45 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">400</span></button>
                </div>
            </div>

            <div class="ro62 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro62.jpg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 4 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 1 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 1 Double bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 2 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 2 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 45 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">400</span></button>
                </div>
            </div>

            <div class="ro63 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro63.jpeg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 4 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 1 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 1 Double bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 2 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 2 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 45 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">400</span></button>
                </div>
            </div>

            <div class="ro64 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro64.jpg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 4 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 1 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 1 Double bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 2 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 2 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 45 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">400</span></button>
                </div>
            </div>
        </div>

        <!-- ROTENBURO-TSUKI-KYAKUSHITSU -->
         <div class="container rotenburo-tsuki-kyakushitsu my-5 p-5  rounded-3" id="rotenburo-tsuki-kyakushitsu">
            <div class="title text-center">ROTENBURO TSUKI KYAKUSHITSU</div>
            <div class="ro71 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/Rotenburo-tsuki-Kyakushitsu.png" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 5 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 2 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 3 Big bed </li>
                                        <li><i class="fa-solid fa-bath"></i> 2 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 4 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 50 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">900</span></button>
                </div>
            </div>

             <div class="ro72 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro72.jpg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 5 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 2 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 3 Big bed </li>
                                        <li><i class="fa-solid fa-bath"></i> 2 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 4 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 50 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">900</span></button>
                </div>
            </div>

             <div class="ro73 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro73.webp" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 5 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 2 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 3 Big bed </li>
                                        <li><i class="fa-solid fa-bath"></i> 2 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 4 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 50 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">900</span></button>
                </div>
            </div>

             <div class="ro74 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro74.webp" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 5 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 2 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 3 Big bed </li>
                                        <li><i class="fa-solid fa-bath"></i> 2 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 4 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 50 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">900</span></button>
                </div>
            </div>
        </div>

        <!-- LUXURY-RYOKAN-SUITE -->
         <div class="container luxury-ryokan-suite my-5 p-5  rounded-3" id="luxury-ryokan-suite">
            <div class="title text-center">LUXURY RYOKAN SUITE</div>
            <div class="ro81 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/Luxury-ryokan-suite.jpg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 7 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 3 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 4 Big bed and 1 Double bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 3 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 5 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 70 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">1400</span></button>
                </div>
            </div>

             <div class="ro82 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro82.jpg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 7 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 3 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 4 Big bed and 1 Double bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 3 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 5 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 70 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">1400</span></button>
                </div>
            </div>

             <div class="ro83 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro83.jpg" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 7 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 3 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 4 Big bed and 1 Double bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 3 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 5 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 70 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                         <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">1400</span></button>
                </div>
            </div>

            <div class="ro84 room-card border border-start-0 border-end-0 py-3">
                <div class="row">
                    <div class="infor-room col-12 col-md-7">
                        <div class="row ">
                            <div class="img col-12 col-sm-6"><img src="../image/typeofroom/ro84.png" alt=""></div>
                            <div class="infor-detail col-12 col-sm-6">
                                <div class="title"></div>
                                <div class="descrip-room d-flex justify-content-around pt-3">
                                    <ul class="list-unstyled text-start" >
                                        <li><i class="fa-solid fa-user"></i> &#60 7 Adults</li>
                                        <li> <i class="fa-solid fa-child"></i> 3 Child &#60 12 age</li>
                                        <li><i class="fa-solid fa-bed"></i> 4 Big bed and 1 Double bed</li>
                                        <li><i class="fa-solid fa-bath"></i> 3 Bath room</li>
                                        <li><i class="fa-solid fa-fan"></i> 5 Ari conditioner</li>
                                    </ul>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="fa-solid fa-expand"></i> 70 m²</li>
                                        <li><i class="fa-solid fa-expand"></i> Wifi</li>
                                        <li><i class="fa-solid fa-tv"></i>    Smart TT</li>
                                        <li><i class="fa-solid fa-ban-smoking"></i> No-smoking</li>
                                        <li><i class="fa-solid fa-money-bill-1-wave"></i> $<span class="room-price"></span>/Person</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                        
                    </div>
                    <form class="calender-room col-12 col-md-5" id="submit">
                        <div class="select-calender">
                            <?php
                                include('../components/calenderOfRoom.php');
                            ?>
                        </div>
                        <?php
                            include('../components/numberCustomer.php')
                        ?>
                        <input type="hidden" name="img-room" class="room-img" value="">
                        <input type="hidden" name="room-name" class="room-name" value="">
                        <input type="hidden" name="room-total" class="room-total" value="">
                    </form>
                </div>
                <div class="pt-3 infor-room-footer d-flex justify-content-between align-items-center">
                    <div class="count-room ms-5">ONLY <span id="only-room">1</span></div>
                    <button class="book-btn">$<span id="total-room" class="total-room">1400</span></button>
                </div>
            </div>
        </div>
    </main>

    <?php
        include('../components/modalMessageSuccess.php');
    ?>


    <?php
        include('../components/footer.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
    // Load room's name and price 
    const roomName = document.querySelectorAll('.container .infor-room .title');
    const roomPrice = document.querySelectorAll('.room-price');
    document.addEventListener('DOMContentLoaded', function(){
        fetch('../BE/requestRoomInfor.php')
        .then(response =>response.json())
        .then(data =>{
            data.forEach((item, index) =>{
                if(roomName[index]){
                    roomName[index].textContent = item.roomName;
                }
                if(roomPrice[index]){
                    roomPrice[index].textContent = item.roomTypePrice;
                }
            })
        })
    })


    // Show total for room 
    document.addEventListener('input', function(e){
        if(e.target.classList.contains('adults')||e.target.classList.contains('childrens')){
            const card = e.target.closest('.room-card');
            updatePrice(card);
        }
    })
    function updatePrice(card) {
        let roomPrice = card.querySelector('.room-price').textContent;
        const adults = parseInt(card.querySelector('.adults').value) || 2;
        const children = parseInt(card.querySelector('input.childrens').value) || 0;
        
        const total = roomPrice * adults + roomPrice * children / 2;
        card.querySelector('.total-room').textContent = total;
    }


    // Check infor is empty
    const btnSelect = document.querySelectorAll('.book-btn');
    btnSelect.forEach(btn =>{
            btn.addEventListener('click', function(e){
            e.preventDefault();

            const card = e.target.closest('.room-card');
            const checkIn = card.querySelector('input.check-in-date').value;
            const checkOut = card.querySelector('input.check-out-date').value;
            const adults = card.querySelector('input.adults').value;
            const children = card.querySelector('input.childrens').value;
            const roomName = card.querySelector('.container .room-card .infor-room .infor-detail .title').textContent;
            const totalRoom= card.querySelector('span.total-room').textContent;

            card.querySelector('.room-img').value = card.querySelector('.img img').src;
            card.querySelector('.room-name').value = card.querySelector('.infor-detail .title').textContent;
            card.querySelector('.room-total').value = card.querySelector('span#total-room').textContent;

            if(!checkIn ){
                card.querySelector('.check-in-date').classList.add('error');
            } else {
                card.querySelector('.check-in-date').classList.remove('error');
                if (!checkOut){
                card.querySelector('.check-out-date').classList.add('error');
                }else {
                    card.querySelector('.check-out-date').classList.remove('error');
                    console.log('submit ben user dc r')
                    const form = card.querySelector('#submit');
                    form.action = "book.php";
                    form.method = "POST";
                    form.submit();
                }
            }
        })
    })


    </script>



    <script src="/HotelWeb/components/custom.js"></script>
    <script src="../UserFE/custom.js"></script>
</body>
</html>