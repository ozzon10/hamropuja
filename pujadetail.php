<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css" />
    <title>pujadetail</title>
</head>

<body>
    <div class="pujadetail">
    <?php include 'inc/header.php'; ?>
    <div class="content">
            <div class="container-xxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Puja</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mandir Puja</li>
                        </ol>
                    </nav>
                    <div class="row title">
                        <div class="col">
                            <h1><strong>Shiva Puja</strong></h1>
                            <hr class="mb-0">
                        </div>
                    </div>
                
                <div class="row mt-4">
                    <p>Pooja of the Shiva Linga is performed with the prescribed articles like flowers, coconut etc.,
                        Shivopasana mantra is recited and archana is performed by reciting the 108 Namavali (names) of
                        Lord Shiva. The Shodasa Upacharas are performed. It will be done in your name and with your
                        sankalpa, i.e., the specific purpose for which you are getting the pooja performed. This Siva
                        Puja will be performed exclusively for you. Pooja as above but archana with 1008 names of Lord
                        Shiva.It will be done in your name and with your sankalpa, i.e., the specific purpose for which
                        you are getting the pooja performed. This Pooja will be performed exclusively for you.</p>
                </div>
                <div class="row" style="margin-top: 35px;">
                    <div id="nav" class="col-md-3 mt-5 mb-3 d-none d-md-block order-md-last">
                        <a href="#content1">- Panchamrit Puja</a><br>
                        <a href="#content2">- Panchamrit Puja with Balbhog</a>
                    </div>
                    <div class="col-12 mb-3 d-md-none order-md-last">
                        <div class="dropdown shadow-sm" id="nav">
                            <button style="width: 100%;" class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Choose a Puja
                            </button>
                            <ul style="width: 100%;" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#content1">Panchamrit Puja</a></li>
                                <li><a class="dropdown-item" href="#content2">Panchamrit Puja with Balbhog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 toggle" style="display:block;" id="content1">
                        <div class="row">
                            <div class="col-12">
                                <span class="text-center">
                                    <h4><strong>Panchamrit Puja</strong></h4>
                                </span>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="image" style="height:270px; background-color: grey; overflow: hidden;"><img src="assets/img/Image-44.png" class="img-fluid"></div>
                            </div>
                            <div class="col-sm-9 mt-4">
                                <p>Pooja of the Shiva Linga is performed with the prescribed articles like flowers,
                                    coconut etc., Shivopasana mantra is recited and archana is performed by reciting the
                                    108 Namavali (names) of Lord Shiva. The Shodasa Upacharas are performed.</p>
                                <p>Day 1 - <br>Day 2- <br>Day 3-</p>
                            </div>
                            <div class="col-sm-3 align-self-end">
                                <a href="#" class="btn btn-primary" style="width: 100%;">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 toggle" style="display:none;" id="content2">
                        <div class="row">
                            <div class="col-12">
                                <span class="text-center">
                                    <h4><strong>Panchamrit Puja with Balbhog</strong></h4>
                                </span>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="image" style="height:270px; background-color: grey; overflow: hidden;"><img src="assets/img/Image-44.png" class="img-fluid"></div>
                            </div>
                            <div class="col-sm-9 mt-4">
                                <p>Pooja of the Shiva Linga is performed with the prescribed articles like flowers,
                                    coconut etc., Shivopasana mantra is recited and archana is performed by reciting the
                                    108 Namavali (names) of Lord Shiva. The Shodasa Upacharas are performed.</p>
                                <p>Day 1 - <br>Day 2- <br>Day 3- <br>Day 4- </p>
                            </div>
                            <div class="col-sm-3 align-self-end">
                                <a href="#" class="btn btn-primary" style="width: 100%;">Book Now</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-5 review">
                    <div class="col-md-9">
                        <hr>
                        <div class="row">
                            <div class="col-3 col-sm-2">
                                <div class="imgcover rounded-circle"
                                    style="width: 72px;height:72px;background-color: grey; overflow:hidden;">
                                    <img src="assets/img/Image-37.png" alt="">
                                </div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <span class="name">Ram Prasad Ghimire</span><br>
                                <span><img src="assets/img/star-24px.svg"></span><span><img
                                        src="assets/img/star-24px.svg"></span><span><img
                                        src="assets/img/star-24px.svg"></span>
                                <span>Oct 20, 2021</span>
                                <p style="margin-top: 20px;">It's honestly the best app I've ever come across in my
                                    entire life 🤭👌🏻 I couldn't be more happier. It's quite terrific, I have to say.
                                    The translations are on point and correct, people are friendly on here. No
                                    arguments. Quite chilled vibes especially since the world is in lockdown 😅.</p>
                            </div>
                            <div class="col-3 col-sm-2">
                                <div class="imgcover rounded-circle"
                                    style="width: 72px;height:72px;background-color: grey; overflow:hidden;">
                                    <img src="assets/img/Image-37.png" alt="">
                                </div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <span class="name">Ram Prasad Ghimire</span><br>
                                <span><img src="assets/img/star-24px.svg"></span><span><img
                                        src="assets/img/star-24px.svg"></span><span><img
                                        src="assets/img/star-24px.svg"></span>
                                <span>Oct 20, 2021</span>
                                <p style="margin-top: 20px;">It's honestly the best app I've ever come across in my
                                    entire life 🤭👌🏻 I couldn't be more happier. It's quite terrific, I have to say.
                                    The translations are on point and correct, people are friendly on here. No
                                    arguments. Quite chilled vibes especially since the world is in lockdown 😅.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="banner">
                            <p class="float-end mt-5 me-5">प्रस्तुत छ, घरमै बसेर आफ्नो कुण्डलीको बारेमा सम्पूर्ण
                                <br>जानकारी प्राप्त गर्ने नयाँ तरिका</p>
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
        $("#nav a").click(function (e) {
            e.preventDefault();
            $(".toggle").hide();
            var toShow = $(this).attr('href');
            $(toShow).show();
        });
    </script>
    <script>
        jQuery(function () {
            $('.feedback').click(function () {
                $(this).find('.content').toggleClass('open');
            })
        })
    </script>
</body>

</html>