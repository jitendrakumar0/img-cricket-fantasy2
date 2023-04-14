<?php include 'preloader.php' ?>
<div class=" header w-100 position-absolute zi-10">
    <div class="container">
        <nav class="navbar navbar-expand-lg py-2 py-lg-auto">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo f_path ?>#hero">
                    <img src="<?php echo f_path ?>assets/img/logos/logo-white.png" alt="">
                </a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white">menu</span>
                </button> -->
                <div class="mobileMenu d-flex gap-2">
                    <button type="btn" class="btn btn-theme1 fs-14 fw-600 px-3 py-1 shadow-none rounded-pill d-block d-lg-none"><i class="imgs img-arrow-to-bottom d-block d-sm-none"></i><span class="d-none d-sm-block">Download Now</span></button>
                    <a class="btn navbar-toggler text-white shadow-none px-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                        <p class="fs-12 text-white m-0">Menu</p>
                        <span class="d-flex justify-content-between mt-1">
                            <span class="w-5px h-5px rounded-pill bg-white d-block"></span>
                            <span class="w-5px h-5px rounded-pill bg-white d-block"></span>
                            <span class="w-5px h-5px rounded-pill bg-white d-block"></span>
                        </span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo f_path ?>#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo f_path ?>about-us/">About Us</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link">Features</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo f_path ?>how-play/">How to Play</a>
                        </li>
                    </ul>
                    <button type="btn" class="btn btn-theme1 fs-15 fw-600 px-4 shadow-none rounded-pill d-none d-lg-block">Download Now</button>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="offcanvas offcanvas-start bg-theme3 responsiveMenu" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
    <div class="offcanvas-header border-bottom border-gray">
        <a class="offcanvas-title w-40" id="offcanvasWithBackdropLabel">
            <img class="w-100" src="<?php echo f_path ?>assets/img/logos/logo-white.png" alt="">
        </a>
        <a type="button" class="btn closeBtn shadow-none text-reset d-flex" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="imgl img-times text-white fs-24"></i>
        </a>
    </div>
    <div class="offcanvas-body">
        <div class="">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white active" aria-current="page" href="<?php echo f_path ?>#hero"><i class="imgl img-angle-double-right"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo f_path ?>about-us/"><i class="imgl img-angle-double-right"></i> About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo f_path ?>how-play/"><i class="imgl img-angle-double-right"></i> How to Play</a>
                </li>
            </ul>
        </div>
    </div>
</div>