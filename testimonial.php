<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css" />
    <title>Testimonial</title>
</head>

<body>
    <div class="testimonial">
        <?php include 'inc/header.php'; ?>
        <div class="content">
            <div class="container-xxl">
                <div class="title">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="float-start"><strong>Testimonials</strong></h1>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="clientsays">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="imgcover ">
                                        <img src="assets/img/Image-37.png" class="rounded-circle d-block mx-auto mx-md-0">
                                    </div>
                                </div>
                                <div class="col text-center text-md-start p-2">
                                    <h5>Ram kumar</h5>
                                    <p>Usually, it is considered luck to see something that you don’t usually see. But I would want to define this experience as something else. Getting to see the level of dedication, enthusiasm, unity, respect and professionalism from the team of Hamro Puja. Yes, it was rare. Maybe the reason it was so inspirational. Thank you, Hamro Puja team.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="imgcover">
                                        <img src="assets/img/Image-38.png" class="rounded-circle d-block mx-auto mx-md-0">
                                    </div>
                                </div>
                                <div class="col text-center text-md-start p-2">
                                    <h5>Ram kumar</h5>
                                    <p>Usually, it is considered luck to see something that you don’t usually see. But I would want to define this experience as something else. Getting to see the level of dedication, enthusiasm, unity, respect and professionalism from the team of Hamro Puja. Yes, it was rare. Maybe the reason it was so inspirational. Thank you, Hamro Puja team.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="imgcover">
                                        <img src="assets/img/Image-39.png" class="rounded-circle d-block mx-auto mx-md-0">
                                    </div>
                                </div>
                                <div class="col text-center text-md-start p-2">
                                    <h5>Ram kumar</h5>
                                    <p>Hamro Puja not stands to exist but to make a change. Changes that we wanted to see in a place, we aspire to stand. Not only did Hamro Puja supported and influenced to change the traditional system of our prayers and wishes, but in the verge of making the change, they changed the perception we put on ourselves. Hamro Puja is not just a platform to make prayers and wishes but a strong bonding between people who have a minute faith in religious values. Best wishes, Hamro Puja!!

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="banner">
                            <p class="float-end mt-5 me-5">प्रस्तुत छ, घरमै बसेर आफ्नो कुण्डलीको बारेमा सम्पूर्ण <br>जानकारी प्राप्त गर्ने नयाँ तरिका</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        jQuery(function() {
            $('.feedback').click(function() {
                $(this).find('.content').toggleClass('open');
            })
        })
    </script>
</body>

</html>