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

    <link href="<?php echo get_template_directory_uri(); ?>images/favicon.png" rel="icon">
    <link href="<?php echo get_template_directory_uri(); ?>css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>css/ionicons.min.css" type="text/css" rel="stylesheet" />


    <link href="<?php echo get_template_directory_uri(); ?>css/style.css" type="text/css" rel="stylesheet" />
    <!--

    -->

    <link href="css/media.css" type="text/css" rel="stylesheet" />

<!--<link rel="stylesheet" href="<?php /*bloginfo('stylesheet_url'); */?>">-->
<?php get_header(); ?>
<div id="main">
    <div id="content">
        <h1>Main Area</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <h4>Posted on <?php the_time('F jS, Y') ?></h4>
            <p><?php the_content(__('(more...)')); ?></p>
            <hr> <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    </div>

</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>


    <script src="js/jquery-1.11.0.js"></script>


    <script src="ng-js/bootstrap.min.js"></script>
    <!--<script src="ng-js/ui-bootstrap-tpls-0.14.3.min.js"></script>-->

