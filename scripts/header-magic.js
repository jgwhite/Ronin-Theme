var ronin = {
 	LOGO_MAX: 167,
	LOGO_MIN: 67,
	SCROLL_MIN: 0,
	SCROLL_MAX: 100
}

ronin.headerMagic = function() {
	if ($('body').height() < $(window).height()) {
		$('#home_link').height(ronin.LOGO_MAX);
		return; // don't do nothing
	}
	
	var scrollTop = $(window).scrollTop();
	scrollTop = Math.max(ronin.SCROLL_MIN, Math.min(scrollTop, ronin.SCROLL_MAX));
	var scrollPortion = (ronin.SCROLL_MAX - scrollTop) / ronin.SCROLL_MAX;
	var logoRange = ronin.LOGO_MAX - ronin.LOGO_MIN;
	var size = ronin.LOGO_MIN + (scrollPortion * logoRange);
	$('#home_link').height(size);
}

$(function() {
	$('#header').css({
		left: 0,
		right: 0,
		top: 0,
		width: 'auto',
		position: 'fixed',
		zIndex: 1000,
		background: '#FFDB28',
		borderBottom: '1px solid #D7B82C'
	});
	$('#access').css({
		display: 'block',
		float: 'none',
		margin: '0 auto'
	});
	$('body').css({
		paddingTop: '200px'
	})
	ronin.headerMagic();
})

$(window).bind('scroll', ronin.headerMagic);
