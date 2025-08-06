<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="../UserFE/style.css">

    <link rel="stylesheet" href="../components/mystyle.css">

    <title>Services</title>
</head>
<body class="service">
    <?php
        include('../components/navbar.php');
    ?>

    <header class="position-relative">
        <div class="background">
            <img src="../image/service/welcome.jpg" alt="">
        </div>
        <div class="content position-absolute start-50 text-white text-center ">
            <img src="../image/title-serve.png" alt="">
            <div class="title">WELCOME</div>
            <div class="sub">CHERRY BLOSSOM HOTEL SERVICES</div>
        </div>
    </header>

    <!-- Introduction service guest  -->
    <section>
        <div class="summary-service pb-5">

            <div class="title text-center">
                <h1>ABOUT OUR SERVICES</h1>
                <div class="img">
                    <img src="../image/logo.png" alt="">
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Nam fugit atque vitae provident maxime, esse nostrum corrupti corporis rerum numquam!</p>
                </div>
            </div>

            <div class="items d-flex px-5 position-relative">
                <div class="cards mx-auto d-flex gap-3">
                    <div class="item">
                        <img src="../image/service/ourservice1.jpg" alt="">
                        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, quo.</h5>
                    </div>
                    <div class="item">
                        <img src="../image/service/ourservice2jpg.jpg" alt="">
                        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, quo.</h5>
                    </div>
                    <div class="item">
                        <img src="../image/service/ourservice3.jpg" alt="">
                        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, quo.</h5>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- tea ceremony  -->
    <section >
        <div class="services d-flex flex-wrap">
            <div class="content">
                <div class="title text-center">
                    <h1>TEA CEREMONY</h1>
                    <h5 class="position-relative pb-4">IN 60 MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ">
                    <div class="ap"><span>AM: </span>8:00 am - 11:00 am</div>
                    <div class="pm"><span>PM: </span>14:00 pm - 18:00 pm</div>
                    <div class="warning">No childrent from 16</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $30</div>
                    <div class="book position-relative">
                        <button id="book-service" class="text-decoration-none text-primary-emphasis">BOOK NOW</button>
                    </div>
                </div>
            </div>
            <div class="img w-50">
                <img src="../image/service/tea-ceremony.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- HOT SPRING  -->
    <section >
        <div class="services d-flex flex-wrap">
             <div class="img w-50">
                <img src="../image/service/hot-spring2.jpg" alt="">
            </div>
            <div class="content">
                <div class="title text-center">
                    <h1>HOT SPRING</h1>
                    <h5 class="position-relative pb-4">IN 30 MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ms-auto">
                    <div class="ap"><span>AM: </span>5:00 am - 11:00 am</div>
                    <div class="pm"><span>PM: </span>13:00 pm - 23:00 pm</div>
                    <div class="warning">No childrent from 12</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $10</div>
                    <div class="book position-relative">
                         <button id="book-service" class="text-decoration-none text-primary-emphasis">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MASSAGE -->
    <section >
        <div class="services d-flex flex-wrap">
            <div class="content">
                <div class="title text-center">
                    <h1>MASSAGE</h1>
                    <h5 class="position-relative pb-4">IN 90 MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ">
                    <div class="ap"><span>AM: </span>6:00 am - 11:30 am</div>
                    <div class="pm"><span>PM: </span>13:00 pm - 23:00 pm</div>
                    <div class="warning">No childrent from 16</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $100</div>
                    <div class="book position-relative">
                         <button id="book-service" class="text-decoration-none text-primary-emphasis">BOOK NOW</button>
                    </div>
                </div>
            </div>
            <div class="img w-50">
                <img src="../image/service/massage.avif" alt="">
            </div>
        </div>
    </section>

    <!-- MEDITATION -->
    <section >
        <div class="services d-flex flex-wrap">
            <div class="img w-50">
                <img src="../image/service/meditation2.jpg" alt="">
            </div>
            <div class="content">
                <div class="title text-center">
                    <h1>MEDITATION</h1>
                    <h5 class="position-relative pb-4">IN 240 MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ms-auto">
                    <div class="ap"><span>AM: </span>4:00 am - 12:00 am</div>
                    <div class="pm"><span>PM: </span>14:00 pm - 22:00 pm</div>
                    <div class="warning">No childrent from 16</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $35</div>
                    <div class="book position-relative">
                         <button id="book-service" class="text-decoration-none text-primary-emphasis">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SAUNA -->
    <section >
        <div class="services d-flex flex-wrap">
            <div class="content">
                <div class="title text-center">
                    <h1>SAUNA</h1>
                    <h5 class="position-relative pb-4">IN 30 MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ">
                    <div class="ap"><span>AM: </span>7:00 am - 11:00 am</div>
                    <div class="pm"><span>PM: </span>12:00 pm - 13:00 pm</div>
                    <div class="warning">No childrent from 16</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $35</div>
                    <div class="book position-relative">
                         <button id="book-service" class="text-decoration-none text-primary-emphasis">BOOK NOW</button>
                    </div>
                </div>
            </div>
            <div class="img w-50">
                <img src="../image/service/sauna.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- Register services  -->
    <div class="register-service" id="register-service">
        
        <div class="modal-register position-relative">

            <div id="close-book-service" class="close position-absolute"><i class="fa-solid fa-xmark"></i></div>

            <div class="header-modal">
                <ul class="list-unstyled d-flex justify-content-evenly w-50 mb-0 m-auto">
                    <li class="p-3" >TEA CEREMONY</li>
                    <li class="p-3" >HOT SPRING</li>
                    <li class="p-3" >MASSAGE</li>
                    <li class="p-3" >MEDITATION</li>
                    <li class="p-3" >SAUNA</li>
                </ul>
            </div>

            <div class="content-modal d-flex gap-5 p-3 align-items-center">

                <div class="img">
                    <img src="../image/service/tea-ceremony.jpg" alt="">
                </div>
                    
                <div class="detail-infor d-flex flex-column ">
                    <form action="" class="booking-service ">
                        <div class="form-row d-flex flex-column gap-5 mb-4 flex-sm-row">
                            <div class="input-group d-flex flex-column">
                                <input type="text" id="name" placeholder="Your name *" />
                                <label class="warning-label">Error</label>
                            </div>

                            <div class="input-group d-flex flex-column">
                                <input type="text" id="phone" placeholder="Your phone *" />
                                <label class="warning-label">Error</label>
                            </div>
                        </div>

                        <div class="form-row d-flex flex-column gap-5 mb-4 flex-sm-row">
                            <div class="input-group d-flex flex-column">
                                <input type="text" id="gmail" placeholder="Your email *" />
                                <label class="warning-label">Error</label>
                            </div>

                            <div class="input-group d-flex flex-column">
                                <input type="text" id="seats" placeholder="Seats *" />
                                <label class="warning-label">Error</label>
                            </div>
                        </div>

                        <div class="form-row d-flex flex-column gap-5 mb-4 flex-sm-row">
                            <div class="input-group d-flex flex-column">
                                <input type="text" id="date" placeholder="Time"/>
                                <label class="warning-label">Error</label>
                            </div>
                            <div class="input-group d-flex flex-column">
                                <input type="text" id="time" placeholder="Date"/>
                                <label class="warning-label">Error</label>
                            </div>
                        </div>
                    </form>
                    <button class="mx-auto" id="add">ADD</button>
                </div>

                
            </div>

            <div class="footer-modal">
                <div class="list-services d-flex gap-3 pb-4">
                    <div class="type-service position-relative">
                        <div class="trash-can position-absolute"><i class="fa-solid fa-trash-can"></i></div>
                        <div class="service-name pb-3"><span>Tea ceremony</span></div>
                        <div class="group-infor d-flex gap-3">
                            <div class="row-infor ">
                                <div class="time pb-2">Time:<span class="fw-normal"> 11:00 am</span></div>
                                <div class="seats">Seats:<span class="fw-normal"> 2</span></div>
                            </div>
                            <div class="row-infor">
                                <div class="date pb-2">Date:<span class="fw-normal"> Aug 20, 2025</span></div>
                                <div class="prices">Price: $<span class="fw-normal">70</span></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="book-service d-flex justify-content-end align-items-center gap-5">
                    <div class="total-services">TOTAL: $<span>70</span></div>
                    <button id="action-book" type="submit">BOOK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Message registration successfully  -->
    <div class="book-service-success align-items-center justify-content-center" id="book-service-success">
        <div class="modal-message">
            <div class="message-load">
                <svg width="300" height="300">
                    <circle cx="150" cy="150" r="100" stroke="darkblue" stroke-width="5" fill="none" />
                    <text class="messageContent" x="150" y="145" font-size="1.3rem" text-anchor="middle" fill="darkblue">Registration</text>
                    <text class="messageContent" x="150" y="180" font-size="1.3rem" text-anchor="middle" fill="darkblue">Successfully</text>
                </svg>
            </div>
            <div class="messageContent">Thanks for Choosing 😊</div>
        </div>
    </div>

    <?php
        include('../components/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="../components/custom.js"></script>
    <script src="../UserFE/custom.js"></script>
</body>
</html>