/**
 * Created by iftekar on 8/3/16.
 */



$(function(){


    $('form.wpcf7-form').submit(function(event){
        //$('form.wpcf7-form').trigger('before-submit');
        $('div.screen-reader-response').text('');

        var flag =1;

        $('form.wpcf7-form').find('input[type="text"],input[type="number"],input[type="date"],select,textarea').each(function(){
            if($(this).attr('aria-required')){
                if($(this).next('span.wpcf7-not-valid-tip').length)
                    $(this).next('span.wpcf7-not-valid-tip').remove();
                if($(this).val() == ''){
                    flag = 0;
                    $(this).after('<span role="alert" class="wpcf7-not-valid-tip">The field is required.</span>');
                }
            }
        });

        if(flag == 0){
            event.preventDefault();
            $('div.screen-reader-response').text('One or more required field is missing.');
        }



    });

    $('form.wpcf7-form').find('input[type="text"],input[type="number"],input[type="date"],select,textarea').focus(function(){
        if($(this).next('span').length)
            $(this).next('span').remove();
    });

    /*
    $('form.wpcf7-form').bind('before-submit', function(e) {

        alert('test');


        $('input').each(function(){
            console.log($(this).attr('name')+'---'+$(this).attr('aria-required'));
        });

    });
*/
console.log('6666'); 

$('input').each(function(){

	console.log($(this).attr('name')+'---'+$(this).val());


});

		   
	//accordion click	 
	
	
	$(" label:contains('Primary Care Medicine')").html(function(_, html) {
   return  html.replace(/(Primary Care Medicine)/g, '<b><u>$1</u></b>')
});
	
	
		$(" label:contains('Psychiatric Medicine')").html(function(_, html) {
   return  html.replace(/(Psychiatric Medicine)/g, '<b><u>$1</u></b>')
});
	
	
	
	$(" label:contains('Neuropsychological/Psychological Testing')").html(function(_, html) {
   return  html.replace(/(Neuropsychological\/Psychological Testing)/g, '<b><u>$1</u></b>')
});
	
	
	
$(" label:contains('Counseling')").html(function(_, html) {
   return  html.replace(/(Counseling )/g, '<b><u>$1</u></b>')
});
	
	
	
		
$(" label:contains('Neurofeedback Therapy')").html(function(_, html) {
   return  html.replace(/(Neurofeedback Therapy )/g, '<b><u>$1</u></b>')
});
	
		
		
$(" label:contains('Eating Disorder Therapy')").html(function(_, html) {
   return  html.replace(/(Eating Disorder Therapy )/g, '<b><u>$1</u></b>')
});
	
	
	
	$(" label:contains('PTSD Clinic')").html(function(_, html) {
   return  html.replace(/(PTSD Clinic )/g, '<b><u>$1</u></b>')
});
	
		$(" label:contains('Community Based Rehabilitation Services (CBRS)')").html(function(_, html) {
   return  html.replace(/(Community Based Rehabilitation Services \(CBRS\))/g, '<b><u>$1</u></b>')
});
	
	
	$(" label:contains('Substance Abuse Program')").html(function(_, html) {
   return  html.replace(/(Substance Abuse Program )/g, '<b><u>$1</u></b>')
});
	
	
		
	$(" label:contains('Case Management')").html(function(_, html) {
   return  html.replace(/(Case Management)/g, '<b><u>$1</u></b>')
});
	
	
			
	$(" label:contains('Pearl Supportive Living')").html(function(_, html) {
   return  html.replace(/(Pearl Supportive Living)/g, '<b><u>$1</u></b>')
});
	
	
	
	
	
	//$(".faq_body_main_middle_block3:nth-child(odd)").css("background-color", "yellow");
	
	$('#accordion').find('a').addClass('collapsed');
	
	$('#accordion').find('a').eq(0).removeClass('collapsed');
//$('.wpcf7-not-valid-tip').css('display','block').css('clear','both');
$('.wpcf7-mail-sent-ok').last().hide();
$('button.navbar-toggle').click(function(){

$('div#myNavbar').toggleClass('collapse');
$(this).attr('class','navbar-toggle ');
$('nav').css('display','block');
//$('div#myNavbar').toggleclass('collapse');
});

$('li.ssd').find('a').each(function(){
if($(this).text()==' PATIENT PORTAL ') $(this).attr('target','_blank');

console.log($(this).attr('href'));
});

if($('.portallink').length>0){
console.log('in portal');
$('body').hide();
var win = window.location.href=('https://mycw12.eclinicalweb.com/portal526/jsp/100mp/login.jsp');
  //win.focus();
}

//javascript code for event popup

$('.upcoming_event_body_gellary_block').find('.download_link').click(function()
{


console.log($(this).parent().parent().prev().prev().find('img').attr('src'));
$('#eventmodal').find('.upcoming_event_body_gellary_imgblock').find('img').attr('src',$(this).parent().parent().prev().prev().find('img').attr('src'));
$('#eventmodal').find('h3.evdate').html($(this).parent().parent().prev().find('h3').html());
$('#eventmodal').find('div.eventdesc').html($(this).parent().prev('h4').html());
$('#eventmodal').find('h1.evname').html($(this).parent().prev('h4').prev('h2').html());
$('#eventmodal').modal('show');

}

);

//javascript code for intake packet form popup

$('.intake_form').click(function()
{
    console.log('popup');
    $('#intakemodal').modal('show');




}
    );



$('.thankyoubtn').click(function()
{
    console.log('popup');
    $('#thankyou_popup').modal('show');




}
    );











//dropdown function for top navigation

$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

//javascript code for faq scroll


function get_hostname(url) {
    var m = url.match(/^http:\/\/[^/]+/);
    return m ? m[0] : null;
}

//if($(window).width>1024){

console.log(get_hostname(window.location.href));

        setTimeout(function(){



            $(window).scroll(function(){

                console.log($(document).scrollTop());
                if($(document).scrollTop()>0){

                    $('.faq_wrapper').css('background',' no-repeat top 0px center url( "'+get_hostname(window.location.href)+'/wp-content/themes/pearlhealth/images/faq_body_banner.png") ').css('background-attachment','fixed');
                }
                else  $('.faq_wrapper').css('background',' no-repeat top 60px center url( "'+get_hostname(window.location.href)+'/wp-content/themes/pearlhealth/images/faq_body_banner.png")').css('background-attachment','fixed');

            });

        },2000);

    //}


    

    

//javascript code for job popup

$('.job_link').click(function(){
    $('#jobmodal').modal('show');

    $('#jobmodal').find('div.poptextblock').eq(0).html($(this).text());
    $('#jobmodal').find('div.poptextblock').eq(1).html($(this).attr('job_description'));
    $('#jobmodal').find('div.poptextblock').eq(2).html($(this).attr('job_requirement'));
    $('#jobmodal').find('div.poptextblock').eq(3).find('span').eq(0).html($(this).attr('job_contact_person'));
    $('#jobmodal').find('div.poptextblock').eq(3).find('span').eq(1).html($(this).attr('job_contact_no'));
    $('#jobmodal').find('div.poptextblock').eq(3).find('span').eq(2).html($(this).attr('job_contact_email'));

});




    //alert(4);

    $('#ubm_add_banner').find('tr').eq(5).hide();
	$('.wpcf7-form-control-wrap').find('textarea').attr('rows',3);
    //console.log($('.wpcf7-form-control-wrap').find('textarea').attr('rows'));



    $('.staff_detail').click(function(){

        $('#staffmodal').modal('show');

        $('#staffmodal').find('.modal_body_left').find('img').attr('src',$(this).attr('photo'));
        $('#staffmodal').find('.modal_body_right').find('h1').eq(0).text($(this).attr('sname'));
        $('#staffmodal').find('.modal_body_right').find('h2').eq(0).text($(this).attr('sdept'));
        $('#staffmodal').find('.staffdesc').text($(this).attr('desc'));
        $('#staffmodal').find('.staffspcl').text($(this).attr('specialities'));


    });
    var i=0;
    var j=0;
    $('#myCarousel_gellaryphoto').find('p').each(function(){



        if($(this).text().length == 0 ){

            $(this).remove();
            console.log(i++);

        }
    });

    $('#myCarousel_gellaryvideo').find('p').each(function(){



        if($(this).text().length == 0 ){

            $(this).remove();
            console.log(j++);

        }
    });

    $('#myCarousel_gellaryphoto').find('.item').eq(0).addClass('active');
    $('#myCarousel_gellaryvideo').find('.item').eq(0).addClass('active');

    var thumbcount='';
    var itemcount='';
    var curpopup=0
    $('.gellary_body_photo_imgpopup').find('img').click(function(){


        console.log('clicked on img');
        curpopup=1;
        console.log($(this).parent().index());
        thumbcount=$(this).parent().index();
        itemcount=$(this).parent().parent().parent().parent().parent().parent().index();
        console.log('item: '+itemcount);

        $('.modal').find('.modal-body').html('<img style=max-width:100% src ='+$(this).attr("src")+'>');
        $('#imggallery').modal('show');


    });
    var cthumbcount=0; 
    var citemcount=0;

    $('.prevpopup').click(function()
    {
        //$(this).parent().prev().find('img').click();

        console.log('prev- start ');
        console.log('t'+thumbcount);
        console.log('i'+itemcount);



        /*if (thumbcount==$('#myCarousel_gellaryphoto').find('.item').eq(itemcount).find('.gellary_body_photo_imgpopup').last().index()) {

            $('#myCarousel_gellaryphoto').find('.item').eq(itemcount+1).find('.gellary_body_photo_imgpopup').eq(0).find('img').click();
            cthumbcount=0;
            citemcount=itemcount+1;
            console.log('in last ');

            itemcount=citemcount;
            thumbcount=cthumbcount;

            console.log('t'+thumbcount);
            console.log('i'+itemcount);
            console.log('imgprev');
            return;
        }*/

        if(curpopup==1) varpopd='#myCarousel_gellaryphoto';
        if(curpopup==2) varpopd='#myCarousel_gellaryvideo';


        if (thumbcount > 0 ) {
            $(varpopd).find('.item').eq(itemcount).find('.gellary_body_photo_img').eq(thumbcount-1).find('img').last().click();


            console.log('t'+thumbcount);
            console.log('i'+itemcount);
            console.log('imgprev');
            return;
        }

        if (thumbcount==0) {

            if(itemcount>=1) console.log('gt 1');
            else console.log($(varpopd).find('.item').last().find('.gellary_body_photo_img').last().html());
            if(itemcount>=1)$(varpopd).find('.item').eq(itemcount-1).find('.gellary_body_photo_img').last().find('img').last().click();
            else $(varpopd).find('.item').last().find('.gellary_body_photo_img').last().find('img').last().click();
            if(itemcount>=1) cthumbcount=$(varpopd).find('.item').eq(itemcount-1).find('.gellary_body_photo_img').last().index();
            else cthumbcount=$(varpopd).find('.item').last().find('.gellary_body_photo_img').last().index();
            if(itemcount>1)citemcount=itemcount-1;
            else citemcount=$(varpopd).find('.item').length;
            console.log('in ==0');

           /* itemcount=citemcount;
            thumbcount=cthumbcount;*/

            console.log('t'+thumbcount);
            console.log('i'+itemcount);
            console.log('imgprev');
            return;
        }






    });


    $('.nextpopup').click(function()
    {

        if(curpopup==1) varpopd='#myCarousel_gellaryphoto';
        if(curpopup==2) varpopd='#myCarousel_gellaryvideo';
        //$(this).parent().prev().find('img').click();

        console.log('prev- start ');
        console.log('t'+thumbcount);
        console.log('i'+itemcount);



        /*if (thumbcount==$('#myCarousel_gellaryphoto').find('.item').eq(itemcount).find('.gellary_body_photo_imgpopup').last().index()) {

         $('#myCarousel_gellaryphoto').find('.item').eq(itemcount+1).find('.gellary_body_photo_imgpopup').eq(0).find('img').click();
         cthumbcount=0;
         citemcount=itemcount+1;
         console.log('in last ');

         itemcount=citemcount;
         thumbcount=cthumbcount;

         console.log('t'+thumbcount);
         console.log('i'+itemcount);
         console.log('imgprev');
         return;
         }*/


        if (thumbcount < $(varpopd).find('.item').eq(itemcount).find('.gellary_body_photo_img').last().index() ) {
            $(varpopd).find('.item').eq(itemcount).find('.gellary_body_photo_img').eq(thumbcount+1).find('img').last().click();


            console.log('t'+thumbcount);
            console.log('i'+itemcount);
            console.log('imgprev');

            return;
        }

        if (thumbcount ==  $(varpopd).find('.item').eq(itemcount).find('.gellary_body_photo_img').last().index()) {

            console.log( $(varpopd).find('.item').length);
            if(itemcount>=1) console.log('gt 1');
            else console.log($(varpopd).find('.item').last().find('.gellary_body_photo_img').last().html());
            if(itemcount== $(varpopd).find('.item').length-1){
                console.log('last img');
                $(varpopd).find('.item').eq(0).find('.gellary_body_photo_img').eq(0).find('img').last().click();
            }
            else $(varpopd).find('.item').eq(itemcount+1).find('.gellary_body_photo_img').eq(0).find('img').last().click();
           /* if(itemcount>=1) cthumbcount=$('#myCarousel_gellaryphoto').find('.item').eq(itemcount-1).find('.gellary_body_photo_imgpopup').last().index();
            else cthumbcount=$('#myCarousel_gellaryphoto').find('.item').last().find('.gellary_body_photo_imgpopup').last().index();
            if(itemcount>1)citemcount=itemcount-1;
            else citemcount=$('#myCarousel_gellaryphoto').find('.item').length;*/
            console.log('in ==0');

            /* itemcount=citemcount;
             thumbcount=cthumbcount;*/

            console.log('t'+thumbcount);
            console.log('i'+itemcount);
            console.log('imgprev--- next ');
            return;
        }






    });


    $('.gellary_body_photo_videopopup').find('.video_playbtn').click(function(){


        console.log('clicked on video');

        $('.modal').find('.modal-body').html("<iframe height=360 width=640 style=max-width:100% src="+$(this).prev().attr('videourl')+" frameborder=0 allowfullscreen  autoplay=1></iframe>");


        $('#imggallery').modal('show');

        thumbcount=$(this).parent().parent().index();
        itemcount=$(this).attr('imgc');
        var itemcountv=itemcount%3;
        itemcount=(itemcount-itemcountv)/3;
        console.log('tt---'+thumbcount);
        console.log('it---'+itemcount);
        console.log('html---'+$(this).parent().parent().parent().parent().parent().parent().parent().parent().index($(this).parent().parent().parent().parent().parent().parent().parent()));
        curpopup=2;


    });



    $('#imggallery').on('hidden.bs.modal', function () {
        // do something…


        $('.modal').find('.modal-body').empty();
    });





    if($('#wpcf7-f968-p8-o1').find('.screen-reader-response').text().length>0) {
		console.log('in screen');
		console.log($('.wpcf7-not-valid-tip').length);
		if($('.wpcf7-not-valid-tip').length==0) {
            $('#thankyou_popup').find('.thankyoutextcon').text('Thank You For Submitting Your Intake Document. A Pearl Health Member will contact you shortly.');
            $('#thankyou_popup').modal('show');
            $('.screen-reader-response').text('');
            setTimeout(function(){
            $('#thankyou_popup').modal('hide');}
            ,8000);
        }
		
		else
        {

		
		$('#intakemodal').modal('show');
        
    }
	}

    if($('#wpcf7-f798-p91-o1').find('.screen-reader-response').text().length>0) {
        console.log('in screen');
        console.log($('.wpcf7-not-valid-tip').length);
        if($('.wpcf7-not-valid-tip').length==0) {
            $('#thankyou_popup').find('.thankyoutextcon').text('Thank You For Submitting Your Resume. It Has Been Successfully Submitted.');
            $('#thankyou_popup').modal('show');
            $('.screen-reader-response').text('');
            setTimeout(function(){
            $('#thankyou_popup').modal('hide');}
            ,8000);
        }
        
        
    }

    if($('#wpcf7-f954-p95-o1').find('.screen-reader-response').text().length>0) {
        console.log('in screen');
        console.log($('.wpcf7-not-valid-tip').length);
        if($('.wpcf7-not-valid-tip').length==0) {
            $('#thankyou_popup').modal('show');
            $('.screen-reader-response').text('');
            setTimeout(function(){
             $('#thankyou_popup').modal('hide');}
             ,8000);
        }
        
        
    }



    var randomnumber=Math.random()*Math.random()*Math.random();
    //randomnumber=randomnumber.replace('.','');

$('#intakemodal').find('input[name="testtext"]').val(randomnumber);
$('#intakemodal').find('input[name="testtext"]').hide();



});


//javascript code for pdf conversion

function demoFromHTML() {
    var pdf = new jsPDF('p', 'pt', 'letter');
    // source can be HTML-formatted string, or a reference
    // to an actual DOM element from which the text will be scraped.
    source = $('#intakemodal')[0];

    // we support special element handlers. Register them with jQuery-style 
    // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
    // There is no support for any other type of selectors 
    // (class, of compound) at this time.
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"
            return true
        }
    };
    margins = {
        top: 80,
        bottom: 20,
        left: 0,
        width: 910
    };
    // all coords and widths are in jsPDF instance's declared units
    // 'inches' in this case
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        // dispose: object with X, Y of the last line add to the PDF 
        //          this allow the insertion of new lines after html
        pdf.save('Test.pdf');
    }, margins);
}



$(window).load(function(){
    var n;

    $('.textareabox').html('');

   if(typeof(arrval) != 'undefined'){

    var arrval1 = jQuery.parseJSON(arrval);

    for(n in arrval1){
        $('input[name="'+n+'"][type!="radio"]').val(arrval1[n]);
        $('textarea[name="'+n+'"]').val(arrval1[n]);
        $('select[name="'+n+'"]').val(arrval1[n]);
        $('input[name="'+n+'"][type="radio"][value="'+arrval1[n]+'"]').prop('checked',true);

        if(n=='checkboxPrimaryCareMedicine' ||n=='checkboxPsychiatricMedicine' ||n=='checkboxNeuropsychological' ||n=='checkboxCounseling' ||n=='checkboxNeurofeedback' ||n=='checkboxCaseManagement' ||n=='checkboxEatingDisorderTherapy' ||n=='checkboxPTSDClinic' ||n=='checkboxCommunityBasedRehabilitationServices' || n=='checkboxSubstanceAbuseProgram'  || n=='checkboxPearlSupportiveLiving'){
            if(arrval1[n] == 1){
                $('span.'+n).find('input[type="checkbox"]').prop('checked',true);
            }else{
                $('span.'+n).find('input[type="checkbox"]').prop('checked',false);
            }
        }
    }

   }


  $('span.requestingspecific').append('<div class="textareabox2 requestingspecifictextareabox" style="display:none;">'+$('span.requestingspecific').find('textarea').val()+'</div>');
  $('span.currentproblem').append('<div class="textareabox2 currentproblemtextareabox" style="display:none;">'+$('span.currentproblem').find('textarea').val()+'</div>');
  $('span.medications').append('<div class="textareabox2 medicationstextareabox" style="display:none;">'+$('span.medications').find('textarea').val()+'</div>');



$(".wpcf7").on('wpcf7:invalid', function(event){
  // Your code here

alert(6);
});


});

function printarea(){

    window.print();
}
