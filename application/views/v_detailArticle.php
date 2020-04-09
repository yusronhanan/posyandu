<!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
               <h2><?php echo $rs->title ?>
                     </h2>
                     
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="far fa-user"></i> By <?php echo $rs->written_by?></li>
                        <li><?php 
                                    $d = strtotime($rs->date);
                                    echo date("d M Y", $d);
                                    ?></li>
                     </ul>   
               <div class="feature-img">
                     <img class="img-fluid" src="<?php echo base_url()?>assets/img/<?php echo $rs->img ?>" alt="<?php echo $rs->img?>">
                  </div>
                  <div class="blog_details">
                  <p class="excert">

                  <?php echo $rs->content?>
                     </p> 
                     
                     
                  </div>
                  <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_line"></a>
<a class="a2a_button_telegram"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="<?php echo base_url()?>index.php/home/articles" method="get">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" name="keyword">
                              <div class="input-group-append">
                                 <button class="btn" type="submit"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                     </form>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
