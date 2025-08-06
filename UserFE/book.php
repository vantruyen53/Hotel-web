<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="../UserFE/style.css">

    <link rel="stylesheet" href="../components/mystyle.css">

    <title>Book</title>
</head>
<body class="booking">

    <div class="back"><i class="fa-solid fa-angle-left"></i></div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 order-infor ">
                    <div class="room-name text-center">WASHITSU</div>
                    <div class="img px-4 mb-5 w-100"><img src="../image/Washitsu.jpg" alt="" width="100%"></div>
                    <div class="date-selected d-flex justify-content-around">
                        <div class="group-item">
                            <div class="item-sub">CHECK IN</div>
                            <div class="item-main">8/25/2025</div>
                        </div>
                        <div class="group-item">
                            <div class="item-sub">CHECK UOT</div>
                            <div class="item-main">8/26/2025</div>
                        </div>
                    </div>
                    <div class="customer-number d-flex justify-content-around my-5">
                        <div class="group-item">
                            <div class="item-sub">ADULTS</div>
                            <div class="item-main">2</div>
                        </div>
                        <div class="group-item">
                            <div class="item-sub">CHILDRENS</div>
                            <div class="item-main">1</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 user-infor">
                    <div class="form-title text-center">YOUR INFORMATION</div>
                    <form action="" class="customer-input">
                        <div class="username d-flex justify-content-between">
                           <div class="first-name d-flex flex-column gap-3">
                                <input id="firstname" type="text" placeholder="Your first name *">
                                <label for="firstname" class="label-warning text-end text-danger">Error</label>
                           </div>
                           <div class="last-name d-flex flex-column gap-3">
                                <input id="lasttname" type="text" placeholder="Your last name *">
                                <label for="lasttname" class="label-warning text-end text-danger">Error</label>
                           </div>
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
                        <div class="pay-method text-end ">
                            <select name="payMethod" id="payMethod">
                                <option selected value="payOnDelivery">Pay on Delivery</option>
                            </select>
                        </div>
                        <textarea name="note" id="note" placeholder="Note ..."></textarea>

                        <div class="acompanying-service-booking  d-flex flex-wrap gap-3 mb-5">
                            <div class="type-service position-relative ">
                                <div class="trash-can position-absolute"><i class="fa-solid fa-trash-can"></i></div>
                                <div class="service-name pb-3"><span>Tea ceremony</span></div>
                                <div class="group-infor d-flex gap-3">
                                    <div class="row-infor ">
                                        <div class="time pb-2">Time:<span class="fw-normal"> 11:00 am</span></div>
                                        <div class="seats">Seats:<span class="fw-normal"> 2</span></div>
                                    </div>
                                    <div class="row-infor">
                                        <div class="prices">Price: $<span class="fw-normal">70</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="type-service position-relative ">
                                <div class="trash-can position-absolute"><i class="fa-solid fa-trash-can"></i></div>
                                <div class="service-name pb-3"><span>HOT SPRING</span></div>
                                <div class="group-infor d-flex gap-3">
                                    <div class="row-infor ">
                                        <div class="time pb-2">Time:<span class="fw-normal"> 5:00 am</span></div>
                                        <div class="seats">Seats:<span class="fw-normal"> 2</span></div>
                                    </div>
                                    <div class="row-infor">
                                        <div class="prices">Price: $<span class="fw-normal">40</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="submit text-end "><button id="submit">BOOK</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <article >
        <div class="container px-5 mt-5">
            <div class="title-service text-center">ACOMPANYING SERIVIVES BOOKING</div>
            <div class="service-item mb-5">
                <div class="row">
                    <div class="col-12 col-sm-3 img"><img src="../image/service/tea-ceremony.jpg" alt="" width="100%"></div>
                    <div class="col-12 col-sm-9 d-flex justify-content-around">
                        <div class="service-infor">
                            <div class="service-name">TEA CEREMONY</div>
                            <div class="ap"><span class="fw-bold">AM: </span>7:00 am - 11:00 am</div>
                            <div class="pm"><span class="fw-bold">PM: </span>12:00 pm - 13:00 pm</div>
                            <div class="warning">No childrent from 16</div>
                            <div class="price">$30/Person</div>
                        </div>
                        <div class="user-input-service">
                            <div class="seats d-flex flex-column gap-2">
                                <input type="text" id="seat-number" placeholder="Your seats ">
                                <label for="seat-number" class="label-warning text-end text-danger">Error</label>
                            </div>
                            <div class="time d-flex flex-column gap-2">
                                <input type="text" id="time" placeholder="Time ">
                                <label for="time" class="label-warning text-end text-danger">Error</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item-footer d-flex justify-content-end gap-5 align-items-center">
                    <div class="total-price">$60</div>
                    <div class="book-serive">SELECT</div>
                </div>
            </div>

            <div class="service-item mb-5">
                <div class="row">
                    <div class="col-12 col-sm-3 img"><img src="../image/service/hot-spring2.jpg" alt="" width="100%"></div>
                    <div class="col-12 col-sm-9 d-flex justify-content-around">
                        <div class="service-infor">
                            <div class="service-name">HOT SPRING</div>
                            <div class="ap"><span class="fw-bold">AM: </span>5:00 am - 11:00 am</div>
                            <div class="pm"><span class="fw-bold">PM: </span>13:00 pm - 23:00 pm</div>
                            <div class="warning">No childrent from 16</div>
                            <div class="price">$10/Person</div>
                        </div>
                        <div class="user-input-service">
                            <div class="seats d-flex flex-column gap-2">
                                <input type="text" id="seat-number" placeholder="Your seats ">
                                <label for="seat-number" class="label-warning text-end text-danger">Error</label>
                            </div>
                            <div class="time d-flex flex-column gap-2">
                                <input type="text" id="time" placeholder="Time ">
                                <label for="time" class="label-warning text-end text-danger">Error</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item-footer d-flex justify-content-end gap-5 align-items-center">
                    <div class="total-price">$20</div>
                    <div class="book-serive">SELECT</div>
                </div>
            </div>

            <div class="service-item mb-5">
                <div class="row">
                    <div class="col-12 col-sm-3 img"><img src="../image/service/massage.avif" alt="" width="100%"></div>
                    <div class="col-12 col-sm-9 d-flex justify-content-around">
                        <div class="service-infor">
                            <div class="service-name">MASSAGE</div>
                            <div class="ap"><span class="fw-bold">AM: </span>6:00 am - 11:30 am</div>
                            <div class="pm"><span class="fw-bold">PM: </span>13:00 pm - 23:00 pm</div>
                            <div class="warning">No childrent from 16</div>
                            <div class="price">$100/Person</div>
                        </div>
                        <div class="user-input-service">
                            <div class="seats d-flex flex-column gap-2">
                                <input type="text" id="seat-number" placeholder="Your seats ">
                                <label for="seat-number" class="label-warning text-end text-danger">Error</label>
                            </div>
                            <div class="time d-flex flex-column gap-2">
                                <input type="text" id="time" placeholder="Time ">
                                <label for="time" class="label-warning text-end text-danger">Error</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item-footer d-flex justify-content-end gap-5 align-items-center">
                    <div class="total-price">$200</div>
                    <div class="book-serive">SELECT</div>
                </div>
            </div>

            <div class="service-item mb-5">
                <div class="row">
                    <div class="col-12 col-sm-3 img"><img src="../image/service/meditation2.jpg" alt="" width="100%"></div>
                    <div class="col-12 col-sm-9 d-flex justify-content-around">
                        <div class="service-infor">
                            <div class="service-name">MEDITATION</div>
                            <div class="ap"><span class="fw-bold">AM: </span>4:00 am - 12:00 am</div>
                            <div class="pm"><span class="fw-bold">PM: </span>14:00 pm - 22:00 pm</div>
                            <div class="warning">No childrent from 16</div>
                            <div class="price">$35/Person</div>
                        </div>
                        <div class="user-input-service">
                            <div class="seats d-flex flex-column gap-2">
                                <input type="text" id="seat-number" placeholder="Your seats ">
                                <label for="seat-number" class="label-warning text-end text-danger">Error</label>
                            </div>
                            <div class="time d-flex flex-column gap-2">
                                <input type="text" id="time" placeholder="Time ">
                                <label for="time" class="label-warning text-end text-danger">Error</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item-footer d-flex justify-content-end gap-5 align-items-center">
                    <div class="total-price">$70</div>
                    <div class="book-serive">SELECT</div>
                </div>
            </div>

            <div class="service-item mb-5">
                <div class="row">
                    <div class="col-12 col-sm-3 img"><img src="../image/service/sauna.jpg" alt="" width="100%"></div>
                    <div class="col-12 col-sm-9 d-flex justify-content-around">
                        <div class="service-infor">
                            <div class="service-name">SAUNA</div>
                            <div class="ap"><span class="fw-bold">AM: </span>7:00 am - 11:00 am</div>
                            <div class="pm"><span class="fw-bold">PM: </span>12:00 pm - 13:00 pm</div>
                            <div class="warning">No childrent from 16</div>
                            <div class="price">$35/Person</div>
                        </div>
                        <div class="user-input-service">
                            <div class="seats d-flex flex-column gap-2">
                                <input type="text" id="seat-number" placeholder="Your seats ">
                                <label for="seat-number" class="label-warning text-end text-danger">Error</label>
                            </div>
                            <div class="time d-flex flex-column gap-2">
                                <input type="text" id="time" placeholder="Time ">
                                <label for="time" class="label-warning text-end text-danger">Error</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item-footer d-flex justify-content-end gap-5 align-items-center">
                    <div class="total-price">$70</div>
                    <div class="book-serive">SELECT</div>
                </div>
            </div>
        </div>
    </article>

    <footer>
        <div class="copy-right">Copyright © 2025 VANTRUYEN05. All right reserved.</div>
    </footer>







    

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="../components/custom.js"></script>
    <script src="../UserFE/custom.js"></script> 
</body>
</html>