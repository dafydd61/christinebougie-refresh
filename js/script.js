function category_reveal() {
	$('.widget_mycategoryorder li:gt(4)').addClass('extraCats').hide();
	$('.widget_mycategoryorder .widget-title').append('<a class="more" href="#">Show me all of them</a><a class="less" href="#">Show me just a few</a>').click(function(e) {
		e.preventDefault();
		$(this).parent().toggleClass('expanded');
		$('.extraCats').slideToggle('slow');
	});
}

function swapContent(first, second, content) {
	if ( content == first ) {
		c = second;
	} else {
		c = first;
	}
	return c;
}

function screen_change() {
	if ( !$('#menulink').length ) {
		//$('header[role="banner"] h1').prepend('<a id="menulink" href="#">MENU</a>');
	}
}

function screen_size() {
}

$(document).ready(function() {

	$('body').on('click', '#menulink', function(e) {
		e.preventDefault();
		$('#access').toggleClass('access-open');
		$(this).toggleClass('access-open');
		// $('#access').slideToggle(100);
		// $(this).html(swapContent('MENU', 'HIDE', $(this).html())).toggleClass('show');
		// $('header[role="banner"]').css( {
		// 	'background-image' : 'none'
		// } ).animate ( {
		// 	'padding-top' : 0
		// }, '100', function() {
		// 	$('html, body').animate({scrollTop: 0}, 100);
		// } );
	});

	// screen_size();
	if ( Modernizr.mq('only all and (max-width: 960px)') ) {
		$('#menu-mainnav').append('<li id="back-matter"><a href="#sidebar">Back&nbsp;Matter</a></li>');
	} else {
		$('#back-matter').remove();
	}

	// $('#access').hide();
	// $('header[role="banner"] h1').prepend('<a id="menulink" href="#">MENU</a>');
	category_reveal();

	$(window).resize(function() {
		screen_change();
	});
});