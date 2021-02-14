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
    <title>login</title>
</head>

<body>
    <div class="login">
    <?php include 'inc/header.php'; ?>
        <div class="content">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-md-4">
                        <p style="font-size: 20px; margin-top: 130px;"><strong>Following are the features you get access
                                to after login.</strong></p>
                        <p>Easy Discussion with Astrologers and Lamas.</p>

                        <p>Discount of easy pass on occasion of any places.</p>

                        <p>10% discount of any karma puja long life</p>

                        <p>15% discount on items you buy from the shop</p>
                        <p style="font-size: 20px; margin-top: 80px;"><strong>Book now and relief your tension whole
                                life time.</strong></p>
                    </div>
                    <div class="col-md-8 col-lg-7 offset-lg-1">
                        <form class="shadow-sm">
                            <div class="form-body">
                                <p class="form-title"><strong>Login your Account</strong></p>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-xl-6 col-lg-7 col-sm-8  col-10">
                                        <input type="text" class="form-control rounded-0" id="username"
                                            placeholder="Username / Email">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-xl-6 col-lg-7 col-sm-8  col-10">
                                        <input type="password" class="form-control rounded-0" id="password"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3">
                                    <div class="col-xl-6 col-lg-7 col-sm-8  col-10">
                                        <button type="submit" class="btn btn-primary"
                                            style="width: 100%;"><strong>Login</strong></button>
                                    </div>
                                </div>
                                <p class="mb-4"><strong>or</strong></p>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-xl-6 col-lg-7 col-sm-8  col-10">
                                        <button type="submit" class="btn btn-secondary"
                                            style="width: 100%;"><strong>Login with Facebook</strong></button>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-xl-6 col-lg-7 col-sm-8  col-10">
                                        <button type="submit" class="btn btn-secondary"
                                            style="width: 100%;"><strong>Login with Google</strong></button>
                                    </div>
                                </div>
                                <p class=""><strong>Forgot Password ?</strong></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-md-3 mt-4">
                        <div><img src="assets/img/ezgif.png" alt=""></div>
                        <br>
                        <div class="newsletter">
                            <form action="">
                                <div class="mb-2">
                                    <input type="text" placeholder="Email" class="form-control" />
                                </div>

                                <button class="btn btn-sm btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col offset-sm-1 mt-5">
                        <div class="menu">
                            <div class="row">
                                <div class="col-md col-sm-6">
                                    <ul class="list-unstyled">
                                        <li><a href="">About Hamro Puja</a></li>
                                        <li><a href="">We offer</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="">Downloads</a></li>
                                    </ul>
                                </div>
                                <div class="col-md col-sm-6">
                                    <ul class="list-unstyled">
                                        <li><a href="">Rudraksha</a></li>
                                        <li><a href="">Perl's</a></li>
                                        <li><a href="">Puja Sets</a></li>
                                    </ul>
                                </div>
                                <div class="col-md col-sm-6">
                                    <ul class="list-unstyled">
                                        <li><a href="">Horoscope</a></li>
                                        <li><a href="">Patro</a></li>
                                        <li><a href="">BS to AD</a></li>
                                        <li><a href="">Literature</a></li>
                                        <li><a href="">Forex</a></li>
                                    </ul>
                                </div>
                                <div class="col-md col-sm-6">
                                    <ul class="list-unstyled">
                                        <li><a href="">Astrologer</a></li>
                                        <li><a href="">Temples</a></li>
                                        <li><a href="">Puja</a></li>
                                        <li><a href="">Sait Herne</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <div class="float-md-start">
                            <p><small>Hamropuja is one of the religious app include booking of religious elements across
                                    Nepal via online <br /> © Hamro Puja 2021. All Rights Reserved.</small></p>
                        </div>
                        <div class="float-md-end">
                            <a href=""><img src="assets/img/facebook.svg"></a>
                            <a href=""><img src="assets/img/instagram.svg"></a>
                        </div>
                    </div>
                </div>
            </div>


        </footer>
        <!-- <div class="feedback open">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Feedback</a>
                </li>

            </ul>
            <div class="content">

                <form action="">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="">
                                <label for="exampleInputPassword1" class="form-label">Email Address</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                        </div>
                        <div class="col-12 col-md-5">

                            <div class="">
                                <label for="exampleInputPassword1" class="form-label">Write you Comment</label>
                                <textarea name="" class="form-control" id="" cols="30"
                                    rows="6">Your Message here.</textarea>
                            </div>

                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-end">
                            <div class="w-100 d-grid "><button type="submit" class="btn btn-primary ">Submit</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div> -->
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