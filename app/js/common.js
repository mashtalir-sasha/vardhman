$(function() {

	$('.head-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		adaptiveHeight: true,
		autoplay: true,
		adaptiveHeight: true,
		prevArrow: '<div class="arr-left"></div>',
		nextArrow: '<div class="arr-right"></div>'
	});

	if (window.location.hash === '#contact' ) {
		$('html, body').stop().animate({
			scrollTop: $('#contact').offset().top-123
		}, 300);
	}

	$('.link a').bind("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top-123
		}, 300);
	e.preventDefault();
	});

	$('.scrollTop').click(function(){
		$('html, body').stop().animate({
			scrollTop: $('#top').offset().top-123
		}, 300);
	});

	$('.main-product__img[data-id="tab1"]').click(function() {
		$(this).removeClass('mini');
		$(this).addClass('big');
		$('[data-id="tab2"]').removeClass('big');
		$('[data-id="tab2"]').addClass('mini');
		$('[data-tab="tab2"]').removeClass('show');
		$('[data-tab="tab1"]').addClass('show');
	});
	$('.main-product__img[data-id="tab2"]').click(function() {
		$(this).removeClass('mini');
		$(this).addClass('big');
		$('[data-id="tab1"]').removeClass('big');
		$('[data-id="tab1"]').addClass('mini');
		$('[data-tab="tab1"]').removeClass('show');
		$('[data-tab="tab2"]').addClass('show');
	});
	
	$('.tab-panel li[data-id="tab1"]').click(function() {
		$('.tab-panel li:not([data-id="tab1"])').removeClass('active');
		$(this).addClass('active');
		$('.tab-content:not([data-tab="tab1"])').removeClass('show');
		$('.tab-content[data-tab="tab1"]').addClass('show');
	});

	$('.tab-panel li[data-id="tab2"]').click(function() {
		$('.tab-panel li:not([data-id="tab2"])').removeClass('active');
		$(this).addClass('active');
		$('.tab-content:not([data-tab="tab2"])').removeClass('show');
		$('.tab-content[data-tab="tab2"]').addClass('show');
	});

	$('.tab-panel li[data-id="tab3"]').click(function() {
		$('.tab-panel li:not([data-id="tab3"])').removeClass('active');
		$(this).addClass('active');
		$('.tab-content:not([data-tab="tab3"])').removeClass('show');
		$('.tab-content[data-tab="tab3"]').addClass('show');
	});

	/*$('.fancybox').fancybox({
		margin: 0,
		padding: 0
	});

	$('form').submit(function() {
		var data = $(this).serialize();
		var goalId = $(this).find("input[name='goal']").val();
		var nameForm = $(this).data('name');
		data += '&ajax-request=true';
		$.ajax({
			type: 'POST',
			url: 'mail.php',
			dataType: 'json',
			data: data,
			success: (function() {
				''gtag('event','submit',{'event_category':'submit','event_action':goalId});
				//fbq('track', 'Lead');
			})()
		});
		return false;
	});*/

	$('.about-slider, .about-second-slider, .top-goods').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		adaptiveHeight: true,
		autoplay: true,
		dots: true,
		arrows: false,
		adaptiveHeight: true
	});

	$('.mob-menu__btn').click(function() {
		$('.nav-mnu').toggleClass('visible-xs');
		$('.nav-mnu').toggleClass('hidden-xs');
	});

});