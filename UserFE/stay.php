<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="../UserFE/style.css">

    <link rel="stylesheet" href="../components/mystyle.css">

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

        <!-- Search room  -->
       
    </section>


    <!-- Room-infor -->
    <main class="room-list">
        <!-- WASHITSU -->
        <div class="container washitu  p-5  rounded-3" id="washitu">
            <div class="row">
                <div class="infor-room col-12 col-md-7">
                    <div class="row ">
                        <div class="img col-12 col-sm-6"><img src="../image/Washitsu.jpg" alt=""></div>
                        <div class="infor-detail col-12 col-sm-6">
                            <div class="title">WASHITSU</div>
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
                                    <li><i class="fa-solid fa-money-bill-1-wave"></i> $100/Person</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                    
                </div>
                <div class="calender-room col-12 col-md-5">
                    <div class="select-calender">

                    </div>
                    <div class="number-people pt-3 d-flex">
                        <div class="type-peo">
                            <div class="type">Adults</div>
                            <div class="count d-flex justify-content-around mt-1">
                                <div class="reduce">-   </div>
                                <div class="dis-num">2</div>
                                <div class="increase">+</div>
                            </div>
                        </div>
                        <div class="type-peo">
                            <div class="type">Children</div>
                            <div class="count d-flex justify-content-around mt-1">
                                <div class="reduce">-</div>
                                <div class="dis-num">1</div>
                                <div class="increase">+</div>
                            </div>
                        </div>
                        <div class="num-room">
                            <div class="type-peo">
                                <div class="type">Room Number</div>
                                <select name="numberRoom" id="numberRoom" class="mt-1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infor-room-footer d-flex justify-content-between align-items-center">
                <div class="count-room ms-5">ONLY <span id="only-room">4</span></div>
                <a href="/UserFE/book.php" class="text-decoration-none me-5"><span id="book-room">$100</span></a>
            </div>
        </div>



        <!-- WAYO-SHITSU -->
        <div class="container wayo-shitsu my-5 p-5  rounded-3" id="wayo-shitsu">
            <div class="row">
                <div class="infor-room col-12 col-md-7">
                    <div class="row ">
                        <div class="img col-12 col-sm-6"><img src="../image/wayo-shitsu.jpg" alt=""></div>
                        <div class="infor-detail col-12 col-sm-6">
                            <div class="title">WAYO SHITSU</div>
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
                                    <li><i class="fa-solid fa-money-bill-1-wave"></i> $200/Person</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                    
                </div>
                <div class="calender-room col-12 col-md-5">
                    <div class="select-calender">

                    </div>
                    <div class="number-people pt-3 d-flex">
                        <div class="type-peo">
                            <div class="type">Adults</div>
                            <div class="count d-flex justify-content-around mt-1">
                                <div class="reduce">-</div>
                                <div class="dis-num">2</div>
                                <div class="increase">+</div>
                            </div>
                        </div>
                        <div class="type-peo">
                            <div class="type">Children</div>
                            <div class="count d-flex justify-content-around mt-1">
                                <div class="reduce">-</div>
                                <div class="dis-num">1</div>
                                <div class="increase">+</div>
                            </div>
                        </div>
                        <div class="num-room">
                            <div class="type-peo">
                                <div class="type">Room Number</div>
                                <select name="numberRoom" id="numberRoom" class="mt-1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infor-room-footer d-flex justify-content-between align-items-center">
                <div class="count-room ms-5">ONLY <span id="only-room">4</span></div>
                <a href="/UserFE/book.php" class="text-decoration-none me-5"><span id="book-room">$200</span></a>
            </div>
        </div>


        <!-- ROTENBURO-TSUKI-KYAKUSHITSU -->
         <div class="container rotenburo-tsuki-kyakushitsu my-5 p-5  rounded-3" id="rotenburo-tsuki-kyakushitsu">
            <div class="row">
                <div class="infor-room col-12 col-md-7">
                    <div class="row ">
                        <div class="img col-12 col-sm-6"><img src="../image/Rotenburo-tsuki-Kyakushitsu.png" alt=""></div>
                        <div class="infor-detail col-12 col-sm-6">
                            <div class="title">ROTENBURO TSUKI KYAKUSHITSU</div>
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
                                    <li><i class="fa-solid fa-money-bill-1-wave"></i> $450/Person</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                    
                </div>
                <div class="calender-room col-12 col-md-5">
                    <div class="select-calender">

                    </div>
                    <div class="number-people pt-3 d-flex">
                        <div class="type-peo">
                            <div class="type">Adults</div>
                            <div class="count d-flex justify-content-around mt-1">
                                <div class="reduce">-</div>
                                <div class="dis-num">2</div>
                                <div class="increase">+</div>
                            </div>
                        </div>
                        <div class="type-peo">
                            <div class="type">Children</div>
                            <div class="count d-flex justify-content-around mt-1">
                                <div class="reduce">-</div>
                                <div class="dis-num">1</div>
                                <div class="increase">+</div>
                            </div>
                        </div>
                        <div class="num-room">
                            <div class="type-peo">
                                <div class="type">Room Number</div>
                                <select name="numberRoom" id="numberRoom" class="mt-1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infor-room-footer d-flex justify-content-between align-items-center">
                <div class="count-room ms-5">ONLY <span id="only-room">4</span></div>
                <a href="/UserFE/book.php" class="text-decoration-none me-5"><span id="book-room">$450</span></a>
            </div>
        </div>


        <!-- LUXURY-RYOKAN-SUITE -->
         <div class="container luxury-ryokan-suite my-5 p-5  rounded-3" id="luxury-ryokan-suite">
            <div class="row">
                <div class="infor-room col-12 col-md-7">
                    <div class="row ">
                        <div class="img col-12 col-sm-6"><img src="../image/Luxury-ryokan-suite.jpg" alt=""></div>
                        <div class="infor-detail col-12 col-sm-6">
                            <div class="title">LUXURY RYOKAN SUITE</div>
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
                                    <li><i class="fa-solid fa-money-bill-1-wave"></i> $700/Person</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores totam incidunt laboriosam dolores culpa impedit magnam itaque! Voluptate, magni?</p>
                    
                </div>
                <div class="calender-room col-12 col-md-5">
                    <div class="select-calender">

                    </div>
                    <div class="number-people pt-3 d-flex">
                        <div class="type-peo">
                            <div class="type">Adults</div>
                            <div class="count d-flex justify-content-around mt-1">
                                <div class="reduce">-</div>
                                <div class="dis-num">2</div>
                                <div class="increase">+</div>
                            </div>
                        </div>
                        <div class="type-peo">
                            <div class="type">Children</div>
                            <div class="count d-flex justify-content-around mt-1">
                                <div class="reduce">-</div>
                                <div class="dis-num">1</div>
                                <div class="increase">+</div>
                            </div>
                        </div>
                        <div class="num-room">
                            <div class="type-peo">
                                <div class="type">Room Number</div>
                                <select name="numberRoom" id="numberRoom" class="mt-1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infor-room-footer d-flex justify-content-between align-items-center">
                <div class="count-room ms-5">ONLY <span id="only-room">4</span></div>
                <a href="/UserFE/book.php" class="text-decoration-none me-5"><span id="book-room">$700</span></a>
            </div>
        </div>


    </main>











    <?php
        include('../components/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="/components/custom.js"></script>
    <script src="/UserFE/custom.js"></script>
</body>
</html>