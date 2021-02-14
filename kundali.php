<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css" />
    <title>kundali</title>
</head>
<body>
    <div class="kundali">
    <?php include 'inc/header.php'; ?>
        <div class="content">
            <div class="container-xxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ol>
                    </nav>
                    <div class="row title">
                        <div class="col">
                            <h1><strong>Kundali</strong></h1>
                            <hr class="mb-0">
                        </div>
                    </div>
                
                <div class="row mt-5">
                    <div class="col-md-5">
                        <p class="intro"><strong>Introduction to Kundali</strong></p>
                        <p>
                            Kundali is the document of human being in hindu religion. One gets born he will have a document based on date and time of birth influence his life and activities in his life in future.
                        </p>
                        <p>
                            Jyotish can predict his obstacles and future aspects can help a person to act on that basis.
                        </p>
                    </div>
                    <div class="col-md-2 image mt-5 mb-4">
                        <img src="assets/img/Image-21.png" alt="kundali" class="img-fluid">
                    </div>
                    <div class="col-md-5">
                        <p class="intro mb-3"><strong>Want to make your Kundali?</strong></p>
                        <p>Submit your details below and we will make your kundali based on your information provided.</p>
                        <div class="col-md-10 col-lg-9">    
                            <form class="row justify-content-center">
                                <div class="mb-4 col-sm-9 col-md-12">
                                    <input type="text" class="form-control rounded-0" placeholder="Full Name">
                                </div>
                                <div class="mb-4 col-sm-9 col-md-12">
                                    <input type="date" class="form-control rounded-0" placeholder="Date">
                                </div>
                                <div class="mb-4 col-sm-9 col-md-12">
                                    <input type="text" class="form-control rounded-0" placeholder="Phone Number">
                                </div>
                                <div class="col-sm-9 col-md-12">
                                    <button type="submit" class="btn btn-primary shadow-sm" style="width: 100%;"><strong>Book Now</strong></button>    
                                </div>
                            </form>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        jQuery(function(){
            $('.feedback').click(function(){
                $(this).find('.content').toggleClass('open');
            })
        })
    </script>
</body>
</html>