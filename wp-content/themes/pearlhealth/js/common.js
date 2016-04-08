/**
 * Created by iftekar on 8/3/16.
 */

$(function(){
		   
	//accordion click	   
	
	$(".faq_body_main_middle_block3:nth-child(odd)").css("background-color", "yellow");
	
	$('#accordion').find('a').addClass('collapsed');
	
	$('#accordion').find('a').eq(0).removeClass('collapsed');
$('.wpcf7-not-valid-tip').css('display','block').css('clear','both');
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
$('#eventmodal').find('h2.evdate').html($(this).parent().parent().prev().find('h3').html());
$('#eventmodal').find('div.eventdesc').html($(this).parent().prev('h4').html());
$('#eventmodal').find('h1.evname').html($(this).parent().prev('h4').prev('h2').html());
$('#eventmodal').modal('show');

}

);

//dropdown function for top navigation

$('.dropdown').hover(function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
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




});
