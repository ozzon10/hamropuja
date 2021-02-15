<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css" />
    <title>memberform</title>
</head>

<body>
    <div class="memberform">
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
                        <h1><strong>Membership Application Form</strong></h1>
                        <hr class="mb-0">
                    </div>
                </div>


                <form class="mt-4">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="email" class="form-control" id="firstname">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="middlename" class="form-label">Middle Name</label>
                            <input type="email" class="form-control" id="middlename">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="horoscope" class="form-label">Religion</label>
                            <select id="horoscope" class="form-select">
                                <option selected>Choose Religion</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="password" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="horoscope" class="form-label">Horoscope</label>
                            <select id="horoscope" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label for="Kundali" class="form-label">Kundali (optional)</label>
                            <input type="file" class="form-control" id="Kundali">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="horoscope" class="form-label">Membership Plan</label>
                            <select id="horoscope" class="form-select">
                                <option selected>Choose Plan</option>
                                <option>Ruby</option>
                                <option>Opal</option>
                                <option>Divine</option>
                                <option>Holy</option>
                                <option>Sacred</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <p><strong>
                            <h4>Membership Policy</h4>
                        </strong></p>
                    <div class="row">
                        <div class="col-md-12">
                            <p><a href="terms.php">Read Terms and Condition</a></p>
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                I have read, understood and accept the Membership Policy.
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" id="submitbtn" style="width: 40%;" class="btn btn-primary" disabled><strong>Submit</strong></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <?php include 'inc/footer.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('#gridCheck').click(function() {
                if ($(this).is(':checked')) {
                    $('#submitbtn').attr('disabled', false);
                } else {
                    $('#submitbtn').attr('disabled', true);
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