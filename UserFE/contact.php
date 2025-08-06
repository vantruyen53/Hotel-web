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
                    <form action="" class="px-5">
                        <div class="username d-flex flex-column gap-3">
                            <input id="username" type="text" placeholder="Your name *">
                            <label for="username" class="label-warning text-end text-danger">Error</label>
                        </div>
                        <div class="user-infor d-flex justify-content-between ">
                            <div class="user-phone d-flex flex-column gap-3">
                                <input id="userphone" type="text" placeholder="Your phone *">
                                <label for="userphone" class="label-warning text-end text-danger">Error</label>
                            </div>
                            <div class="user-email d-flex flex-column gap-3">
                                <input id="useremail" type="text" placeholder="Your email *">
                                <label for="useremail" class="label-warning text-end text-danger">Error</label>
                            </div>
                        </div>
                        <textarea name="note" id="note" placeholder="Note ..."></textarea>
                        <div class="submit"><button id="submit">SENT REQUEST</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    <script src="../components/custom.js"></script>
    <script src="../UserFE/custom.js"></script>
</body>
</html>