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

<!--<div class="container staff_body_select">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 staff_body_select_section">
            <div class="staff_body_main_section_top">
                <select class="staff_body_option">
                    <option>Filter By Office</option>
                    <option>Filter By Office</option>
                    <option>Filter By Office</option>
                </select>
                <select class="staff_body_option">
                    <option>Filter By Service</option>
                    <option>Filter By Service</option>
                    <option>Filter By Service</option>
                </select>
                <div class="staff_name_checkbox">
                    <input type="checkbox"> <span>Sort by name</span>
                </div>
            </div>

        </div>
    </div>
</div>-->

<div class="container staff_body_gellary">
    <div class="row">
        <!--  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">

              <div class="gellary_block">
                  <div class="gellary_block_left">
                      <img src="/wp-content/themes/pearlhealth/images/img-1.png">
                  </div>
                  <div class="gellary_block_right">
                      <h1>QUINN THIBODEAU</h1>
                      <p>Mental Health</p>
                      <h2>specialities :</h2>
                      <div class="gellary_btntop">
                          <h3>Rehabilitation and occupational therapy.</h3>
                          <h3>Mental Health Counseling.</h3>
                      </div>
                      <a href="javascript:void(0);" class="staff_detail">View Details</a>
                  </div>
                  <div class="clear"></div>
              </div>
          </div>-->



        [insert_php]

        global $wpdb;



        $team = $wpdb->get_results("SELECT meta_id,meta_value
        FROM wp_posts as posts
        INNER JOIN wp_postmeta as meta
        ON posts.ID=meta.post_id where posts.post_type='tmm' and meta.meta_key= '_tmm_head' and posts.post_status='publish' order by posts.post_date DESC  ");

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




        echo "<div class=col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right>
            <div class=gellary_block>
                <div class=gellary_block_left>
                    <img src=".$teamdetails[0]['_tmm_photo'].">
                </div>
                <div class=gellary_block_right>
                    <h1>".$teamdetails[0]['_tmm_firstname']."</h1>
                    <p>".$teamdetails[0]['_tmm_lastname']."</p>
                    <h2>specialities :</h2>
                    <div class=gellary_btntop>
                        <h3>".$teamdetails[0]['_tmm_job']."</h3>
                    </div>
                    <a href=javascript:void(0); sname='".$teamdetails[0]['_tmm_firstname']."' sdept='".$teamdetails[0]['_tmm_lastname']."' desc='".$teamdetails[0]['_tmm_desc']."' specialities='".$teamdetails[0]['_tmm_job']."' photo=".$teamdetails[0]['_tmm_photo']." class=staff_detail >View Details</a>
                </div>
                <div class=clear></div>
            </div></div>";
        }


        [/insert_php]





        <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff2.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Bonita Avery</h1>
                     <p>Mental Health</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Couple and Family counseling.</h3>
                         <h3>Neurofeedback Therapy.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff3.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>PSR and TSC Team Leaders</h1>
                     <p>Lorem Ipsum</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Lorem ipsum dolor.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff4.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Group Home Staff</h1>
                     <p>Lorem IOsum</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Lorem ipsum dolor.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff5.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Dr. McGrath</h1>
                     <p>Doctoral degree in Psychology</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>a wide range of psychological testing for a variety of presenting problems as well as provide therapy for both individuals.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff6.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Dr. Rosa Maria Mulser Ph.D</h1>
                     <p>PH.D.</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>conducting comprehensive psychological assessments with English-and Spanish speaking individuals.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff7.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Dr. Elizabeth Hay</h1>
                     <p>BSW</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Pediatric medicine, Child Psychiatry and Adult Psychiatry.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff8.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Brian Beesley</h1>
                     <p>M.D.</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Rehabilitation and occupational therapy.</h3>
                         <h3>Mental Health Counseling.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff9.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Colin Waters</h1>
                     <p>BSW</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Lorem ipsum dolor sit amet.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff10.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>GayNelle Harper-Standfield</h1>
                     <p>Lorem Ipsum</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Lorem ipsum dolor sit amet.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff11.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Fran Acoba</h1>
                     <p>Psy.D.,Clinical Psychology</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>psychological assessment, psychotherapy for groups & individuals, PTSD, eating disorders,</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff12.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Front Office Staff</h1>
                     <p>Lorem Ipsum</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Lorem ipsum dolor sit amet.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff13.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Billing/Intake Department</h1>
                     <p>Lorem Ipsum</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Lorem ipsum dolor sit amet.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff14.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>David Spencer</h1>
                     <p>LCSW</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>He has a range of experience working with those who suffer from depression, anxiety, anger, PTSD, and OCD.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff15.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Dr. Thana Singarajah</h1>
                     <p>CLINICAL ASSISTANT PROFESSOR</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>adolescent counseling and Foster Care system.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff16.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Donna Emfield</h1>
                     <p>LCPC</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Marriage and Family Counseling.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff17.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Stephen Denagy</h1>
                     <p>MD</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Lorem ipsum dolor sit amet.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff18.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Dr. Alice gray</h1>
                     <p>Psy.D</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Dr. Gray utilizes psycho-dynamic and cognitive restructuring techniques to address and explore core emotional</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff19.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Zak Warren</h1>
                     <p>M.Coun., LCPC, NBCC</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Working with children and adults through the Psychosocial Rehabilitation program.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff20.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Jaxson Stark</h1>
                     <p>LPC</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Emphasis in sociology and marriage and family relations.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff21.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Richie Kuipers</h1>
                     <p>LPC</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Addressing symptoms of depression, anxiety, ADHD, bipolar disorder, and PTSD.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff22.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Jennifer Kerner</h1>
                     <p>LCPC</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Child development and enjoys working with children from pre-school to adolescents.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff23.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Jill Weadick</h1>
                     <p>M.Ed., LCPC</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Lorem ipsum dolor sit amet, consec tetur adip iscin g elit. Vestibulum fermentum cursus erat, quis dapibus</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_right">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff24.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Elizabeth Bentley</h1>
                     <p>NP</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Americorps, volunteering as an outdoor education counselor with the Christian Appalachian Project,</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>

             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 staff_body_gellary_left">
             <div class="gellary_block">
                 <div class="gellary_block_left">
                     <img src="/wp-content/themes/pearlhealth/images/staff_body_gellary-staff25.png">
                 </div>
                 <div class="gellary_block_right">
                     <h1>Medical Staff</h1>
                     <p>M.Coun., LCPC, NBCC</p>
                     <h2>specialities :</h2>
                     <div class="gellary_btntop">
                         <h3>Lorem ipsum dolor sit amet, consec tetur adip iscin g elit. Vestibulum fermentum cursus erat, quis dapibus.</h3>
                     </div>
                     <a href="javascript:void(0);" class="staff_detail">View Details</a>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>-->

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




















