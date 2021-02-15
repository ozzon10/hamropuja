<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css" />
    <title>cart</title>
</head>

<body>
    <div class="cart">
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
                        <h1><strong>Shopping Cart</strong></h1>
                        <hr class="mb-0">
                    </div>
                </div>
                <div class="mt-5" style="background-color: white;">
                    <div class="container-xxl">
                        <div class="row mb-3">
                            <div class="col-md-5 mt-4 mb-4">
                                <div class="row justify-content-center mb-4">
                                    <div class="col-sm-10">
                                        <h4><strong>Check Out</strong></h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-sm-10">
                                        <select class="form-select rounded-0" id="temple" aria-label="Default select example">
                                            <option disabled selected hidden>Country</option>
                                            <option>Nepal</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row justify-content-center mb-4">
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control rounded-0" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control rounded-0" id="name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control rounded-0" id="phone" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control rounded-0" id="city" placeholder="City">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control rounded-0" id="strt" placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control rounded-0" id="postal" placeholder="Postal Code">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-sm-7">
                                        <button type="submit" class="btn btn-primary" style="width: 100%;"><strong>Place Order</strong></button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7 col-lg-6 offset-lg-1 mt-4 mb-4 order-first order-md-last">
                                <div class="row">
                                    <div class="col-12">
                                        <h4><strong>Cart Item</strong></h4>
                                    </div>
                                </div>
                                <div class="row items mt-4">
                                    <div class="card mb-4">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="image" style=" background-color: grey; width: 100%;">
                                                    <img src=".." class="img-fluid" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="card-body">
                                                    <p class="card-title"><strong>White Sapphire Stone</strong></p>
                                                    <div class="row">
                                                        <div class="col-3 col-sm-2">Qty:</div>
                                                        <div class="col-6 col-sm-4 col-md-5 col-xl-4">
                                                            <div class="input-group">

                                                                <button class="btn minus-btn btn-outline-secondary btn-number" type="button" data-type="minus" data-field=""><span>&darr;</span></button>
                                                                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                                                <button class="btn plus-btn btn-outline-secondary btn-number" type="button" data-type="plus" data-field=""><span>&uarr;</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 col-sm-6 col-md-5">
                                                            <p class="float-end">USD <span class="itemprice">400.0</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="image" style=" background-color: grey; width: 100%;">
                                                    <img src="..." class="img-fluid" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="card-body">
                                                    <p class="card-title"><strong>Two Mukhi Rudraksha</strong></p>
                                                    <div class="row">
                                                        <div class="col-3 col-sm-2">Qty:</div>
                                                        <div class="col-6 col-sm-4 col-md-5 col-xl-4">
                                                            <div class="input-group">

                                                                <button class="btn minus-btn btn-outline-secondary btn-number" type="button" data-type="minus" data-field=""><span>&darr;</span></button>
                                                                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                                                <button class="btn plus-btn btn-outline-secondary btn-number" type="button" data-type="plus" data-field=""><span>&uarr;</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 col-sm-6 col-md-5">
                                                            <p class="float-end">USD 400.0</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="image" style=" width: 100%;">
                                                    <img src="assets/img/Image-45.png" class="img-fluid" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="card-body">
                                                    <p class="card-title"><strong>One Mukhi Rudraksha</strong></p>
                                                    <div class="row">
                                                        <div class="col-3 col-sm-2">Qty:</div>
                                                        <div class="col-6 col-sm-4 col-md-5 col-xl-4">
                                                            <div class="input-group">

                                                                <button class="btn minus-btn btn-outline-secondary btn-number" type="button" data-type="minus" data-field=""><span>&darr;</span></button>
                                                                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                                                <button class="btn plus-btn btn-outline-secondary btn-number" type="button" data-type="plus" data-field=""><span>&uarr;</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 col-sm-6 col-md-5">
                                                            <p class="float-end">USD 400.0</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="offset-3 col-3">
                                        <span><strong>Total</strong></span>
                                    </div>
                                    <div class="col-5">
                                        <span class="float-end"><strong></strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        jQuery(function() {
            $('.feedback').click(function() {
                $(this).find('.content').toggleClass('open');
            })
        })
    </script>
    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.plus-btn').click(function(e) {


                e.preventDefault();
                var quantity = parseInt($('#quantity').val());
                $('#quantity').val(quantity + 1);

            });

            $('.minus-btn').click(function(e) {
                e.preventDefault();

                var quantity = parseInt($('#quantity').val());

                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>
</body>

</html>