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
</style>
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
                    <h1 class="title-service"></h1>
                    <h5 class="position-relative pb-4">IN <span class="serviceDuration"></span> MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ">
                    <div class="ap"><span>AM: </span>8:00 am - 11:00 am</div>
                    <div class="pm"><span>PM: </span>14:00 pm - 18:00 pm</div>
                    <div class="warning">No childrent from 16</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $ <span class="tea-ceremony-cost servicePrice"></span></div>
                    <div class="book position-relative">
                        <button  class="text-decoration-none text-primary-emphasis book-service">BOOK NOW</button>
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
                    <h1 class="title-service"></h1>
                    <h5 class="position-relative pb-4">IN <span class="serviceDuration"></span> MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ms-auto">
                    <div class="ap"><span>AM: </span>5:00 am - 11:00 am</div>
                    <div class="pm"><span>PM: </span>13:00 pm - 23:00 pm</div>
                    <div class="warning">No childrent from 12</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $ <span class="hot-spring-cost servicePrice"></span></div>
                    <div class="book position-relative">
                         <button  class="text-decoration-none text-primary-emphasis book-service">BOOK NOW</button>
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
                    <h1 class="title-service "></h1>
                    <h5 class="position-relative pb-4">IN <span class="serviceDuration"></span> MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ">
                    <div class="ap"><span>AM: </span>6:00 am - 11:30 am</div>
                    <div class="pm"><span>PM: </span>13:00 pm - 23:00 pm</div>
                    <div class="warning">No childrent from 16</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $ <span class="massage-cost servicePrice"></span></div>
                    <div class="book position-relative">
                         <button class="text-decoration-none text-primary-emphasis book-service">BOOK NOW</button>
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
                    <h1 class="title-service "></h1>
                    <h5 class="position-relative pb-4">IN <span class="serviceDuration"></span> MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ms-auto">
                    <div class="ap"><span>AM: </span>4:00 am - 12:00 am</div>
                    <div class="pm"><span>PM: </span>14:00 pm - 22:00 pm</div>
                    <div class="warning">No childrent from 16</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $ <span class="meditation-cost servicePrice"></span></div>
                    <div class="book position-relative">
                         <button  class="text-decoration-none text-primary-emphasis book-service">BOOK NOW</button>
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
                    <h1 class="title-service "></h1>
                    <h5 class="position-relative pb-4">IN <span class="serviceDuration"></span> MINUTES</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem!</p>
                <div class="time ">
                    <div class="ap"><span>AM: </span>7:00 am - 11:00 am</div>
                    <div class="pm"><span>PM: </span>12:00 pm - 13:00 pm</div>
                    <div class="warning">No childrent from 16</div>
                </div>
                <div class="action-service d-flex align-item-center">
                    <div class="price me-auto ">RATES FROM $ <span  class="sauna-cost servicePrice"></span></div>
                    <div class="book position-relative">
                         <button  class="text-decoration-none text-primary-emphasis book-service">BOOK NOW</button>
                    </div>
                </div>
            </div>
            <div class="img w-50">
                <img src="../image/service/sauna.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- Register services  -->
    <div class="register-service " id="register-service">
        <div class="modal-register position-relative">
            <div id="close-book-service" class="close position-absolute"><i class="fa-solid fa-xmark"></i></div>
            <div class="header-modal">
                <ul class="list-unstyled d-flex justify-content-evenly w-50 mb-0 m-auto">
                    <li class="p-3 type-of-service choose" ></li>
                </ul>
            </div>
            <div class="content-modal d-flex gap-5 p-3 align-items-center">
                <div class="img" >
                    <img src="" alt="">
                </div>
                <div class="detail-infor d-flex flex-column ">
                    <form  class="booking-service" id="booking-service" method="post">
                        <div class="form-row d-flex flex-column gap-5 mb-4 flex-sm-row mb-4">
                            <div class="input-group d-flex flex-column ">
                                <input class="user-infor-book-services" name="username"  type="text" id="name" placeholder="Your name *"/>
                            </div>
                            <div class="input-group d-flex flex-column">
                                <input class="user-infor-book-services" name="userphone" type="text" id="phone" placeholder="Your phone *"/>
                            </div>
                        </div>
                        <div class="form-row d-flex flex-column gap-5 mb-4 flex-sm-row mb-4">
                            <div class="input-group d-flex flex-column">
                                <input class="user-infor-book-services" name="useremail" type="text" id="useremail" placeholder="Your email *"/>
                            </div>
                            <div class="input-group d-flex flex-column">
                                <input class="user-infor-book-services" name="userseats" type="number" min="1" id="seats" placeholder="Seats *"/>
                            </div>
                        </div>
                        <div class="form-row d-flex flex-column gap-5 mb-4 flex-sm-row  pb-5">
                            <div class="input-group d-flex flex-column">
                                <?php include('../components/time.php');?>
                            </div>
                            <div class="input-group d-flex flex-column">
                                <input class="user-infor-book-services" name="userdate" type="date" id="booking-service-date" placeholder="Date"/>
                            </div>
                        </div>
                        <input type="hidden" name="serviceID" id="hidden-option-service" value="">
                        <div class="action-book d-flex justify-content-end align-items-center gap-5">
                            <div class="total-services">TOTAL: $<span class="dis-total-services"></span></div>
                            <input type="hidden" name="totalPrice" id="hidden-option-price" value="">
                            <div class="text-center"><button type="submit" class="mx-auto" id="add">ADD</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        include('../components/modalMessageSuccess.php')
    ?>

    <?php
        include('../components/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        const btnBookService = document.querySelectorAll('.book-service');

        
        // Load services infor 
        const serviceName = document.querySelectorAll('.title-service');
        const serviceDuration = document.querySelectorAll('span.serviceDuration');
        const servicePrice = document.querySelectorAll('.servicePrice');
        document.addEventListener('DOMContentLoaded', function(){
            console.log('DOM fully loaded');     
            fetch('../BE/requestServicesInfor.php')
            .then(response => response.json())
            .then(data => {
                data.forEach((item, index) => {
                    if (serviceName[index]){ 
                        serviceName[index].textContent = item.serviceName;
                    };
                    if (serviceDuration[index]){ 
                        serviceDuration[index].textContent = item.serviceDuration;
                    };
                    if (servicePrice[index]) {
                        servicePrice[index].textContent = item.servicePrice
                    };
                     if (btnBookService[index]) {
                        btnBookService[index].dataset.serviceId = item.serviceID || item.id;
                        btnBookService[index].dataset.serviceName = item.serviceName;
                        btnBookService[index].dataset.servicePrice = item.servicePrice;
                    }
                });
            })
        });
        // Display img and infor of service selected
        let currentSelectedService = '';
        let price = 0;
        btnBookService.forEach(btn =>{
            btn.addEventListener('click', function(){
                const serviceId = this.dataset.serviceId;
                const serviceName = this.dataset.serviceName;
                price = this.dataset.servicePrice;
                console.log(serviceId);
                console.log(serviceName);
                console.log(price);
                currentSelectedService = {
                    id: serviceId,
                    name: serviceName,
                    price: parseFloat(price)
                };     
                document.getElementById('hidden-option-service').value = serviceId;
                updateModalContent(currentSelectedService);
            })
        })
        document.getElementById('seats').addEventListener('input', function(){
            const userSeat = parseInt(this.value);
            const totalPrice = price*userSeat;
            document.querySelector('.dis-total-services').textContent = totalPrice;
            document.getElementById('hidden-option-price').value = totalPrice;
        })
        function updateModalContent(service){
            const serviceName =  service.name;
            const servicePrice = service.price;
            const serviceImg = document.querySelector('.register-service .modal-register .img img');
            const serviceId = service.id;
            const typyOfService = document.querySelector('.type-of-service.choose');
            if(serviceName.trim().toUpperCase() === 'TEA CEREMONY'){
                serviceImg.src = '../image/service/tea-ceremony.jpg';
                typyOfService.innerHTML = serviceName.toUpperCase();
            }else if(serviceName.trim().toUpperCase() === 'HOT SPRING'){
                serviceImg.src = '../image/service/hot-spring2.jpg';
                typyOfService.innerHTML = serviceName.toUpperCase();
            }else if(serviceName.trim().toUpperCase() === 'MASSAGE'){
                serviceImg.src = '../image/service/massage.avif';
                typyOfService.innerHTML = serviceName.toUpperCase();
            } else if(serviceName.trim().toUpperCase() === 'MEDITATION'){
                serviceImg.src = '../image/service/meditation2.jpg';
                typyOfService.innerHTML = serviceName.toUpperCase();
            }else if(serviceName.trim().toUpperCase() === 'SAUNA'){
                serviceImg.src = '../image/service/sauna.jpg';
                typyOfService.innerHTML = serviceName.toUpperCase();
            }
        };
    </script>
    <script src="../components/custom.js"></script>
    <script src="../UserFE/custom.js"></script>
</body>
</html>