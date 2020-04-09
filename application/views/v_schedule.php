<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Schedules</h2>
                            <?php 
                            if(!empty($name) && !empty($gender) && $age_inmonth >=0) { 
                                $a =$age_inmonth;
                                if($a % 12 != 0 || $a == 0){
                                $b= $a.' month old';
                                } else{
                                $b= ($a/12).' year old';
                                } ?>
                            <center>
                                
                            <h3 style="color:white"><?php echo $name.', '.$gender.', <br>'.$b.'    '; ?>  
                            <a href="<?php echo base_url() ?>?name=<?=$name?>&gender=<?=$gender?>&date=<?=$born_date?>&head=<?php if(!empty($head_size)) { echo $head_size;}?>&weight=<?php if(!empty($weight_size)) { echo $weight_size;} ?>&height=<?php if(!empty($height_size)) { echo $height_size;} ?>"><i class="zmdi zmdi-edit" style="color:white"></i></a></h3>
                            </center>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <?php if(!empty($head_size) || !empty($weight_size) || !empty($height_size)){
        $count = 0;
        $sz = 4;
        if(!empty($head_size)){
            $count+=1;
        }
        if(!empty($weight_size)){
            $count+=1;
        }
        if(!empty($height_size)){
            $count+=1;
        }
        if($count == 3){
            $sz = 4;
        } else if($count == 2){
            $sz = 6;
        } else if($count == 1){
            $sz = 12;
        }
        ?>
    <!-- <section class="our_depertment section_padding"> -->
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Status</h2>
                                <div class="row">
    <?php if(!empty($head_size)){ ?>

                                    <div class="col-lg-<?php echo $sz?> col-sm-4">
                                        <div class="single_our_depertment">
                                            <h3>Head Size</h3>
                                            <h4><?php echo $head_size ?> cm</h4>
                    
                                            <h4><?php echo $head_status ?></h4>
                                        <hr>
                                        </div>
                                    </div>
        <br>
    <?php }?>
    <?php if(!empty($weight_size)){ ?>

<div class="col-lg-<?php echo $sz?> col-sm-4">
    <div class="single_our_depertment">
        <h3>Weight Size</h3>
        <h4><?php echo $weight_size ?> kg</h4>

        <h4><?php echo $weight_status ?></h4>
        <hr>

    </div>
</div>
<br>

<?php }?>
<?php if(!empty($height_size)){ ?>

<div class="col-lg-<?php echo $sz?> col-sm-4">
    <div class="single_our_depertment">
        <h3>Height Size</h3>
        <h4><?php echo $height_size ?> cm</h4>

        <h4><?php echo $height_status ?></h4>
        <hr>

    </div>
</div>
<br>

<?php }?>


                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <!-- </section> -->
    <?php }?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"> -->
    <style type="text/css">
    	body{
    background:#FBFDFF
}
.cbp_tmtimeline {
    margin: 0;
    padding: 0;
    list-style: none;
    position: relative
}

.cbp_tmtimeline:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 3px;
    background: #eee;
    left: 20%;
    margin-left: -6px
}

.cbp_tmtimeline>li {
    position: relative
}

.cbp_tmtimeline>li:first-child .cbp_tmtime span.large {
    color: #444;
    font-size: 17px !important;
    font-weight: 700
}

.cbp_tmtimeline>li:first-child .cbp_tmicon {
    background: #fff;
    color: #666
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmtime span:last-child {
    color: #444;
    font-size: 13px
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel {
    background: #f0f1f3
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
    border-right-color: #f0f1f3
}

.cbp_tmtimeline>li .empty span {
    color: #777
}

.cbp_tmtimeline>li .cbp_tmtime {
    display: block;
    width: 23%;
    padding-right: 70px;
    position: absolute
}

.cbp_tmtimeline>li .cbp_tmtime span {
    display: block;
    text-align: right
}

.cbp_tmtimeline>li .cbp_tmtime span:first-child {
    font-size: 15px;
    color: #3d4c5a;
    font-weight: 700
}

.cbp_tmtimeline>li .cbp_tmtime span:last-child {
    font-size: 14px;
    color: #444
}

.cbp_tmtimeline>li .cbp_tmlabel {
    margin: 0 0 15px 25%;
    background: #f0f1f3;
    padding: 1.2em;
    position: relative;
    border-radius: 5px
}

.cbp_tmtimeline>li .cbp_tmlabel:after {
    right: 100%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-right-color: #f0f1f3;
    border-width: 10px;
    top: 10px
}

.cbp_tmtimeline>li .cbp_tmlabel blockquote {
    font-size: 16px
}

.cbp_tmtimeline>li .cbp_tmlabel .map-checkin {
    border: 5px solid rgba(235, 235, 235, 0.2);
    -moz-box-shadow: 0px 0px 0px 1px #ebebeb;
    -webkit-box-shadow: 0px 0px 0px 1px #ebebeb;
    box-shadow: 0px 0px 0px 1px #ebebeb;
    background: #fff !important
}

.cbp_tmtimeline>li .cbp_tmlabel h2 {
    margin: 0px;
    padding: 0 0 10px 0;
    line-height: 26px;
    font-size: 16px;
    font-weight: normal
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a {
    font-size: 15px
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a:hover {
    text-decoration: none
}

.cbp_tmtimeline>li .cbp_tmlabel h2 span {
    font-size: 15px
}

.cbp_tmtimeline>li .cbp_tmlabel p {
    color: #444
}

.cbp_tmtimeline>li .cbp_tmicon {
    width: 40px;
    height: 40px;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    font-size: 1.4em;
    line-height: 40px;
    -webkit-font-smoothing: antialiased;
    position: absolute;
    color: #fff;
    background: #46a4da;
    border-radius: 50%;
    box-shadow: 0 0 0 5px #f5f5f6;
    text-align: center;
    left: 20%;
    top: 0;
    margin: 0 0 0 -25px
}

@media screen and (max-width: 992px) and (min-width: 768px) {
    .cbp_tmtimeline>li .cbp_tmtime {
        padding-right: 60px
    }
}

@media screen and (max-width: 65.375em) {
    .cbp_tmtimeline>li .cbp_tmtime span:last-child {
        font-size: 12px
    }
}

@media screen and (max-width: 47.2em) {
    .cbp_tmtimeline:before {
        display: none
    }
    .cbp_tmtimeline>li .cbp_tmtime {
        width: 100%;
        position: relative;
        padding: 0 0 20px 0
    }
    .cbp_tmtimeline>li .cbp_tmtime span {
        text-align: left
    }
    .cbp_tmtimeline>li .cbp_tmlabel {
        margin: 0 0 30px 0;
        padding: 1em;
        font-weight: 400;
        font-size: 95%
    }
    .cbp_tmtimeline>li .cbp_tmlabel:after {
        right: auto;
        left: 20px;
        border-right-color: transparent;
        border-bottom-color: #f5f5f6;
        top: -20px
    }
    .cbp_tmtimeline>li .cbp_tmicon {
        position: relative;
        float: right;
        left: auto;
        margin: -64px 5px 0 0px
    }
    .cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
        border-right-color: transparent;
        border-bottom-color: #f5f5f6
    }
}

.bg-green {
    background-color: #50d38a !important;
    color: #fff;
}

.bg-blush {
    background-color: #ff758e !important;
    color: #fff;
}

.bg-orange {
    background-color: #ffc323 !important;
    color: #fff;
}

.bg-info {
    background-color: #2CA8FF !important;
}
    </style>



<section class="blog_part section_padding">

    <div class="container">
    <div class="row">
        <div class="col-md-10">
            <ul class="cbp_tmtimeline">
            <?php foreach ($age as $a) { ?>    
                <li>
                    <time class="cbp_tmtime"><span style="font-size:12pt"> 
                    <?php 
                    $m =$a->age_inMonth;
                    if($m % 12 != 0 || $m == 0){
                    echo $m.' month old';
                    } else{
                    echo ($m/12).' year old';
                    }
                    ?>
                </span></time>
                    <div class="cbp_tmicon bg-info circle_schedule"></div>
                    <div class="cbp_tmlabel">
                        <?php                 
                        foreach ($rs as $r) { 
                        if($a->age_inMonth == $r->age_inMonth){
                    ?>
                        <h2><a href="#"><?php echo $r->name_schedule?></a> <br> <span><?php echo date('d M Y',strtotime($r->date))?></span></h2>
                        <hr>
                        
                        <?php } }?>
                            
                    </div>
                </li>
            <?php 
                }
           ?>

                
            </ul>  
        </div>
    </div>
</div>
                                    </section>

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
            <?php foreach ($ar as $r) { ?>

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
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>