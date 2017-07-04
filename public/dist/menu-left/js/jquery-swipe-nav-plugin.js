jQuery(document).ready(function($){
	$.fn.swipeNav = function(options) {
		var options = $.extend( {
			menu : this,
			menuBtn : $('#menuBtn'),
			body : $('#contentRight'),
			menuSpeed : 300,
		}, options);

		var menuWidth = options.menu.width();
		$('#contentLeft').css({
			'overflow-x' : 'hidden',
			'position': 'relative',
			'margin-left' : '-230px',
		});
		options.menu.css({
			'position' : 'fixed',
			'top' : 0,
			'width': + menuWidth + 'px',
			'height' : 100 + '%',
		});
		options.menuBtn.on('click',function(){
			options.body.toggleClass('open');
			if(options.body.hasClass('open')){
				options.menu.css({
					'display' : 'block'
				});
				options.menu.animate({'left' : +menuWidth }, options.menuSpeed);
				options.body.animate({'margin-left' : 0 }, options.menuSpeed);
			} else {
				options.body.animate({'margin-left' : menuWidth }, options.menuSpeed);
				options.menu.animate({'left' : 0 }, options.menuSpeed);

			}
		});
	}
});