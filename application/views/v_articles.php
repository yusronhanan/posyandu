    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2><?php if($lg == "en") {echo "Articles";} else { echo "Artikel";} ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                       <?php foreach ($rs as $r) { ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url()?>assets/img/<?php echo $r->img?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?php 
                                    $d = strtotime($r->date);
                                    echo date("d M Y", $d);
                                    ?></h3>
                                    
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo base_url() ?>index.php/home/article/<?php echo $r->id_article?>">
                                    <h2><?php if($lg == "en") {echo $r->title_en;} else { echo $r->title;} ?></h2>
                                </a>
                                <p><?php if($lg == "en") {echo substr("$r->content_en",0,250);} else { echo substr("$r->content",0,250);} ?>... <a href="<?php echo base_url() ?>index.php/home/article/<?php echo $r->id_article?>">See More </a></p>
                                
                                
                            </div>
                        </article>
                       <?php }
                       echo '<div class="pagination">';
                       echo $this->pagination->create_links();
                       echo '</div>'; ?>
                        
                       
                        <!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                     <form action="<?php echo base_url()?>index.php/home/articles" method="get">

                            
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='<?php if($lg == "en") {echo "Search Keyword";} else { echo "Masukkan Kata Kunci";} ?>'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = '<?php if($lg == 'en') {echo 'Search Keyword';} else { echo 'Masukkan Kata Kunci';} ?>'" name="keyword" value="<?php if(!empty($keyword)) { echo $keyword;}?>">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <input class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit" name="submit" value="<?php if($lg == "en") {echo "Search";} else { echo "Mencari";} ?>">
                            </form>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
