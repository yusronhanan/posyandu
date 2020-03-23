<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <link rel="icon" href="<?php echo base_url() ?>assets/img/ASSET 3 - LOGO.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>assets/img/ASSET 3 - LOGO.png" alt="logo" width="40px" height = "40px"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url() ?>index.php/home/schedule">Schedule</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url() ?>index.php/home/articles">Articles</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url() ?>index.php/home/#aboutus">About Us</a>
                                </li>
                                
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>assets/blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo base_url() ?>assets/services.html">services</a>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>assets/dep.html">depertments</a>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>assets/elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>assets/blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="<?php echo base_url() ?>assets/blog.html">blog</a>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>assets/single-blog.html">Single blog</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url() ?>assets/contact.html">Contact</a>
                                </li> -->
                            </ul>
                        </div>
                        <!-- <a class="btn_2 d-none d-lg-block" href="<?php echo base_url() ?>assets/#">HOT LINE  +</a> -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php $this->load->view($main_view); ?>
    
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="<?php echo base_url() ?>" class="footer_logo"> <img src="<?php echo base_url() ?>assets/img/ASSET 3 - LOGO.png" alt="logo" width="40px" height = "40px"> </a>
                        <p>E-Posyandu <br> We serve by love. </p>
                        <div class="social_logo">
                            <!-- <a href="<?php echo base_url() ?>assets/#"><i class="ti-facebook"></i></a> -->
                            <!-- <a href="<?php echo base_url() ?>assets/#"> <i class="ti-twitter"></i> </a> -->
                            <!-- <a href="#"><i class="ti-instagram"></i></a> -->
                            <!-- <a href="<?php echo base_url() ?>assets/#"><i class="ti-skype"></i></a> -->
                        </div>
                    </div>
                 
                   
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <!-- <a href="<?php echo base_url() ?>assets/#"><i class="ti-facebook"></i></a> -->
                        <!-- <a href="<?php echo base_url() ?>assets/#"> <i class="ti-twitter"></i> </a> -->
                        <!-- <a href="#"><i class="ti-instagram"></i></a> -->
                        <!-- <a href="<?php echo base_url() ?>assets/#"><i class="ti-skype"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="<?php echo base_url() ?>assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="<?php echo base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.form.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>
    <script src="<?php echo base_url() ?>assets/js/contact.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>

</html>