<script>
    $(document).ready(function() {
        $(".dropdown").hover(function() {
            var dropdownMenu = $(this).children(".dropdown-menu");
            if (dropdownMenu.is(":visible")) {
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });
</script>
<div class="header">
    <nav class="navbar navbar-expand-xl navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand bg-red" href="index.php"><img src="assets/img/ezgif.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="astrologer.php">Astrologer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Monk</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="temple.php" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Temple
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Monastery</a></li>
                            <li><a class="dropdown-item" href="#">Kunda</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Monastries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="puja.php">Puja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="patro.php">Patro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kundali.php">Kundali</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="yagya.php">Yagya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="membership.php">Membership</a>
                    </li>
                </ul>

                <form class="d-flex action">

                    <div class="btn-group me-2 lang" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            EN
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="#">NP</a></li>
                        </ul>
                    </div>

                    <div class="btn-group me-2 cart" role="group">

                        <a href="" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-sm btn-link dropdown-toggle"><span class="badge bg-light text-secondary">1</span><img src="assets/img/shopping_cart-black-18dp-1.svg" alt=""></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="btnGroupDrop1">
                            <li class="d-flex justify-content-between pb-2 mb-2">
                                <div class="title "><a href="#" class="ps-0">Two Mukhi Rudraksha Mala</a></div>
                                <div class="text-end qty">x 2</div>
                                <div class="text-end price">$200</div>
                            </li>
                            <li class="d-flex justify-content-between">
                                <div class="title "><a href="#" class="ps-0">Two Mukhi Rudraksha Mala</a></div>
                                <div class="text-end qty">x 2</div>
                                <div class="text-end price">$200</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="">
                                <div class="float-end"><a href="cart.php" class=" btn btn-sm btn-primary">Checkout</a></div>

                            </li>
                        </ul>
                    </div>

                    <a href="dashboard.php" class="btn btn-sm btn-link"><img src="assets/img/person-black-18dp.svg" alt=""></a>
            </div>
            </form>

        </div>
    </nav>

    <div class="d-flex justify-content-md-between flex-column flex-md-row subhead align-items-center">
        <div class="py-2 px-3 overflow-hidden utility">
            <span class="pe-3">USD 1 = NRs. 114 | EUR 1 = 141.45 </span>
            <span>२२ पुष २०७७, बुधवार </span>
        </div>
        <div class="topbtns">
            <div class="float-start search">
                <form class="d-flex">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Search">
                        <span class="ms-1 me-1" id="inputGroup-sizing-sm"><img src="assets/img/loupe.svg"></span>
                    </div>
                </form>
            </div>
            <div class="float-end download">
                <a href="#" class="btn btn-sm btn-primary d-lg-block d-none rounded-0 "><strong>Download App</strong></a>
                <a href="#" class="btn btn-sm btn-primary d-block d-lg-none rounded-0"><img src="assets/img/get_app-24px.svg"></a>

            </div>
            <div class="float-end">
                <a href="donation.php" class="btn btn-sm btn-primary d-lg-block d-none rounded-0 donate"><strong>Donate to Temple/Monastery</strong></a>
                <a href="donation.php" class="btn btn-sm btn-primary d-block d-lg-none rounded-0 donate"><img src="assets/img/hand-holding-usd-solid.svg"></a>
            </div>

        </div>
    </div>

</div>