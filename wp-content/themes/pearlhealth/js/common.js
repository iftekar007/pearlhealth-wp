/**
 * Created by iftekar on 8/3/16.
 */

$(function(){

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


    $('.gellary_body_photo_imgpopup').find('img').click(function(){


        console.log('clicked on img');

        $('.modal').find('.modal-body').html('<img style=max-width:100% src ='+$(this).attr("src")+'>');
        $('#imggallery').modal('show');


    });

    $('.gellary_body_photo_videopopup').find('img').click(function(){


        console.log('clicked on img');

        $('.modal').find('.modal-body').html("<iframe height=360 width=640 style=max-width:100% src="+$(this).attr('videourl')+" frameborder=0 allowfullscreen></iframe>");
        $('#imggallery').modal('show');


    });


});