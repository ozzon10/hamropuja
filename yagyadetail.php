<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/all.css" />
    <title>yagyadetail</title>
</head>

<body>
    <div class="yagyadetail">
    <?php include 'inc/header.php'; ?>
        <div class="content">
            <div class="container-xxl">
                <div class="title">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="float-start"><strong>Yagya</strong></h1>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>

                </div>
                <div class="row" style="margin-top:45px;">
                    <div class="col-md-7 col-xl-7 col-12 detail">
                        <div class="row">
                            <span class="float-start title" style="margin-top: 0;"><strong>Yagya for
                                    Surya</strong></span>
                            <p>Internally Surya represents our tendency, ability and talent to act as a leader or
                                authority. Physically Surya rules the aspect of the body, brain, bones, right eye.
                                Person, who wants to enhance positive results and neutralize negative results, should
                                perform Surya yagya.</p>
                        </div>
                    </div>
                    <div class=" col-md-3 col-xl-2 col-sm-4 col-7 order-md-first">
                        <div class="image" style="height: 154px; background-color: grey;"><img
                                src="assets/img/surya.jpg" class="img-fluid" alt=""></div>
                    </div>

                    <div class=" col-md-2 col-xl-2 col-sm-4 col-5 offset-xl-1 order-md-last">
                        <span style="font-size: 24px;">USD 1,500</span>
                    </div>
                </div>
                <div class="row booking">
                    <div><strong>Booking</strong></div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="calender mb-3" style="height: 610px; background-color: white;"></div>
                    </div>
                    <div class="col-lg-4 col-md-5 offset-lg-1">
                        <form class="row justify-content-center">
                            <div class="col-12">
                                <input type="text" class="form-control rounded-0" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Puja at">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control rounded-0" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="In a name of ">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control rounded-0" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Full Name">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control rounded-0" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Phone Number">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control rounded-0" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <img src="assets/img/Screenshot (33).png" class="img-fluid mb-3 "><br>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"
                                    style="width: 100%;"><strong>Submit</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="banner">
                            <p class="float-end mt-5 me-5">प्रस्तुत छ, घरमै बसेर आफ्नो कुण्डलीको बारेमा सम्पूर्ण
                                <br>जानकारी प्राप्त गर्ने नयाँ तरिका
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
        <script>
            jQuery(function(){
                $('.feedback').click(function(){
                    $(this).find('.content').toggleClass('open');
                })
            })
        </script>
</body>

</html>