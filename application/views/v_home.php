
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <!-- <h5>We are here for your care</h5> -->
                            <!-- <h2>Best Care & -->
                                <!-- Best Solution</h2> -->
                            <!-- <p>Insert your child's data to get their immunization schedule </p> -->
                            <h4>Insert your child's data to get their immunization schedule </h4>
                            
                            <br>
                            <br>
                            <form action="<?php echo base_url()?>index.php/home/schedule" method="get">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-8">
                                    <select  id="Select" name="gender" required>
                                        <option value="" selected>--Select Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                </div>
                                <p> Date of Birth : </p> <br>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <input type="date" class="form-control" id="date" name="date"  required>
                                    </div>
                                </div>
                                
                                <!-- <p> Addition Size Calculation (Not Required) : </p> <br> -->

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input type="number" class="form-control" id="head" placeholder="Head (cm)" name="head" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="number" class="form-control" id="weight" placeholder="Weight (kg)" name="weight" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="number" class="form-control" id="height" placeholder="Height (cm)" name="height" >
                                    </div>
                                </div>
                                <div class="regerv_btn">
                                    <button type="submit" class="btn_2">Get The Schedule</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="<?php echo base_url() ?>assets/img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

        <!--::blog_part start::-->
        <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php foreach ($rs as $r) { ?>

                <div class="col-sm-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?php echo base_url()?>assets/img/<?php echo $r->img?>" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="<?php echo base_url() ?>index.php/home/article/<?php echo $r->id_article?>">
                                    <h5 class="card-title"> <?php echo $r->title?></h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span> By <?php echo $r->written_by?></li>
                                    
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            <br>
            <center>
            <div class="regerv_btn">
                                <a href="<?php echo base_url() ?>index.php/home/articles" class="btn_2">See More Articles</a>
            </div>
</center>

        </div>
    </section>
    <!--::blog_part end::-->

    <!-- about us part start-->
    <section class="about_us padding_top" id="aboutus">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="<?php echo base_url() ?>assets/img/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>About us</h2>
                        <p>We are E-Posyandu will give the Best Service and the Best Solution.
                            We provide the immunization's schedule, articles, and calculation according to head size, weight size, and height size </p>
                        <a class="btn_2 " href="tel:0813-9939-9901">HOTLINE 0813-9939-9901</a>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="<?php echo base_url() ?>assets/img/icon/banner_1.svg" alt="">
                                <!-- <h5>Emergency</h5> -->
                            </div>
                            <div class="single_item">
                                <img src="<?php echo base_url() ?>assets/img/icon/banner_2.svg" alt="">
                                <!-- <h5>Appointment</h5> -->
                            </div>
                            <div class="single_item">
                                <img src="<?php echo base_url() ?>assets/img/icon/banner_3.svg" alt="">
                                <!-- <h5>Qualfied</h5> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <!-- <section class="feature_part"> -->
        <!-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?php echo base_url() ?>assets/img/icon/feature_1.svg" alt=""></span>
                            <h4>Better Future</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?php echo base_url() ?>assets/img/icon/feature_2.svg" alt=""></span>
                            <h4>Better Future</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="<?php echo base_url() ?>assets/img/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?php echo base_url() ?>assets/img/icon/feature_1.svg" alt=""></span>
                            <h4>Better Future</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?php echo base_url() ?>assets/img/icon/feature_2.svg" alt=""></span>
                            <h4>Better Future</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </section> -->
    <!-- feature_part start-->

    <!-- our depertment part start-->
    <!-- <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Our Depertment</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?php echo base_url() ?>assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?php echo base_url() ?>assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?php echo base_url() ?>assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?php echo base_url() ?>assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- our depertment part end-->

    <!--::doctor_part start::-->
    <!-- <section class="doctor_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2> Experienced Doctors</h2>
                        <p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="<?php echo base_url() ?>assets/img/doctor/doctor_1.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Adam Billiard</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="<?php echo base_url() ?>assets/img/doctor/doctor_4.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Adam Billiard</h3>
                                <p>Medicine specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="<?php echo base_url() ?>assets/img/doctor/doctor_2.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Fred Macyard</h3>
                                <p>CHeart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="<?php echo base_url() ?>assets/img/doctor/doctor_3.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="<?php echo base_url() ?>assets/#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Justin Stuard</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::doctor_part end::-->

    <!--::regervation_part start::-->
    <!-- <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form>
                            <h2>Make an Appointment</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Select">
                                        <option value="1" selected>Select service</option>
                                        <option value="2">Name of service</option>
                                        <option value="3">Name of service</option>
                                        <option value="4">Name of service</option>
                                        <option value="5">Name of service</option>
                                    </select>
                                </div>
                                <div class="form-group time_icon col-md-6">
                                    <select class="form-control" id="Select2">
                                        <option value="" selected>Time</option>
                                        <option value="1">8 AM TO 10AM</option>
                                        <option value="1">10 AM TO 12PM</option>
                                        <option value="1">12PM TO 2PM</option>
                                        <option value="1">2PM TO 4PM</option>
                                        <option value="1">4PM TO 6PM</option>
                                        <option value="1">6PM TO 8PM</option>
                                        <option value="1">4PM TO 10PM</option>
                                        <option value="1">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4"
                                        placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="<?php echo base_url() ?>assets/#" class="btn_2">Make an Appointment</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="<?php echo base_url() ?>assets/img/reservation.png" alt="" class="reservation_img_iner">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::regervation_part end::-->


