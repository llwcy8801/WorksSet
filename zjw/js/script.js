$(function(){
	$('.header_menu').children('li').mouseover(function(){
		$(this).children('div').addClass('header_menu_div');
	});
	$('.header_menu').children('li').mouseleave(function(){
		$(this).children('div').removeClass('header_menu_div');
	});
	setFastenter();
	function setFastenter(){
		var item_imgs=$('.fastenter_item');
		item_imgs.each(function(){
			var $this=$(this),$index=$this.index();
			if($index!=0){
				$this.find('.fastenter_btn_img').css("background-position",2-30*$index+"px 0");
				$this.hover(function(){
					$this.find('.fastenter_btn_img').css("background-position",2-30*$index+"px -30px");
					$this.find('.fastenter_btn').css('background-color','#e32235');
					$this.find('.fastenter_link').css('color','#cf0e29');
					$this.css('border-bottom','3px solid #cf0e29');
				},function(){
					$this.find('.fastenter_btn_img').css("background-position",2-30*$index+"px 0");
					$this.find('.fastenter_btn').css('background-color','#fff');
					$this.find('.fastenter_link').css('color','#737373');
					$this.css('border-bottom','');
				});	
			}else{
				$this.hover(function(){
					$this.find('.fastenter_btn_img').css("background-position","0 -29px");
					$this.find('.fastenter_btn').css('background-color','#e32235');
					$this.find('.fastenter_link').css('color','#cf0e29');
					$this.addClass('fastenter_item_bottom');
				},function(){
					$this.find('.fastenter_btn_img').css("background-position","0 0");
					$this.find('.fastenter_btn').css('background-color','#fff');
					$this.find('.fastenter_link').css('color','#737373');
					$this.removeClass('fastenter_item_bottom');
				});	
			};

		});
	}
	setServices_query();
	function setServices_query(){
		var list=$('.services_query_list').find('ul').children('li');
		list.each(function(){
			var $this=$(this),$index=$this.index();
			$this.find('.services_query_item').css('background-position',-$index*68+'px 0');
		});
	}
	setCivil();
	function setCivil(){
		var list=$('.civil_btn');
		list.each(function(){
			var $this=$(this),$index=$this.index();
			$this.find('.civil_img').css('background-position',-32*$index+'px 0');	
			$this.hover(function(){$this.find('.civil_img').css('background-position',-32*$index+'px -32px');},
				function(){$this.find('.civil_img').css('background-position',-32*$index+'px 0')});
		});
	}
	setFade();
	function setFade(){
		var video=$('.studio_video');
		video.mouseover(function(){$(this).find('.studio_video_cover').stop(true,true).delay(500).fadeIn();});
		video.mouseleave(function(){$(this).find('.studio_video_cover').stop(true,true).delay(500).fadeOut();});
	}
	setAd();
	function setAd(){
		var list=$('.ad_li');
		list.each(function(){
			var $this=$(this),$index=$this.index();
			$this.find('.ad_item').css('background-position',-184*$index+'px 0');
		});
	}
	setTop();
	function setTop(){
		var top=$('#link_top');
		top.click(function(){
			scroll(0,0);
		});
	}
});
