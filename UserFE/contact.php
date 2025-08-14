<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="../UserFE/style.css">

    <link rel="stylesheet" href="../components/mystyle.css">

    <title>Contact</title>
</head>
<body class="contactus">
    <?php
        include('../components/navbar.php');
    ?>

    <div class="contact ">
        <div class="container z-3 position-relative h-100">
            <div class="row text-white h-100 align-items-center">
                <div class="col-12 col-md-6 ">
                    <div class="contact-infor">
                        <p>JAPANESE TRADITIONAL HOTEL</p>
                        <h1>CHERRY BLOSSOM</h1>
                        <p>静けさと素朴さの宿  -  A HAVEN OF TRANQUILITY AND SIMPLICITY</p>
                        <div class="infor-detail ">
                            <p><span>ADDRESS: </span> 66 Vo Van Tan, Thanh Khue, Da Nang</p>
                            <p><span>TEL: </span>0123456789</p>
                            <p><span>EMAIL: </span>cherryblosoom@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <div class="form-title">HOW CAN WE HELP YOU</div>
                    <form action="../BE/contactus.php" class="px-5" method="post" id="contact-form">
                        <div class="username d-flex mb-5">
                            <input class="input-contact w-100" type="text" name="username" placeholder="Your name *">
                        </div>
                        <div class="user-infor d-flex justify-content-between">
                            <div class="user-phone ">
                                <input class="input-contact" id="phone" type="text" name="userphone" placeholder="Your phone *">
                            </div>
                            <div class="user-email ">
                                <input class="input-contact"  id="email" type="text" name="useremail"  placeholder="Your email *">
                            </div>
                        </div>
                        <textarea name="note" id="note" placeholder="Note ..."></textarea>
                        <div class="submit"><button id="submit" type="submit">SENT REQUEST</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        include('../components/modalMessageSuccess.php')
    ?>

    <!-- ChatBox  -->
     <article>
        <div class="container-chat position-relative w-50 mx-auto h-100">
            <div class="container-message position-relative h-100 w-100 " style="overflow-y: auto;">
                <div class="container-introduction text-center position-absolute top-50 start-50 translate-middle">
                    <div class="title">CHERRY BLOSSOM HOTEL CHATBOX AUTOMATION</div>
                    <div class="img mx-auto"><img src="/image/logo.png" alt="" class="w-100"></div>
                    <div class="sub"><p>HOW CAN WE HELP YOU?</p></div>
                </div>
            </div>
            <div class="container-input  w-100 px-3">
                <div class="input-message position-relative w-100 d-flex align-items-center">
                    <input type="text" class="input-box w-100 border p-3 me-3" placeholder="How can we help you?">
                    <button class="btn-send position-absolute end-0 pe-5"><i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </div>
        </div>
     </article>

    <div class="map position-relative">
        <img src="/image/whyshouldus-deco.png" alt="">
        <div class="container">
            <div class="title text-center">MAP TO CHERRY BLOSSOM HOTEL</div>
            <p class="content text-center h4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
             Ipsum consectetur quas beatae maiores eligendi cum!</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.227766410965!2d108.20001225807378!3d16.067156680812165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142184d687c0ddd%3A0x532210d879f8c3d1!2zNjYgVsO1IFbEg24gVOG6p24sIENow61uaCBHacOhbiwgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1754384213515!5m2!1svi!2s" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="book-now-map text-center pb-5">
            <?php
                include('../components/bookRoom.php')
            ?>
        </div>
    </div>


    <?php
        include('../components/footer.php');
    ?>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>

        // Check before submit form
        document.getElementById('contact-form').addEventListener('submit', function(event){
            const inputContact = document.querySelectorAll('.input-contact');
            const phoneRegex = document.getElementById('phone');
            const emailRegex = document.getElementById('email');


            // Check input is empty 
             let hasError = false;

             inputContact.forEach(input =>{
                if(input.value.trim() === ""){  
                    hasError = true;
                    input.classList.add('error');
                } else{
                    input.classList.remove('error');
                }
            });

            // Check phone regex 
            const patternPhone = /^(03|07|09|86)[0-9]{8}$/;
            let phoneResult = patternPhone.test(phoneRegex.value.trim());
            if(!phoneResult){
                hasError = true;
                phoneRegex.classList.add('error');
            }else{
                phoneRegex.classList.remove('error');
            }

            // Check email regex 
            const patternEmail = /^[\w.-]+@gmail\.com$/;
            let emailResult = patternEmail.test(emailRegex.value.trim());
            if(!emailResult){
                hasError = true;
                emailRegex.classList.add('error');
            }else{
                emailRegex.classList.remove('error');
            }


            if(hasError){
                event.preventDefault();
            }
        })
    </script>


    <script src="../components/custom.js"></script>
    <script src="../UserFE/custom.js"></script>
</body>
</html>