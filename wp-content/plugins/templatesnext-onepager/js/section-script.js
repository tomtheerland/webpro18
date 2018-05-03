jQuery(document).ready(function($) {
	
	$('.current_page_item').removeClass('current_page_item').addClass('current_home');
	$('#ibanner, #aboutus,#portfolio,#blog,#contact,#services,#testimonials,#team').waypoint(function(direction) {
		
		var _this = $(this);
		
		if(direction == "down")
		{
			if($(this).attr('id') == "ibanner")
			{
				$('.current-menu-item').removeClass('current-menu-item');
				$('.current_home').addClass('current-menu-item');				
			} else
			{
				$('.current-menu-item').removeClass('current-menu-item');
				$('ul.nav-menu > li > a[href="#'+_this.attr('id')+'"]').parent('li').addClass('current-menu-item');
			}
			console.log(_this.attr('id')+" : Arrived Down");
		}
	},
	{
		offset: '10%'
	});
	
	$('#ibanner, #aboutus,#portfolio,#blog,#contact,#services,#testimonials,#team').waypoint(function(direction) {
		
		var _this = $(this);	
		
		if(direction == "up")
		{
			if($(this).attr('id') == "ibanner")
			{
				$('.current-menu-item').removeClass('current-menu-item');
				$('.current_home').addClass('current-menu-item');				
			} else
			{			
				$('.current-menu-item').removeClass('current-menu-item');
				$('ul.nav-menu > li > a[href="#'+_this.attr('id')+'"]').parent('li').addClass('current-menu-item');
			}
			//console.log(_this.attr('id')+" : Arrived Up");	
		}

	},
	{
		offset: '-80%'
	});
	
	/*
	$('.blog-masonry .nx-post-border,.nx-posts-layout-masonry .nx-post-border, .sp-posts.blog-standard .nx-post-border').each(function (index) {
		var _this = $(this);
		
		_this.css('visibility', 'hidden').addClass('animated');
		_this.one('inview', function () {
			setTimeout( function () {
				_this.css('visibility', 'visible').addClass('fadeInUp');
				//console.log(elcounter);
   			}, (Math.floor((Math.random() * 320) + 24)));
		});
		
	});
	*/
	
	$('.tx-team .tx-team-box').each(function (index) {
		var _this = $(this);
		
		_this.css('visibility', 'hidden').addClass('animated');
		_this.one('inview', function () {
			setTimeout( function () {
				_this.css('visibility', 'visible').addClass('fadeInUp');
   			}, (Math.floor((Math.random() * 72) + 12)));
		});
		
	});
	
	$('#aboutus .tx-fw-content, #services .tx-service, #portfolio .tx-fw-content, #testimonials .tx-fw-content').each(function (index) {
		var _this = $(this);
		
		_this.css('visibility', 'hidden').addClass('animated');
		_this.one('inview', function () {
			setTimeout( function () {
				_this.css('visibility', 'visible').addClass('fadeInUp');
   			}, (Math.floor(120)));
		});
		
	});	
	
	$('.txo-pie').each( function () {
		
		var _this = $(this);
		var pie_value = $(this).data('value');
		var pie_size = $(this).data('size');
		var pie_thickness = $(this).data('thickness');
		var pie_fill = $(this).data('fill');
		var pie_empty_fill = $(this).data('empty-fill');
		
		_this.one('inview', function () {
					
			_this.circleProgress({
				value: pie_value,
				size: pie_size,
				fill: pie_fill,
				emptyFill: pie_empty_fill,
				thickness: pie_thickness
			});
		});
		
		console.log(pie_empty_fill);
		
	});
	
	
	$('.tx-blog a.moretag').each(function (index) {
		$( this ).wrap( "<div class='moretagwrap'></div>" );
	});
	/*
	$('.parallax-container').each(function (index) {
		$(this).one('inview', function () {
			setTimeout( function () {
				$('.parallax-container').parallaxBackground();
			}, (400));
		});			
	});
	*/

	var isMobile = {
		Windows: function() {
			return /IEMobile/i.test(navigator.userAgent);
		},
		Android: function() {
			return /Android/i.test(navigator.userAgent);
		},
		BlackBerry: function() {
			return /BlackBerry/i.test(navigator.userAgent);
		},
		iOS: function() {
			return /iPhone|iPad|iPod/i.test(navigator.userAgent);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
		}
	};

		
	var $window = jQuery(window);
	var windowwidth = $window.width();
	
	$('.tx-testimonials').each(function (index) {
		if(windowwidth < 1200)
		{
			setTimeout( function () {
				$('.tx-testimonials').css({"padding-left":"32px","padding-right":"32px"});
			}, (400));
		}
	});
	
	
	$('.parallax-container').each(function (index) {
		
		var px_z_index = $(this).children('.tx-fw-overlay').data('z-index')+1;
		var px_overlay = $(this).children('.tx-fw-overlay').data('overlay');		

		console.log("parallax on : ");
		$(this).children('.tx-fw-overlay').css({"z-index":(px_z_index+1), "position":"relative", "background-color": px_overlay});
		
	});
	/**/
	
	$('.parallax-container').parallax({
		speed : 0.15,
	});
	
});

