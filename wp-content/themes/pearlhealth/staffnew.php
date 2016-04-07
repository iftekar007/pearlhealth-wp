<div class="container-fluid staff_wrapper">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 staff_wrapper_banner">
            <img src="/wp-content/themes/pearlhealth/images/upcoming_events_banner_cut.png" class="upcoming_events_banner_cut" alt="#">
            <!--<div class="upcoming_events_banner_cut2"></div>-->
            <div class="container-fluid upcoming_event_banner_bottom"></div>
        </div>
    </div>
</div>

<div class="container staff_body_wrapper">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 staff_body_wrapper_section">
            <h1>Staff & Specialists</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>


<div class="staff_body_wrapper_new">
    <div class="staff_view1">


        [insert_php]

        global $wpdb;



        $team = $wpdb->get_results("SELECT meta.meta_id,meta.meta_value , meta2.meta_value as mcount
        FROM wp_posts as posts
        INNER JOIN wp_postmeta as meta
        ON posts.ID=meta.post_id
        Inner join wp_postmeta as meta2 on posts.ID=meta2.post_id where posts.post_type='tmm' and meta.meta_key= '_tmm_head' and posts.post_status='publish' and meta2.meta_key='_tmm_columns' order by posts.post_date DESC  ");




        foreach($team as $t){


        $teamdetails=( unserialize($t->meta_value));
        //$teamdetails[0]['_tmm_firstname'];
        //$teamdetails[0]['_tmm_lastname'];
        //$teamdetails[0]['_tmm_job'];
        //$teamdetails[0]['_tmm_desc'];
        //$teamdetails[0]['_tmm_photo'];

        //print_r($teamdetails);
        if($t->mcount==2){

        echo"  <div class='staff_body1'>
            <div class='staff1img staff_detail' sname='".$teamdetails[0]['_tmm_firstname']."' sdept='".$teamdetails[0]['_tmm_lastname']."' desc='".$teamdetails[0]['_tmm_desc']."' specialities='".$teamdetails[0]['_tmm_job']."' photo=".$teamdetails[0]['_tmm_photo']." >   <img src=".$teamdetails[0]['_tmm_photo']."  class='staff_detail' ></div>
            <div class='staff1text'>

                <img src='/wp-content/themes/pearlhealth/images/staffviewbg3.png'  class='staffviewarrow'>


                <div class='textview'> <h2>".$teamdetails[0]['_tmm_firstname']."</h2>



                    <div class='h3text'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                            <tr>
                                <td align='center' valign='middle'>".$teamdetails[0]['_tmm_lastname']."</td>
                            </tr>
                        </table>

                    </div>


                </div>
            </div>

            <div class='staffviewtopbg staff_detail' sname='".$teamdetails[0]['_tmm_firstname']."' sdept='".$teamdetails[0]['_tmm_lastname']."' desc='".$teamdetails[0]['_tmm_desc']."' specialities='".$teamdetails[0]['_tmm_job']."' photo=".$teamdetails[0]['_tmm_photo']." > </div>

        </div>";
        }

        }


        [/insert_php]

       <!-- <div class="staff_body1">
            <div class="staff1img">   <img src="/wp-content/themes/pearlhealth/images/nstaff1.png" alt="#"></div>
            <div class="staff1text">

                <img src="/wp-content/themes/pearlhealth/images/staffviewbg3.png" alt="#" class="staffviewarrow">


                <div class="textview"> <h2>DR. THANA <br />

                        SINGARAJAH</h2>



                    <div class="h3text"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" valign="middle">EXECUTIVE DIRECTOR</td>
                            </tr>
                        </table>

                    </div>


                </div>
            </div>

            <div class="staffviewtopbg"></div>

        </div>-->


        <div class="clearfix"></div>



    </div>

    <div class="staff_view2">

        [insert_php]

        global $wpdb;





        //print_r($team);
        $i=0;

        foreach($team as $t){


        $teamdetails=( unserialize($t->meta_value));
        //$teamdetails[0]['_tmm_firstname'];
        //$teamdetails[0]['_tmm_lastname'];
        //$teamdetails[0]['_tmm_job'];
        //$teamdetails[0]['_tmm_desc'];
        //$teamdetails[0]['_tmm_photo'];

        //print_r($teamdetails);
        if($t->mcount!=2){

       echo" <div class='staff_body2'>
            <img src=".$teamdetails[0]['_tmm_photo']." alt='#'>
            <div class='view2textcon'>

                <div class='view2textbox'>
                    <h2>".$teamdetails[0]['_tmm_firstname']."
                        <span>".$teamdetails[0]['_tmm_lastname']."</span></h2>

                    <a href='javascript:void(0)' sname='".$teamdetails[0]['_tmm_firstname']."' sdept='".$teamdetails[0]['_tmm_lastname']."' desc='".$teamdetails[0]['_tmm_desc']."' specialities='".$teamdetails[0]['_tmm_job']."' photo=".$teamdetails[0]['_tmm_photo']." class='staff_detail'> sEE fULL bIOGRAPHY </a>

                </div>
            </div>


        </div>";

}
        }


        [/insert_php]




        <div class="clearfix"></div>




    </div>




    <div class="staff_view3">

        <div class="staff_body3">


            <img src="/wp-content/themes/pearlhealth/images/groupstaff1.png" alt="#" class="staffimg3">

            <div class="staff_body3_text">

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" valign="middle">

                            <img src="/wp-content/themes/pearlhealth/images/view3border.png" alt="#" class="view3border">

                            <h2>CBRS.CM<br />

                                DEPARMENT</h2>

                            <h3>Matt Bishop, Dave Chiddix, Dave Wilson, Greg Loveland, <br />

                                Bree Cook, Claire McIsaac, Lee Duplessis, Teri Patton, Martha Ramirez, Cheryl Kidd, Becky Farmer, Megan Slusher</h3>

                            <img src="/wp-content/themes/pearlhealth/images/view3border.png" alt="#" class="view3border">

                        </td>
                    </tr>
                </table>

            </div>

        </div>

        <div class="staff_body3">


            <img src="/wp-content/themes/pearlhealth/images/groupstaff2.png" alt="#" class="staffimg3">

            <div class="staff_body3_text">

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" valign="middle">

                            <img src="/wp-content/themes/pearlhealth/images/view3border.png" alt="#" class="view3border">

                            <h2>MEDICAL<br />

                                ASSISTANT</h2>

                            <h3>First Name Last Name, First Name Last Name, First Name, Last Name</h3>

                            <img src="/wp-content/themes/pearlhealth/images/view3border.png" alt="#" class="view3border">

                        </td>
                    </tr>
                </table>

            </div>

        </div>

        <div class="staff_body3">


            <img src="/wp-content/themes/pearlhealth/images/groupstaff3.png" alt="#" class="staffimg3">

            <div class="staff_body3_text">

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" valign="middle">

                            <img src="/wp-content/themes/pearlhealth/images/view3border.png" alt="#" class="view3border">

                            <h2>ADMINISTRATIVE<br />

                                SUPPORT STAFF</h2>

                            <h3>-Leticia Paz, Jennifer Jenkins, Lydia Nunez, Olivia Trejo, Keri Weaver, James Mclain</h3>

                            <img src="/wp-content/themes/pearlhealth/images/view3border.png" alt="#" class="view3border">

                        </td>
                    </tr>
                </table>

            </div>

        </div>

        <div class="staff_body3">


            <img src="/wp-content/themes/pearlhealth/images/groupstaff4.png" alt="#" class="staffimg3">

            <div class="staff_body3_text">

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" valign="middle">

                            <img src="/wp-content/themes/pearlhealth/images/view3border.png" alt="#" class="view3border">

                            <h2>INFORMATION TECH
                                DEPARTMENT</h2>

                            <h3>Chad Barney</h3>

                            <img src="/wp-content/themes/pearlhealth/images/view3border.png" alt="#" class="view3border">

                        </td>
                    </tr>
                </table>

            </div>

        </div>


    </div>

</div>









<!-- Modal -->
<div id="staffmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><img src="http://pearlhealthwp.spectrumiq.com/wp-content/themes/pearlhealth/images/popup_staff_closebtn.png"></button>
                <div class="modal_body_left">
                    <img src="http://pearlhealthwp.spectrumiq.com/wp-content/uploads/2016/03/img-1-1.png">
                </div>
                <div class="modal_body_right">
                    <h1>QUINN THIBODEAU</h1>
                    <h2>Mental Health</h2>
                    <!--<label>degree :</label>
                    <p>Bachelor’s degree in Psychology and Master’s in Mental Health Counseling and is a Nationally Certified Counselor.</p> -->
                    <label>specialities :</label>
                    <p class="staffspcl">Rehabilitation and occupational therapy. Mental Health Counseling.</p>
                    <label>ABOUT :</label>
                    <p class="staffdesc">Quinn has worked in the mental health field for 8 years, beginning with roots in rehabilitation and occupational therapy. He received his Bachelor’s degree in Psychology and Master’s in Mental Health Counseling and is a Nationally Certified Counselor. He has worked with children, adolescents, and adults alike and enjoys working together with couples and families. He has had experience with grief and loss counseling and has special interests in Existential counseling and therapy. To see more of Quinn’s areas of interest visit his blog at www.counselorquinn.blogspot.com.</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);"><img src="http://pearlhealthwp.spectrumiq.com/wp-content/themes/pearlhealth/images/pearl_logo.png"> </a>
            </div>
        </div>

    </div>
</div>
















