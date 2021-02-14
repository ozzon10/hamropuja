<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css" />
    <title>blogdetail</title>
</head>

<body>
    <div class="blogdetail">
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
                        <h1><strong>Blog</strong></h1>
                        <hr class="mb-0">
                    </div>
                </div>

                <div class="container">
                    <div class="card main mb-3 rounded-0">
                        <div class="image">
                            <img src="assets/img/Image-11.png" class="card-img-top img-fluid" alt="...">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mt-3">Title</h5>
                            <span><img src="assets/img/person-black-18dp.svg">author name . 02 Dec 2020</span>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quiepakis nostrud exercitation ullamco laboris nsi ut aliquip ex ea comepmodo
                                consetquat. Duis aute irure dolor in reprehenderit in voluptate velit esse cfgillum
                                dolore eutpe fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                inpeku culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium poeyi
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae apsb illo inventore veritatis
                                et quasi architecto beiatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                dolor sit amet, consectetur, adipisci velit, seprid quia non numquam eius modi tempora
                                incidunt ut labore et dolore magnam aliqueam quaerat voluptatem.</p>
                            <div class="review mt-5">
                                <span><img src="assets/img/favorite-24px.svg"> 609</span>
                                <span class="ms-4"><img src="assets/img/mode_comment-24px.svg"> 2</span>
                                <span class="ms-4"><img src="assets/img/share-24px.svg"></span>
                            </div>
                            <div class="comment mt-5">
                                <span>Comment</span>
                                <div class="col-12 col-md-6 mt-3">
                                    <div class="form-floating">
                                        <textarea class="form-control p-3" id="floatingTextarea2" style="height: 100px">Write a response</textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                    <a href="#" class="btn btn-primary" style="width: 100%;">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
                <div style="font-size: 18px;">
                    <strong>Latest Blogs</strong>
                </div>
                <div class="row list">
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-sm">
                            <div class="img-cover">
                                <img src="assets/img/Image-40.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title float-start">Title</h5>
                                        <span class="float-end">1h ago</span>
                                    </div>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row review">
                                    <div class="col">
                                        <span class="likes"><img src="assets/img/favorite-24px.svg"> 609</span>
                                        <span class="comments"><img src="assets/img/mode_comment-24px.svg"> 120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-sm">
                            <div class="img-cover">
                                <img src="assets/img/Image-41.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title float-start">Title</h5>
                                        <span class="float-end">1h ago</span>
                                    </div>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row review">
                                    <div class="col">
                                        <span class="likes"><img src="assets/img/favorite-24px.svg"> 609</span>
                                        <span class="comments"><img src="assets/img/mode_comment-24px.svg"> 120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-sm">
                            <div class="img-cover">
                                <img src="assets/img/Image-42.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title float-start">Title</h5>
                                        <span class="float-end">1h ago</span>
                                    </div>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row review">
                                    <div class="col">
                                        <span class="likes"><img src="assets/img/favorite-24px.svg"> 609</span>
                                        <span class="comments"><img src="assets/img/mode_comment-24px.svg"> 120</span>
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