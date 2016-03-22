<div class="container-fluid gellary_wrapper">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gellary_wrapper_top"><img src="/wp-content/themes/pearlhealth/images/gellary_img1.png" alt="#" /></div>
    </div>
</div>
<div class="container-fluid gellary_body_wrapper">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gellary_body_wrapper_section">
            <div class="gellary_photo_text_block">
                <h1>photo gallery</h1>
                Welcome to Pearl Health Clinics gallery! By clicking on the thumbnails below you can expand the images and enjoy the memories we share at our clinic and in the community. Here we provide visuals to the deep rooted passion we have for helping in the community and how we have dedicated our time to seeing a betterment in others’ lives.


            </div>
            <div class="container myCarousel_gellaryphoto">
                <div id="myCarousel_gellaryphoto" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        [insert_php]

                        global $wpdb;
                        //echo 9888;

                        $team = $wpdb->get_results("SELECT *
                        FROM wp_huge_itgallery_images where gallery_id=1 and sl_type='image' order by ordering DESC ");

                        print_r(count($team));
                        $i=0;

                        foreach($team as $t){

                        //$teamdetails=( unserialize($t->meta_value));
                        //$teamdetails[0]['_tmm_firstname'];
                        //$teamdetails[0]['_tmm_lastname'];
                        //$teamdetails[0]['_tmm_job'];
                        //$teamdetails[0]['_tmm_desc'];
                        //$teamdetails[0]['_tmm_photo'];

                        //print_r($t);

                        if(($i+1)%13==0 || $i==0){
                        echo "
                        <div class=item>
                            <div class=container>
                                <div class=row>
                                    <div class=col-lg-12>
                                        <div class=gellary_body_photo_block>";
                                            }echo "
                                            <div class='gellary_body_photo_img gellary_body_photo_imgpopup'><img class='imagepopup' src=".$t->image_url." alt=# /></div>
                                            ";

                                            if(($i+1)%12==0 || count($team)==($i+1)){

                                            echo "
                                            <div class=clear></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                        }

                        $i++;
                        }

                        [/insert_php]

                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel_gellaryphoto" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel_gellaryphoto" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
            <div class="gellary_video_text_block">
                <h1>video gallery</h1>
                Through our events and activities at our clinic we shape the community to being a better place. See what our team is up to and join us for upcoming events.
            </div>
            <div class="container myCarousel_gellaryphoto">
                <div id="myCarousel_gellaryvideo" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        [insert_php]

                        global $wpdb;
                        //echo 9888;

                        $teamv = $wpdb->get_results("SELECT *
                        FROM wp_wonderplugin_gallery where id=1  ");

                        $data=((json_decode($teamv[0]->data)));
                        //print_r($data->slides);
                       // exit;
                        $i=0;

                        foreach($data->slides as $t){

                        //$teamdetails=( unserialize($t->meta_value));
                        //$teamdetails[0]['_tmm_firstname'];
                        //$teamdetails[0]['_tmm_lastname'];
                        //$teamdetails[0]['_tmm_job'];
                        //$teamdetails[0]['_tmm_desc'];
                        //$teamdetails[0]['_tmm_photo'];

                        //print_r($t);

                        if(($i+1)%13==0 || $i==0){
                        echo "
                        <div class=item>
                            <div class=container>
                                <div class=row>
                                    <div class=col-lg-12>
                                        <div class=gellary_body_photo_block>";
                                            }echo "
                                            <div class='gellary_body_photo_videopopup gellary_body_photo_img'><img class='imagepopup' src=".$t->image."  videourl=".$t->video."   alt=# /></div>
                                            ";

                                            if(($i+1)%12==0 || count($data->slides)==($i+1)){

                                            echo "
                                            <div class=clear></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                        }

                        $i++;
                        }

                        [/insert_php]

                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel_gellaryphoto" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel_gellaryphoto" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>













<div id="imggallery" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>

        </div>

    </div>
</div>