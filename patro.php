<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css" />
    <title>patro</title>
</head>
<body>
    <div class="patro">
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
                            <h1><strong>Patro</strong></h1>
                            <hr class="mb-0">
                        </div>
                    </div>
                
                <div class="row" style="margin-top:50px;">
                    <div class="col-9">
                        <iframe src="https://nepalicalendar.rat32.com/addons/nepali-calendar-monthly-big.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:665px; height:598px;" allowtransparency="true"></iframe>
                    </div>
                    <div class="col-3">
                        <iframe src="https://nepalicalendar.rat32.com/clockwidget/nepali-clock-widget-horizontal-green.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:270px; height:121px;" allowtransparency="true"></iframe>
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