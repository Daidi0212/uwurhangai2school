$(document).ready(function(){
	$("div ul#menu-header li:nth-child(1)").prepend('<span style="background:#f8ba17;width:10px;height:10px;position:absolute;margin:20px 20px 0px 0px;"></span>');
	$("div ul#menu-header li:nth-child(2)").prepend('<span style="background:#92077e;width:10px;height:10px;position:absolute;margin:20px 20px 0px 0px;"></span>');
	$("div ul#menu-header li:nth-child(3)").prepend('<span style="background:#87795e;width:10px;height:10px;position:absolute;margin:20px 20px 0px 0px;"></span>');
	$("div ul#menu-header li:nth-child(4)").prepend('<span style="background:#e95f00;width:10px;height:10px;position:absolute;margin:20px 20px 0px 0px;"></span>');
	$("div ul#menu-header li:nth-child(5)").prepend('<span style="background:#6cb204;width:10px;height:10px;position:absolute;margin:20px 20px 0px 0px;"></span>');
	$("div ul#menu-header li:nth-child(6)").prepend('<span style="background:#c60000;width:10px;height:10px;position:absolute;margin:20px 20px 0px 0px;"></span>');
	$('.navbar').children().children().last().append('<li class="other" style="width:100%;display:none;background:rgba(0,0,0,0.5);color:#fff;padding:5px;">Бусад мэню</li>');
	$("div ul#menu-header li:nth-child(1)").mouseenter(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#f8ba17',
				'border-bottom':'1px solid #f8ba17',
				'background':'rgba(0,0,0,0)'
			});
	});
	$("div ul#menu-header li:nth-child(1)").mouseleave(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#4d4d4d',
				'border-bottom':'1px solid transparent',
				'background':'transparent'
			});
	});

	$("div ul#menu-header li:nth-child(2)").mouseenter(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#92077e',
				'border-bottom':'1px solid #92077e',
				'background':'rgba(0,0,0,0)'
			});
	});
	$("div ul#menu-header li:nth-child(2)").mouseleave(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#4d4d4d',
				'border-bottom':'1px solid transparent',
				'background':'transparent'
			});
	});

	$("div ul#menu-header li:nth-child(3)").mouseenter(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#87795e',
				'border-bottom':'1px solid #87795e',
				'background':'rgba(0,0,0,0)'
			});
	});
	$("div ul#menu-header li:nth-child(3)").mouseleave(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#4d4d4d',
				'border-bottom':'1px solid transparent',
				'background':'transparent'
			});
	});

	$("div ul#menu-header li:nth-child(4)").mouseenter(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#e95f00',
				'border-bottom':'1px solid #e95f00',
				'background':'rgba(0,0,0,0)'
			});
			$(this).children("a").attr('target','_blank');
	});
	$("div ul#menu-header li:nth-child(4)").mouseleave(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#4d4d4d',
				'border-bottom':'1px solid transparent',
				'background':'transparent'
			});
	});

	$("div ul#menu-header li:nth-child(5)").mouseenter(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#6cb204',
				'border-bottom':'1px solid #6cb204',
				'background':'rgba(0,0,0,0)'
			});
	});
	$("div ul#menu-header li:nth-child(5)").mouseleave(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#4d4d4d',
				'border-bottom':'1px solid transparent',
				'background':'transparent'
			});
	});

	$("div ul#menu-header li:nth-child(6)").mouseenter(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#c60000',
				'border-bottom':'1px solid #c60000',
				'background':'rgba(0,0,0,0)'
			});
	});
	$("div ul#menu-header li:nth-child(6)").mouseleave(function(){
			$(this).children("a").css({
				'transition': '0.2s',
				'color':'#4d4d4d',
				'border-bottom':'1px solid transparent',
				'background':'transparent'
			});
	});

	/*   Search settings */
	$("#searchsubmit").attr({
		"value":"Хайх",
	});
	/* dropdown */
	$("#menu-sub").children().children().mouseenter(function(){
		$(this).parent().find(".sub-menu").slideDown('fast');
		$(this).parent().prevAll().find(".sub-menu").slideUp('fast');
		$(this).parent().nextAll().find(".sub-menu").slideUp('fast');
	});
	$("#menu-sub").mouseleave(function(){
		$(this).children().find(".sub-menu").slideUp('fast');
	});
	/* End of dropdown */

	/* Navigation menu colorfull square icon */
	$("#s").attr("placeholder","Бид Монгол Соёлыг түгээнэ ( Та хайлт хийх бол энд хийнэ үү! )");
	$(".menu-sub-container #menu-sub li a").append('&nbsp;&nbsp;<i class="fa fa-angle-down"></i>');
	$(".menu-sub-container #menu-sub li ul.sub-menu li a i").removeAttr('class');
	/* End of navigation menu colorfull square icon */
	
	/*  Window scroll function */
	var doc = $(document),
    fadeElement = $('.fade');

    doc.on('scroll',function(){
            var $this = $(this),
            elemOffSetTop = $this.scrollTop();
            if(elemOffSetTop > 50 ){
            	$('.navbar').css({
            		'background':'rgba(255,255,255,0.9)',
            		'transition':'0.2s',
            		'border-bottom':'1px solid rgba(0,0,0,0.5)'
            	});


            } else {
            	$('.navbar').css({
            		'background':'rgba(255,255,255,0.9)',
            		'transition':'0.2s',
            		'border-bottom':'1px solid rgba(0,0,0,0)'
            	});
            }
    });
    /* End of  window scroll function */
    /* Burger menu function */
    $(document).on('click','.fa.fa-bars', function(){
    	$('.navbar').slideDown('slow');
    	$('.other').css('display','block')
    	$(this).attr('class','fa fa-times');
    });
    $(document).on('click','.other', function(){
    	$('.navbar').slideUp('slow');
    	$('#menu-sub').slideDown('slow');
    });
    /*$('#menu-sub').slideDown('fast');*/
    $(document).on('click','.fa.fa-times', function(){
    	$('.navbar').slideUp('slow');
    	$('#menu-sub').slideUp('slow');
    	$(this).attr('class','fa fa-bars');
    });
    $('#menu-sub').children().children().children().filter(".fa.fa-angle-down").parent().attr('href','#');
}); /* End of whole script*/