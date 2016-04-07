

<div class="container news_wrapper">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news_wrapper_top">
            <h1>News</h1>
        </div>
    </div>
</div>
<div class="container news_body_gellary">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 news_body_gellary_left">



            [insert_php]

            $feed = implode(file('http://www.health.com/fitness/feed'));
            $xml = simplexml_load_string($feed);
            $json = json_encode($xml);
            $array = json_decode($json,TRUE);

            foreach($xml->channel->item as $item) {
            if ($i < 6) { // parse only 10 items
           // print '<a href="'.$item->link.'">'.$item->title.'</a><br />';
           // print($item->link);
           // print($item->title);
           // print($item->pubDate);
            //print($item->section);
            //print($item->description);

            echo " <div class='news_body_gellary_block'>
                <div class='news_body_gellary_block_left'>
                    <img src='/wp-content/themes/pearlhealth/images/news_body_img1.png'>
                </div>
                <div class='news_body_gellary_block_right'>
                    <h1>".$item->title."</h1>
                    <p>.$item->description.</p>
                    <div class='news_body_gellary_block_bottom'>
                        <a href='".$item->link."' target='_blank' class='gellary_block_edit'><img src='/wp-content/themes/pearlhealth/images/news_body_editicon.png' > Learn More</a>
                        <span class='gellary_date'>
                            <a href='javascript:void(0);'> <img src='/wp-content/themes/pearlhealth/images/news_body_calendericon.png' > ".$item->pubDate."</a>
                        </span>
                    </div>
                </div>
                <div class='clear'></div>
            </div>";

            }

            $i++;
            }


            [/insert_php]



            <!--

            <div class="news_body_gellary_block">
                <div class="news_body_gellary_block_left">
                    <img src="/wp-content/themes/pearlhealth/images/news_body_img2.png" alt="#">
                </div>
                <div class="news_body_gellary_block_right">
                    <h1>Lorem Ipsum</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                    <div class="news_body_gellary_block_bottom">
                        <a href="javascript:void(0);" class="gellary_block_edit"><img src="/wp-content/themes/pearlhealth/images/news_body_editicon.png" alt="#"> Lorem Ipsum</a>
                        <span class="gellary_date">
                            <a href="javascript:void(0);"> <img src="/wp-content/themes/pearlhealth/images/news_body_calendericon.png" alt="#"> February 12, 2016 12;10 pm</a>
                        </span>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="news_body_gellary_block">
                <div class="news_body_gellary_block_left">
                    <img src="/wp-content/themes/pearlhealth/images/news_body_img3.png" alt="#">
                </div>
                <div class="news_body_gellary_block_right">
                    <h1>Lorem Ipsum</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                    <div class="news_body_gellary_block_bottom">
                        <a href="javascript:void(0);" class="gellary_block_edit"><img src="/wp-content/themes/pearlhealth/images/news_body_editicon.png" alt="#"> Lorem Ipsum</a>
                        <span class="gellary_date">
                            <a href="javascript:void(0);"> <img src="/wp-content/themes/pearlhealth/images/news_body_calendericon.png" alt="#"> February 12, 2016 12;10 pm</a>
                        </span>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="news_body_gellary_block">
                <div class="news_body_gellary_block_left">
                    <img src="/wp-content/themes/pearlhealth/images/news_body_img4.png" alt="#">
                </div>
                <div class="news_body_gellary_block_right">
                    <h1>Lorem Ipsum</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                    <div class="news_body_gellary_block_bottom">
                        <a href="javascript:void(0);" class="gellary_block_edit"><img src="/wp-content/themes/pearlhealth/images/news_body_editicon.png" alt="#"> Lorem Ipsum</a>
                        <span class="gellary_date">
                            <a href="javascript:void(0);"> <img src="/wp-content/themes/pearlhealth/images/news_body_calendericon.png" alt="#"> February 12, 2016 12;10 pm</a>
                        </span>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="news_body_gellary_block">
                <div class="news_body_gellary_block_left">
                    <img src="/wp-content/themes/pearlhealth/images/news_body_img5.png" alt="#">
                </div>
                <div class="news_body_gellary_block_right">
                    <h1>Lorem Ipsum</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                    <div class="news_body_gellary_block_bottom">
                        <a href="javascript:void(0);" class="gellary_block_edit"><img src="/wp-content/themes/pearlhealth/images/news_body_editicon.png" alt="#"> Lorem Ipsum</a>
                        <span class="gellary_date">
                            <a href="javascript:void(0);"> <img src="/wp-content/themes/pearlhealth/images/news_body_calendericon.png" alt="#"> February 12, 2016 12;10 pm</a>
                        </span>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="news_body_gellary_block">
                <div class="news_body_gellary_block_left">
                    <img src="/wp-content/themes/pearlhealth/images/news_body_img6.png" alt="#">
                </div>
                <div class="news_body_gellary_block_right">
                    <h1>Lorem Ipsum</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                    <div class="news_body_gellary_block_bottom">
                        <a href="javascript:void(0);" class="gellary_block_edit"><img src="/wp-content/themes/pearlhealth/images/news_body_editicon.png" alt="#"> Lorem Ipsum</a>
                        <span class="gellary_date">
                            <a href="javascript:void(0);"> <img src="/wp-content/themes/pearlhealth/images/news_body_calendericon.png" alt="#"> February 12, 2016 12;10 pm</a>
                        </span>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="news_body_gellary_block">
                <div class="news_body_gellary_block_left">
                    <img src="/wp-content/themes/pearlhealth/images/news_body_img7.png" alt="#">
                </div>
                <div class="news_body_gellary_block_right">
                    <h1>Lorem Ipsum</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                    <div class="news_body_gellary_block_bottom">
                        <a href="javascript:void(0);" class="gellary_block_edit"><img src="/wp-content/themes/pearlhealth/images/news_body_editicon.png" alt="#"> Lorem Ipsum</a>
                        <span class="gellary_date">
                            <a href="javascript:void(0);"> <img src="/wp-content/themes/pearlhealth/images/news_body_calendericon.png" alt="#"> February 12, 2016 12;10 pm</a>
                        </span>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            -->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 news_body_gellary_right">
            <a href="javascript:void(0);"><img src="/wp-content/themes/pearlhealth/images/news_body_banner1.png" alt="#"></a>
            <a href="javascript:void(0);"><img src="/wp-content/themes/pearlhealth/images/news_body_banner2.png" alt="#"></a>
            <a href="javascript:void(0);"><img src="/wp-content/themes/pearlhealth/images/news_body_banner3.png" alt="#"></a>
            <a href="javascript:void(0);"><img src="/wp-content/themes/pearlhealth/images/news_body_banner4.png" alt="#"></a>
            <a href="javascript:void(0);"><img src="/wp-content/themes/pearlhealth/images/news_body_banner5.png" alt="#"></a>
        </div>
    </div>
</div>

