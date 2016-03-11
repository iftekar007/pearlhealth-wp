<?php
/**
 * Created by PhpStorm.
 * User: iftekar
 * Date: 4/3/16
 * Time: 4:20 PM
 */

?>



<div class="container-fluid header_top_block" >
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container pearl_body_container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 header_top_block_left">
                        <p>Our message is simple: You are not alone and there is help.</p>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12 header_top_block_right">
                        <div class="icon_content">
                            <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/fb_icon.png"></a>
                            <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_icon.png"></a>
                            <a href="javascript:void(0);" class="book_appobtn"><strong>+</strong>Book appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid top_menu_block">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container pearl_menu_container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 top_menu_block_left">
                        <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/pearl_logo.png"> </a>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 top_menu_block_right">
                        <nav id="myNavbar" class="navbar " role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header"><span class="menu_text">MENU</span>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <!--<li class="active"><a href="#">Home</a></li>
                                        <li><a href="#">OUR SERVICES</a></li>
                                        <li><a href="#">PLANNING YOUR VISIT</a></li>
                                        <li><a href="#">COMMUNITY EVENTS</a></li>
                                        <li><a href="#">ABOUT PEARL HEALTH</a></li>
                                        <li><a href="#">AFFILIATES</a></li>
                                        <li><a href="#">NEWS</a></li>
                                        <li><a href="#">PATIENT PORTAL</a></li>-->

                                        <?php
                                        $args = array(
                                            'sort_column' => 'post_date',
                                            'sort_order' => 'asc',
                                            'child_of' => '0',
                                            'post_type' => 'page',
                                            'post_status' => 'publish',
                                            'parent' => 0,

                                        );
                                        $pages = get_pages($args);

                                        if ($pages) {
                                            foreach ($pages as $page) :



                                                $args2 = array(
                                                    'sort_column' => 'post_date',
                                                    'sort_order' => 'asc',
                                                    'child_of' => '0',
                                                    'post_type' => 'page',
                                                    'post_status' => 'publish',
                                                    'parent' => $page->ID,

                                                );
                                                $pages2 = get_pages($args2);




                                                 if($page->ID != 6)
                                                 {
                                                     if(count($pages2)>0) {
                                                         echo ' <li class="ssd dropdown" ><a data-toggle="dropdown" class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';

                                                         echo "<ul class=dropdown-menu>";


                                                         foreach($pages2 as $childpage){


                                                             echo ' <li class="ln"><a href="' . get_page_link($childpage->ID) . '"> ' . $childpage->post_title . ' </a></li>';

                                                         }
                                                         echo "</ul>";

                                                     }else{
                                                         echo ' <li class="ssd " ><a  class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                                                     }
                                                 }else{
                                                     echo ' <li class="ssd " ><a   href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                                                 }


                                            echo "</li>";


                                            endforeach;
                                        }
                                        ?>
                                    </ul>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



