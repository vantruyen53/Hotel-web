<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="../UserFE/style.css">

    <link rel="stylesheet" href="../components/mystyle.css">

    <title>Menu</title>
</head>
<body class="menu">
    <?php
        include('../components/navbar.php');
    ?>

    <header>
        <div class="content d-flex flex-column justify-content-center align-items-end text-white h-100 ">
            <div class="item text-center">
                <div class="title">ENJOY</div>
                <p>Japanese's food</p>
                <div class="sub">AT CHERRY BLOSSOM</div>
            </div>
        </div>
    </header>

    <!-- Link meal  -->
    <div class="link-menu  position-relative">
        <ul class="list-unstyled d-flex mb-0 w-50 justify-content-evenly m-auto">
            <li><a href="#breakfast" class="text-decoration-none position-relative">BREAKFAST</a></li>
            <li><a href="#lunch" class="text-decoration-none position-relative">LUNCH</a></li>
            <li><a href="#dinner" class="text-decoration-none position-relative">DINNER</a></li>
        </ul>
    </div>

    <!-- Menu infor  -->
    <section class="d-flex justify-content-center menu-infor">
        <div class="list-menu text-center">
            <div class="title pt-1">MENU</div>
            <div class="menu-column d-flex justify-content-center gap-5 flex-wrap">
                <ul class="menu-list list-unstyled p-0 m-0 text-start">
                    <li>Appetizer</li>
                    <li>Boiled food</li>
                    <li>Sashimi</li>
                    <li>Fried food</li>
                </ul>
                <ul class="menu-list list-unstyled p-0 m-0 text-start">
                    <li>Shinshu rice pork hot pot dish</li>
                    <li>Rice</li>
                    <li>Pickles</li>
                    <li>Pickles</li>
                </ul>   
            </div>
            <div class="children-menu text-start mx-auto">
                <div class="title">CHILDREN'S MEALS</div>
                <p>The children's course menu includes simmered dish, grilled dish, chawanmushi. <br>
                This dish includes fried chicken, tempura shrimp, rice, soup and dessert.</p>
            </div>
        </div>
    </section>

    <!-- Dinning room  -->
    <div class="dinning-rooms">
        <div class="title text-center">
            <h1>DINNING ROOMS </h1>
            <h5>AT CHERRY BLOSSOM</h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="left-img col-12 col-md-6">
                    <div class="img-above img-overlay position-relative h-50 pb-4">
                        <img src="../image/menu/room-above.jpg" alt="">
                        <div class="overlay text-white">
                            <div class="text-overlay">
                                <h2>Lorem, ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="img-below d-flex h-50 gap-4">
                        <div class="img-overlay position-relative">
                            <img src="../image/menu/room-below1.jpg" alt="">
                            <div class="overlay text-white">
                                <div class="text-overlay">
                                    <h2>Lorem, ipsum dolor.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="img-overlay position-relative">
                            <img src="../image/menu/room-below2.jpg" alt="">
                            <div class="overlay text-white">
                                <div class="text-overlay">
                                    <h2>Lorem, ipsum dolor.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-img col-12 col-md-6">
                    <div class="img-overlay position-relative h-100">
                        <img src="../image/menu/room-right.jpg" alt="">
                        <div class="overlay text-white">
                            <div class="text-overlay">
                                <h2>Lorem, ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BREAKFAST  -->
    <section>
        <div class="breakfast" id="breakfast">
            <div class="intro d-flex">
                <div class="intro-meal w-50 ">
                    <div class="title">
                        <h2 class="pb-4">BREAFAST</h2>
                        <p class="position-relative">AT CHERRY BLOSSOM</p>
                    </div>
                    <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga earum, quae exercitationem libero a ratione magnam est sequi quas illum.</h5>
                </div>
                <div class="img-meal position-relative w-50 border ">
                    <div class="myslide-1 an">
                        <img src="../image/menu/bf-miso.jpg" alt="">
                        <div class="dish-name">MISO SUOP</div>
                    </div>
                    <div class="myslide-1 an">
                        <img src="../image/menu/bf-dashimaki-tamago.jpg" alt="">
                        <div class="dish-name">DASHIMAKI TAMAGO</div>
                    </div>
                    <div class="myslide-1 an">
                        <img src="../image/menu/bf-saba-no-shioyaki.jpg" alt="">
                        <div class="dish-name">SABA NO SHIOYAKI</div>
                    </div>
                    <div class="myslide-1 an">
                        <img src="../image/menu/bf-Salmon-Onigiri-Rice-Balls.jpg" alt="">
                        <div class="dish-name">SALMON ONIGIRI RICE BALLS</div>
                    </div>
                    <div class="myslide-1 an">
                        <img src="../image/menu/bf-Tamagokakegohan.webp" alt="">
                        <div class="dish-name">TAMAGOKAKEGOHAN</div>
                    </div>

                    <div class="prev"  onclick="plusSlides(-1,0)"><i class="fa-solid fa-angles-left"></i></div>
                    <div class="next" onclick="plusSlides(1,0)"><i class="fa-solid fa-angles-right"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- lunch  -->
    <section>
        <div class="lunch" id="lunch">
            <div class="intro d-flex">
                <div class="img-meal position-relative w-50 border ">
                    <div class="myslide-2 an">
                        <img src="../image/menu/lu-Donburi.jpg" alt="">
                        <div class="dish-name">DONBURI</div>
                    </div>
                    <div class="myslide-2 an">
                        <img src="../image/menu/lu-sushi.jpg" alt="">
                        <div class="dish-name">SHUSHI</div>
                    </div>
                    <div class="myslide-2 an">
                        <img src="../image/menu/lu-Tempura.jpg" alt="">
                        <div class="dish-name">TEMPURA</div>
                    </div>
                    <div class="myslide-2 an">
                        <img src="../image/menu/lu-Tonkatsujpg.jpg" alt="">
                        <div class="dish-name">TONKATSU</div>
                    </div>
                    <div class="myslide-2 an">
                        <img src="../image/menu/lu-Unagi-no-Kabayaki.jpg" alt="">
                        <div class="dish-name">UNAGI NO KABAYAKI</div>
                    </div>

                    <div class="prev"  onclick="plusSlides(-1,1)"><i class="fa-solid fa-angles-left"></i></div>
                    <div class="next" onclick="plusSlides(1,1)"><i class="fa-solid fa-angles-right"></i></div>
                </div>
                <div class="intro-meal w-50 text-end">
                    <div class="title">
                        <h2 class="pb-4">LUNCH</h2>
                        <p class="position-relative">AT CHERRY BLOSSOM</p>
                    </div>
                    <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos perferendis eveniet neque repudiandae pariatur amet?</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- dinner  -->
    <section>
        <div class="dinner" id="dinner">
            <div class="intro d-flex">
                <div class="intro-meal w-50 ">
                    <div class="title">
                        <h2 class="pb-4">DINNER</h2>
                        <p class="position-relative">AT CHERRY BLOSSOM</p>
                    </div>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus at consequuntur incidunt, enim porro id!</h5> 
                    <div class="book-for-dinner text-start">
                        <?php
                            include('../components/bookRoom.php')
                        ?>
                    </div>  
                </div>
                <div class="img-meal position-relative w-50 border ">
                    <div class="myslide-3 an">
                        <img src="../image/menu/dn-omakse1.jpg" alt="">
                        <div class="dish-name">OMAKSE</div>
                    </div>
                    <div class="myslide-3 an">
                        <img src="../image/menu/dn-Omakase2.jpg" alt="">
                        <div class="dish-name">OMAKSE</div>
                    </div>
                    <div class="myslide-3 an">
                        <img src="../image/menu/dn-omakase3.jpg" alt="">
                        <div class="dish-name">OMAKSE</div>
                    </div>

                    <div class="prev"  onclick="plusSlides(-1,2)"><i class="fa-solid fa-angles-left"></i></div>
                    <div class="next" onclick="plusSlides(1,2)"><i class="fa-solid fa-angles-right"></i></div>
                </div>
                
            </div>
        </div>
    </section>


    <?php
        include('../components/footer.php');
    ?>


    <script>
        let slideIndex = [1,1,1];
        let slideId = ["myslide-1", "myslide-2","myslide-3"]
        showSlides(1,0);
        showSlides(1,1);
        showSlides(1,2);

        function plusSlides(n,no) {
           showSlides(slideIndex[no] += n, no);                                                                 
        }
        function showSlides(n,no) {
            let i;
            let x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) {slideIndex[no] = 1}    
            if (n < 1) {slideIndex[no] = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            };
            x[slideIndex[no]-1].style.display = "block";  
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="../components/custom.js"></script>
    <script src="../UserFE/custom.js"></script>


</body>
</html>