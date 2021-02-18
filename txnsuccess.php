<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css" />
    <title>transcation success</title>
</head>
<body>
    <div class="txnsuccess">
        <?php include 'inc/header.php'; ?>
        <div class="content">
            <div class="container-xxl">
                <div class="box col-md-6 col-11">
                    <div class="box-content text-center">
                        <h4>Thank You!<br> Your transcation is successful</h4>
                        <img src="assets/img/success-svgrepo-com.svg">
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