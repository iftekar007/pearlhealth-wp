<?php
/**
 * Created by PhpStorm.
 * User: iftekar
 * Date: 4/3/16
 * Time: 4:21 PM
 */


?> 


<!DOCTYPE html>
<html>
<head lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>:: Pearl Health ::</title>

    <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="icon">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/ionicons.min.css" type="text/css" rel="stylesheet" />


    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" />
    <!--

    -->

    <link href="<?php echo get_template_directory_uri(); ?>/css/media.css" type="text/css" rel="stylesheet" />

    <!--<link rel="stylesheet" href="<?php /*bloginfo('stylesheet_url'); */?>">-->
    <?php get_header(); ?>




    <?php
    //print_r(get_the_ID());
    if (@get_the_ID()==1 || get_the_ID()==6){

        if ( function_exists( 'ubm_get_banners_byorder' ) ) {
            $upload_dir = wp_upload_dir();

            $banners=(ubm_get_banners_byorder());

            ?>



            <div id="myCarousel" class="carousel slide banner_block" ng-non-bindable data-ride="carousel">
            <div class="carousel-inner">

            <?php


            $i=0;
            foreach($banners as $val){

                //print_r($val);
                //echo $val->banner_type;
               /* echo "<img src=".$upload_dir['baseurl'] . '/useful_banner_manager_banners/' . $val->id . '-' . $val->banner_name . '.' . $val->banner_type.  " >" ;*/
?>
                 <div class="item <?php if($i==0) echo "active"; ?> "> <img src="<?php echo $upload_dir['baseurl'] . '/useful_banner_manager_banners/' . $val->id . '-' . $val->banner_name . '.' . $val->banner_type ; ?>  " style="width:100%" alt="First slide">
                    <div class="container-fluid banner_text_area">
                        <div class="banner_text_block1">
                            <h1><?php echo $val->banner_title ; ?></h1>
                            <h2><?php echo $val->banner_title2 ; ?></h2>
                            <p><?php echo $val->banner_desc ; ?> </p>
                            <?php if(strlen($val->banner_link)>2) { ?><a href="<?php echo $val->banner_link ; ?>" class="bannar_btn">Learn More</a> <?php  } ?>
                        </div>
                    </div>
                </div>

                <?php
                $i++;

            }

            ?>


            </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
            <div class="clear"></div>

                <?php

        }


    ?>


            <!-- Indicators-->

            <!-- <ol class="carousel-indicators">
                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                 <li data-target="#myCarousel" data-slide-to="1"></li>
                 <li data-target="#myCarousel" data-slide-to="2"></li>
                 <li data-target="#myCarousel" data-slide-to="3"></li>

             </ol>-->


                <!--<div class="item active"> <img src="images/home_banner_img1.png" style="width:100%" alt="First slide">
                    <div class="container-fluid banner_text_area">
                        <div class="banner_text_block1">
                            <h1>Our message
                                is simple:</h1>
                            <h2>You Are Not Alone and There is Help</h2>
                            <p>We're committed to unparalleled treatment that that covers the worth we all have as human being.
                                It's our mission to unlock the true potential to improve your way of life. </p>
                            <a href="javascript:void(0);" class="bannar_btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item"> <img src="images/home_banner_img2.png" style="width:100%" data-src="" alt="Second    slide">
                    <div class="container-fluid banner_text_area">
                        <div class="banner_text_block2">
                            <h1>counseling &
                                psychiatry</h1>
                            <h2>Get Diagnosed And Treated</h2>
                            <p>Mental Illness ranks as one of the highest leading cause of diability in the world, with 2.5 times more<br> Americans suffering from a major psychitric disorder in their lifetime, compared to cancer, heart<br> disease and diabetes combined.</p>
                            <a href="javascript:void(0);" class="bannar_btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item"> <img src="images/home_banner_img3.png" style="width:100%" data-src="" alt="Third slide">
                    <div class="container-fluid banner_text_area">
                        <div class="banner_text_block3">
                            <h1>counseling &
                                psychiatry</h1>
                            <h2>Get Diagnosed And Treated</h2>
                            <p>Mental Illness ranks as one of the highest leading cause of diability in the world, with 2.5 times more Americans suffering from a major psychitric disorder in their lifetime, compared to cancer, heart disease and diabetes combined.</p>
                            <a href="javascript:void(0);" class="bannar_btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item"> <img src="images/home_banner_img4.png" style="width:100%" data-src="" alt="Third slide">
                    <div class="container-fluid banner_text_area">
                        <div class="banner_text_block4">
                            <h1>counseling &
                                psychiatry</h1>
                            <h2>Get Diagnosed And Treated</h2>
                            <p>Mental Illness ranks as one of the highest leading cause of diability in the world, with 2.5 times more Americans suffering from a major psychitric disorder in their lifetime, compared to cancer, heart disease and diabetes combined.</p>
                            <a href="javascript:void(0);" class="bannar_btn">Learn More</a>
                        </div>
                    </div>
                </div>-->



    <?php
    }

    ?>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>


<?php get_footer(); ?>


    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.js"></script>


    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>




