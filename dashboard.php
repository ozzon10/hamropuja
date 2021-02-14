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
    <title>dashboard</title>
</head>

<body>
    <div class="dashboard">
        <?php include 'inc/header.php'; ?>
        <div class="content">
            <div class="container-xxl">
                <div class="row mt-5">
                    <div class="col-md-3 mb-3">
                        <div class="panel text-center bg-white shadow-sm">
                            <div class="mb-4">
                                <img class="rounded-circle pic mt-3"
                                    src="assets/img/Image-37.png" alt="">
                            </div>
                            <div class="list-group rounded-0" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                    data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home">Profile</a>
                                <a class="list-group-item list-group-item-action" id="list-temple-list"
                                    data-bs-toggle="list" href="#list-temple" role="tab"
                                    aria-controls="temple">Temple/Monastries</a>
                                <a class="list-group-item list-group-item-action" id="list-astrologer-list"
                                    data-bs-toggle="list" href="#list-astrologer" role="tab"
                                    aria-controls="astrologer">Astrologer/Monk</a>
                                <a class="list-group-item list-group-item-action" id="list-puja-list"
                                    data-bs-toggle="list" href="#list-puja" role="tab" aria-controls="puja">Puja</a>
                                <a class="list-group-item list-group-item-action" id="list-shop-list"
                                    data-bs-toggle="list" href="#list-shop" role="tab" aria-controls="puja">Shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content bg-white shadow-sm" id="nav-tabContent">
                            <div class="tab-pane fade show active p-3" id="list-home" role="tabpanel"
                                aria-labelledby="list-home-list">
                                <div class="profile">
                                    <div class="row">
                                        <h4><strong>My Profile</strong></h4>
                                        <hr>
                                    </div>
                                    <form class="row g-3">
                                        <div class="col-md-5">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="number" class="form-control" id="phone">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="horoscope" class="form-label">Horoscope</label>
                                            <select id="horoscope" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-10">
                                            <label for="paddress" class="form-label">Permanent Address</label>
                                            <input type="text" class="form-control" id="paddress">
                                        </div>
                                        <div class="col-md-10">
                                            <label for="taddress" class="form-label">Temporary Address</label>
                                            <input type="text" class="form-control" id="taddress">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="kundali" class="form-label">Kundali (optional)</label>
                                            <input type="file" class="form-control" id="kundali">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="gotra" class="form-label">Gotra</label>
                                            <input type="text" class="form-control" id="gotra">
                                        </div>
                                        <strong>Change Password</strong>
                                        <div class="col-md-5">
                                            <label for="oldpassword" class="form-label">Old Password</label>
                                            <input type="text" class="form-control" id="oldpassword">
                                        </div>
                                        <div class="col-md-5 d-none d-md-block"></div>
                                        <div class="col-md-5">
                                            <label for="newpassword" class="form-label">New Password</label>
                                            <input type="text" class="form-control" id="newpassword">
                                        </div>
                                        <div class="col-md-5 d-none d-md-block"></div>
                                        <div class="col-md-5">
                                            <label for="cpassword" class="form-label">Confirm Password</label>
                                            <input type="text" class="form-control" id="cpassword">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-temple" role="tabpanel"
                                aria-labelledby="list-temple-list">Temple</div>
                            <div class="tab-pane fade p-3" id="list-astrologer" role="tabpanel"
                                aria-labelledby="list-astrologer-list">
                                <div class="astrologer">
                                    <div class="row">
                                        <div class="col-6">
                                            <h4><strong>Astrologer / Monk</strong></h4>
                                        </div>
                                        <div class="col-6">
                                            <div class="dropdown">
                                                <a class="btn btn-light btn-sm dropdown-toggle float-end" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                  2020
                                                </a>
                                              
                                                <ul class="dropdown-menu" style="min-width: 50px;" aria-labelledby="dropdownMenuLink">
                                                  <li><a class="dropdown-item" href="#">2020</a></li>
                                                  <li><a class="dropdown-item" href="#">2021</a></li>
                                                </ul>
                                              </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-3 col-sm-1 text-center">
                                            <div class="date border p-1">
                                                <h5 class="m-0">20</h5>
                                                <span>Dec</span>
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-7">
                                            <span class="float-start">Astro. Prem Raj Ghimire</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="float-end">
                                                <span>Txnid:</span><span id="txnid"> 0012</span>
                                                <img id="txnstatus" src="assets/img/autorenew-24px.svg">
                                                <a href=""><img src="assets/img/keyboard_arrow_right-24px.svg"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-3 col-sm-1 text-center">
                                            <div class="date border p-1">
                                                <h5 class="m-0">20</h5>
                                                <span>Dec</span>
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-7">
                                            <span class="float-start">Astro. Prem Raj Ghimire</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="float-end">
                                                <span>Txnid:</span><span id="txnid"> 0012</span>
                                                <img id="txnstatus" src="assets/img/done-24px.svg">
                                                <a href=""><img src="assets/img/keyboard_arrow_right-24px.svg"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-3" id="list-puja" role="tabpanel" aria-labelledby="list-puja-list">
                                <div class="astrologer">
                                    <div class="row">
                                        <div class="col-6">
                                            <h4><strong>Puja History</strong></h4>
                                        </div>
                                        <div class="col-6">
                                            <div class="dropdown">
                                                <a class="btn btn-light btn-sm dropdown-toggle float-end" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                  2020
                                                </a>
                                              
                                                <ul class="dropdown-menu" style="min-width: 50px;" aria-labelledby="dropdownMenuLink">
                                                  <li><a class="dropdown-item" href="#">2020</a></li>
                                                  <li><a class="dropdown-item" href="#">2021</a></li>
                                                </ul>
                                              </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-3 col-sm-1 text-center">
                                            <div class="date border p-1">
                                                <h5 class="m-0">20</h5>
                                                <span>Dec</span>
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-7">
                                            <span class="float-start">Ganesh Puja</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="float-end">
                                                <span>Txnid:</span><span id="txnid"> 0012</span>
                                                <img id="txnstatus" src="assets/img/autorenew-24px.svg">
                                                <a href=""><img src="assets/img/keyboard_arrow_right-24px.svg"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-3 col-sm-1 text-center">
                                            <div class="date border p-1">
                                                <h5 class="m-0">20</h5>
                                                <span>Dec</span>
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-7">
                                            <span class="float-start">Shiva Puja</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="float-end">
                                                <span>Txnid:</span><span id="txnid"> 0012</span>
                                                <img id="txnstatus" src="assets/img/done-24px.svg">
                                                <a href=""><img src="assets/img/keyboard_arrow_right-24px.svg"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="list-shop" role="tabpanel" aria-labelledby="list-shop-list">
                                Shop</div>
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