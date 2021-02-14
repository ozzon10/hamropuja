<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css" />
    <title>productdetail</title>
</head>

<body>
    <div class="productdetail">
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
                            <h1><strong>Shop</strong></h1>
                            <hr class="mb-0">
                        </div>
                    </div>
                
                <div class="row mt-4">
                    <div class="col-xl-3 col-md-2">
                        <p><strong>Categories</strong></p>
                        <ul class="list-unstyled">
                            <li>Rudraksha</li>
                            <li>Pearls</li>
                            <li>Sapphire</li>
                        </ul>
                        <div class="popular d-none d-xl-block">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-3">
                                        <div class="image" style=" background-color: grey; width: 100%; height: 72px;">
                                            <img src="..." alt="...">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="card-body">
                                            <p class="card-title"><strong>White Sapphire Stone</strong></p>
                                            <p>USD 500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-3">
                                        <div class="image" style=" background-color: grey; width: 100%; height: 72px;">
                                            <img src="..." alt="...">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="card-body">
                                            <p class="card-title"><strong>White Sapphire Stone</strong></p>
                                            <p>USD 500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-3">
                                        <div class="image" style=" background-color: grey; width: 100%; height: 72px;">
                                            <img src="..." alt="...">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="card-body">
                                            <p class="card-title"><strong>White Sapphire Stone</strong></p>
                                            <p>USD 500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-9 col-md-10">
                        <div class="row">
                            <div class="col-sm-7">
                                <img class="image" src="assets/img/Image-45.png" alt="">
                            </div>
                            <div class="col-sm-5">
                                <h3><strong>One Mukhi Rudraksha</strong></h3>
                                <p>Rudraksha</p>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="mb-1">per piece</p>
                                        <h3>USD 450</h3>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-1">Qty</p>
                                        <div class="input-group">
                                            <button class="btn minus-btn btn-outline-secondary btn-number" type="button" data-type="minus" data-field=""><span>&darr;</span></button>
                                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                            <button class="btn plus-btn btn-outline-secondary btn-number" type="button" data-type="plus" data-field=""><span>&uarr;</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-6">
                                        <button type="button" style="width: 100%;" class="btn btn-light shadow-sm"><strong>Add to Cart</strong></button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" style="width: 100%;" class="btn btn-primary"><strong>Book Now</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="description mt-5">
                                <p>Basic few description on the basis of product. 4 / 5 lines of descrptions.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quiepakis nostrud exercitation ullamco laboris nsi ut aliquip ex ea comepmodo
                                    consetquat.</p>
                            </div>
                        </div>
                        <hr>
                        <h4 class="mt-3"><strong>Reviews</strong></h4>
                        <div class="row overflow-auto mt-3" style="height: 250px;">

                            <div class="col-3 col-sm-2">
                                <div class="imgcover rounded-circle" style="width: 72px;height:72px;background-color: grey; overflow: hidden;">
                                    <img src="..." style="height: 100%; width: 100%;">
                                </div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <span class="name">Ram Prasad Ghimire</span><br>
                                <span><img src="assets/img/star-24px.svg"></span><span><img src="assets/img/star-24px.svg"></span><span><img src="assets/img/star-24px.svg"></span>
                                <span>Oct 20, 2021</span>
                                <p style="margin-top: 20px;">It's honestly the best app I've ever come across in my
                                    entire life 🤭👌🏻 I couldn't be more happier. It's quite terrific, I have to say.
                                    The translations are on point and correct, people are friendly on here. No
                                    arguments. Quite chilled vibes especially since the world is in lockdown 😅.</p>
                            </div>
                            <div class="col-3 col-sm-2">
                                <div class="imgcover rounded-circle" style="width: 72px;height:72px;background-color: grey; overflow: hidden;">
                                    <img src="assets/img/Image-38.png" style="height: 100%; width: 100%;">
                                </div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <span class="name">Ram Prasad Ghimire</span><br>
                                <span><img src="assets/img/star-24px.svg"></span><span><img src="assets/img/star-24px.svg"></span><span><img src="assets/img/star-24px.svg"></span>
                                <span>Oct 20, 2021</span>
                                <p style="margin-top: 20px;">It's honestly the best app I've ever come across in my
                                    entire life 🤭👌🏻 I couldn't be more happier. It's quite terrific, I have to say.
                                    The translations are on point and correct, people are friendly on here. No
                                    arguments. Quite chilled vibes especially since the world is in lockdown 😅.</p>
                            </div>
                            <div class="col-3 col-sm-2">
                                <div class="imgcover rounded-circle" style="width: 72px;height:72px;background-color: grey; overflow: hidden;">
                                    <img src="..." style="height: 100%; width: 100%;">
                                </div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <span class="name">Ram Prasad Ghimire</span><br>
                                <span><img src="assets/img/star-24px.svg"></span><span><img src="assets/img/star-24px.svg"></span><span><img src="assets/img/star-24px.svg"></span>
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
    <script>
        jQuery(function() {
            $('.feedback').click(function() {
                $(this).find('.content').toggleClass('open');
            })
        })
    </script>
</body>

</html>